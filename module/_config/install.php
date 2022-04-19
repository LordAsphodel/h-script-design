<?php

if (isset_IN('doFill'))
{

	if (!file_exists('_dbstru.php'))
		addMsg('Database structure "_dbstru.php" required');
	else
	{

	require_once('module/dbinit.php');
	
	require('_dbstru.php');
	
	$db->query("ALTER DATABASE $dbn DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");

//	if (in_array('InnoDB', $db->fetchRows($db->query('SHOW TABLE TYPES'), 'Engine')))
//		addMsg('* Server can process transactions');

	$ts = $db->fetchRows($db->query('SHOW TABLES'));
	if (count($ts) > 0)
		foreach ($ts as $t) 
			$db->query('DROP TABLE IF EXISTS ' . reset($t));

	$dt = valueIf($_cfg['db_type'], ' TYPE=' . valueIf($_cfg['db_type'] == 1, 'InnoDB', 'MYISAM'));
	foreach ($_dbstru as $t => $cmnd)
		$db->query("CREATE TABLE $t ($cmnd)$dt CHARACTER SET utf8 COLLATE utf8_general_ci");

	$psalt = substr(md5(uniqid(rand(), true).time()), 0, rand(6, 10));
	clearstatcache();
	$cfg = array(
		'Const' => array(
			'Salt' => $psalt,
			'NoLogins' => 0 + isset_IN('noLogins'),
			'IntCurr' => 0 + isset_IN('intCurr'),
			'DBVer' => @filemtime('_dbstru.php')
		),
		'Sys' => array(
			'AdminMail' => _IN('aMail'),
			'NeedReConfig' => 1
		),
		'UI' => array(
			'_Langs' => "en\r\nru",
			'NumDec' => 2
		),
		'Cron' => array(
			'Enabled' => 1
		),
		'Bal' => array(
			('Rate' . _IN('intCurrID')) => 1
		)
	);
	if (isset_IN('intCurr'))
		$cfg['Bal'] = array('UpdateRates' => 1);

	foreach ($cfg as $m => $a)
		foreach ($a as $p => $v)
			$db->insert('Cfg',
				array(
					'Module' => $m,
					'Prop' => $p,
					'Val' => $v
				)
			);
		
	$admin = (isset_IN('noLogins') ? _IN('aMail') : _IN('aLogin'));
	$db->insert('Users',
		array(
			'uID' => 1,
			'uLogin' => $admin,
			'uPass' => md5($psalt . _IN('aPass')),
			'uMail' => _IN('aMail'),
			'uPIN' => md5(_IN('aPIN') . $psalt),
			'uState' => 1,
			'uLevel' => 99,
			'uPTS' => timeToStamp()
		)
	);
	$db->insert('AddInfo',
		array(
			'auID' => 1,
			'aName' => _IN('aName'),
			'aSQuestion' => _IN('aSQuest'),
			'aSAnswer' => md5(_IN('aSAnsw') . $psalt),
			'aIPSec' => 4
		)
	);
	$db->insert('Currs', 
		array(
			'cID' => 1,
			'cDisabled' => !isset_IN('intCurr'),
			'cHidden' => 1,
			'cCID' => '*', 
			'cCurrID' => _IN('intCurrID'),
			'cCurr' => _IN('intCurrID'),
			'cName' => 'Internal',
			'cEXMode' => 2,
			'cTRMode' => 2,
			'cBUYMode' => 2,
			'cBUY2Mode' => 2,
			'cGIVEMode' => 2,
			'cTAKEMode' => 2
		)
	);
	$db->insert('Currs', 
		array(
			'cDisabled' => 0,
			'cHidden' => 0,
			'cCID' => 'AC', 
			'cCurrID' => 'USD',
			'cCurr' => 'USD',
			'cName' => 'AdvancedCashUSD',
			'cEXMode' => 0,
			'cTRMode' => 0,
			'cBUYMode' => 0,
			'cBUY2Mode' => 0,
			'cGIVEMode' => 2,
			'cTAKEMode' => 2
		)
	);
	$db->insert('Currs', 
		array(
			'cDisabled' => 0,
			'cHidden' => 0,
			'cCID' => 'NX', 
			'cCurrID' => 'USD',
			'cCurr' => 'USD',
			'cName' => 'NixMoneyUSD',
			'cEXMode' => 0,
			'cTRMode' => 0,
			'cBUYMode' => 0,
			'cBUY2Mode' => 0,
			'cGIVEMode' => 2,
			'cTAKEMode' => 2
		)
	);
	
	
	addMsg('Installation complete!');
	goToURL($_cfg['cfg_link'] . '?modules');
	
	}
	
}
elseif (isset_IN('bStart'))
	addMsg('To process, markup "Create and fill base.." checkbox below');

include('module/_config/_header.php');

?>

<h1>Install</h1>

<table width="400px" border="0" align="center">
<tr>
	<td align="center">
		<form method="post">
			<big>Warning!!! All existing data will be lost!</big><br>
			<label><input name="doFill" type="checkbox"> <b>Create and fill base by following data:</b></label><br>
			<br>
			<big>Initial parameters</big>
			<br>
			<fieldset>
				<label><input name="noLogins" type="checkbox"> use e-mail instead of login</label><br>
				<label><input name="intCurr" type="checkbox"> keep balance <u>only</u> in own 'internal' currency</label><br>
				'internal' currency is
				<select name="intCurrID">
					<option value="USD">USD</option>
					<option value="EUR">EUR</option>
					<option value="RUB">RUB</option>
					<option value="BTC">BTC</option>
				</select>
			</fieldset>
			<br> 
			<big>Admin account</big>
			<br>
			<fieldset>
				name<br>
				<input name="aName" value="Administrator" type="text"><br>
				login<br>
				<input name="aLogin" value="admin" type="text"><br>
				password<br>
				<input name="aPass" value="admin" type="text"><br>
				e-mail<br>
				<input name="aMail" value="<?php echo($_cfg['sys_mail']); ?>" type="text"><br>
				secret question<br>
				<input name="aSQuest" value="That is your name" type="text"><br>
				secret answer<br>
				<input name="aSAnsw" value="John" type="text"><br>
				PIN-code<br>
				<input name="aPIN" value="1234" type="text"><br>
			</fieldset>
			<br>
			<input name="bStart" value="Process" type="submit">
		</form>
	</td>
</tr>
</table>

<?php

include('module/_config/_footer.php');
	
?>