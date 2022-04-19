<?php

$_auth = 1;
require_once('module/auth.php');

if ($_POST and isset($_GET['resend']))
{
	require_once('lib/inet.php');
	inet_request(fullURL(moduleToLink('balance/status'), false), $_POST);
}

require_once('lib/psys.php');

$table = 'Opers';
$id_field = 'oID';
$uid_field = 'ouID';
$out_link = moduleToLink('balance');

try 
{

	if (sendedForm('', 'add'))
	{
		//checkFormSecurity('add');

		if (!_IN('Oper'))
			goToURL($out_link);
		$a = $_IN;
		cn($a['Sum']);
		if (($a['Oper'] == 'CASHOUT') and $_cfg['Bal_NeedPIN'] and (md5($a['PIN'] . $_cfg['Const_Salt']) != $_user['uPIN']))
			setError('pin_wrong', 'add');
		if ($_cfg['Depo_AutoDepo'] and ($a['Oper'] == 'CASHIN'))
		{
			useLib('depo');
			$err = opDepoCreate(_uid(), $a['PSys'], $a['Sum'], $a['Compnd'], $a['Plan'], false, 2);
			if ($err != 'passed')
				setError($err, 'add');
		}
		if (!isset($a['PSys']))
			$a['PSys'] = 1;
		$params = array(
			'uid2' => $db->fetch1($db->select('Users', 'uID', 'uLogin=?', array($a['Login2']))),
			'cid2' => $a['PSys2'],
			'pid' => $a['Plan'],
			'compnd' => $a['Compnd']
		);
		$cid = $a['PSys'];
		if ($_cfg['Const_IntCurr'] and ($a['Oper'] == 'CASHOUT'))
		{
			$params['cid2'] = $a['PSys'];
			$a['Oper'] = 'EX';
			$a['PSys'] = 1;
		}
		setError($id = opOperCreate(_uid(), $a['Oper'], $a['PSys'], $a['Sum'], $params, $a['Memo']), 'add');
		showInfo('Saved', moduleToLink() . "?id=$id" . valueIf($a['Oper'] == 'CASHIN', '&pay'));
	}

	if (sendedForm('', 'data'))
	{
		checkFormSecurity('data');

		if ($o = $db->fetch1Row($db->select('Opers LEFT JOIN Currs on cID=ocID', '*', 
			"$id_field=?d and $uid_field=?d and oOper=? and oState<=1", array(_INN('oID'), _uid(), 'CASHIN'))))
		{
			$a = array(
				'date' => timeToStamp(textToTime(_IN('date'))),
				'batch' => strip_tags(_IN('batch')),
				'memo' => _IN('memo')
			);
			if (!$a['date'] or (stampToTime($a['date']) >= time()))
				setError('data_date_wrong', 'data');
			if (!$a['batch'])
				setError('data_batch_wrong', 'data');
			setError($a = opEditToCurrParams(getPayFields($o['cCID']), $a, $_IN), 'data');
			$db->update('Opers', array('oParams2' => arrayToStr($a)), '', 'oID=?d', ($o['oID']));
			showInfo('Saved');
		}
		showInfo('*Error');
	}
	
	if ($id = _INN($id_field))
	{
		checkFormSecurity();
		
		if ($o = $db->fetch1Row($db->select('Opers', '*', "$id_field=?d and $uid_field=?d", array($id, _uid()))))
		{
			if (sendedForm('del') and ($o['oState'] >= 5))
			{
				$db->delete('Opers', 'oID=?d', array($id));
				showInfo('Deleted', $out_link);
			}
			elseif (sendedForm('cancel') and ($o['oState'] <= 2))
			{
				if (opOperCancel(_uid(), $id, array()) === true)
					showInfo('Canceled');
			}
			elseif (sendedForm() and ($o['oState'] <= 1))
			{
				if ($_cfg['SMS_CASHOUT'] and (($o['oOper'] == 'CASHOUT') or (($o['oOper'] == 'EX') and ($o['ocID'] == 1))))
				{
					useLib('confirm');
					$tel = $_user['aTel'];
					opConfirmPrepareSMS(_uid(), 'OPER', array('oid' => $id, 'tel' => $tel), '', $tel);
					showInfo('Saved', moduleToLink('confirm') . '?need_confirm_sms');
				}
				$err = opOperConfirm(_uid(), $id, array());
				if (($err === 'limit_exceeded') and ($_currs[$o['ocID']]['c' . $o['oOper'] . 'Mode'] == 2))
				{
					setError(opOperConfirm(_uid(), $id, array(), true));
					sendMailToAdmin('OperRequired', 
						opUserConsts($_user, array('oid' => $id, 'url' => fullURL(moduleToLink('balance/admin/oper')))));
				}
				else
				{
					setError($err);
					if ($o['oOper'] != 'CASHIN')
					{
						if ($_currs[$o['ocID']]['c' . $o['oOper'] . 'Mode'] == 2)
						{
							setError(opOperComplete(_uid(), $id, array('initid' => $id)));
							if ($p = strToArray($db->fetch1($db->select('Opers', 'oParams2', "$id_field=?d", array($id)))))
								if ($id = $p['newid'])
									showInfo('Completed', moduleToLink() . "?id=$id");
						}
						else
							sendMailToAdmin('OperRequired', 
								opUserConsts($_user, array('oid' => $id, 'url' => fullURL(moduleToLink('balance/admin/oper')))));
					}
				}
				showInfo();
			}
		}
		showInfo('*Error');
	}

} 
catch (Exception $e) 
{
}

if (!isset($_GET['add']))
{
	if ($id = _GETN('id'))
		$el = $db->fetch1Row($db->select("$table LEFT JOIN Users on uID=ouID LEFT JOIN Currs on cID=ocID", '*', "$id_field=?d and $uid_field=?d", array($id, _uid())));
	if (!$el)
		goToURL($out_link);
	if (isset($_GET['check']) and ($el['oOper'] == 'CASHIN'))
		if ($el['oState'] >= 3)
			goToURL(moduleToLink('balance/oper') . "?id=$id");
		else
			refreshToURL(5, moduleToLink('balance/oper') . "?id=$id&check");
	stampArrayToStr($el, 'oCTS, oTS, oNTS');
	$el['oParams'] = strToArray($el['oParams']);
	$el['oParams2'] = strToArray($el['oParams2']);
	stampArrayToStr($el['oParams2'], 'date', 1);
	setPage('el', $el);
	if (($el['oOper'] == 'CASHIN') and ($el['oState'] <= 2))
	{
		opDecodeCurrParams($el, $p, $p_sci, $p_api);
		if (in_array($el['cCASHINMode'], array(2, 3)))
		{
			setPage('pform', prepareSCI($el['cCID'], $p, $p_sci, $el['oSum'], $el['oParams2']['memo'], $id, 
				fullURL(moduleToLink('balance/oper')) . "?id=$id&check",
				fullURL(moduleToLink('balance')) . '?fail',
				valueIf(!$p_sci['hideurl'],
				fullURL(moduleToLink('balance/status'))),
				opDecodeUserCurrParams($_currs[$el['cID']]), $_cfg['Bal_ForcePayer']
			), 0);
			if (isset($_GET['pay']))
				showPage('_pform');
		}
		if (in_array($el['cCASHINMode'], array(1, 3)))
		{
			setPage('pfields', $pf = getPayFields($el['cCID']));
			setPage('pvalues', $p);
			if ($a = opCurrParamsToEdit($pf, '', $el['oState'] == 2))
				setPage('dfields', array(1 => '') + $a, 1);
			$c = getCIDs($el['cCID']);
			if (!$c[2])
				setPage('defaultbatch', 'IN' . str_pad($el['oID'], 6, '0', STR_PAD_LEFT));
		}
	}
	$db->update('Opers', array('oNTS' => ''), '', "$id_field=?d", array($id));
	updateUserCounters();
}
else
{
	$oper = _GET('add');
	if (!in_array($oper, array('CASHIN', 'CASHOUT', 'EX', 'TR')))
		goToURL($out_link);
	if (!$_cfg['Const_IntCurr'] or in_array($oper, array('CASHIN', 'CASHOUT', 'EX')))
	{
		$list = array();
		$list2 = array();
		foreach ($_currs as $id => $r)
			if (!$r['cHidden'])
			{
				switch ($oper)
				{
				case 'CASHIN':
					if (($r['cCASHINMode'] > 0) and ($id != 1))
						$list[$id] = $r['cName'];
					break;
				case 'CASHOUT':
					if (($r['cCASHOUTMode'] > 0) and ($id != 1))
						$list[$id] = $r['cName'];
					break;
				case 'EX':
					if ($r['cEXMode'] > 0)
						$list[$id] = $r['cName'] . valueIf($r['wBal'] > 0, '{!!} [' . _z($r['wBal'], $r['wcID'], -1) . ']');
					if ($r['cEXMode'] > 0)
						$list2[$id] = $r['cName'] . valueIf($r['wBal'] > 0, '{!!} [' . _z($r['wBal'], $r['wcID'], -1) . ']');
					break;
				case 'TR':
					if ($r['cTRMode'] > 0)
						$list[$id] = $r['cName'] . valueIf($r['wBal'] > 0, '{!!} [' . _z($r['wBal'], $r['wcID'], -1) . ']');
					break;
				}
			}
		if (!$list)
			showInfo('*CantComplete', $out_link);
		setPage('clist', $list);
		if ($oper == 'EX')
			setPage('clist2', $list2);
	}
	if (($oper=='CASHIN') and $_cfg['Depo_AutoDepo'])
	{
		useLib('depo');
		$plans = opDepoGetPlanList(_uid());
		$pl = array();
		$cmax = 0;
		foreach ($plans as $pid => $p)
			if (!$p['Disabled'])
			{
				$pl[$pid] = $p['pName'];
				if ($p['pCompndMax'] > $cmax)
					$cmax = $p['pCompndMax'];
			}
		if (!$pl)
			showInfo('*CantComplete', $out_link);
		setPage('plans', $pl);
		setPage('pcmax', $cmax);
		setPage('icurr', $_currs[1]['cCurr']);
	}
}

setPage('currs', $_currs);

$_GS['vmodule'] = 'balance';
showPage();

?>