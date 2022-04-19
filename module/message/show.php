<?php

$_auth = 1;
require_once('module/auth.php');

$table = 'MBox';
$id_field = 'bID';
$out_link = moduleToLink('message');

if (($_cfg['Msg_Mode'] < 1) or (isset($_GET['new']) and ($_cfg['Msg_Mode'] < 2)))
	goToURL($out_link);

try 
{

	if (sendedForm('send')) 
	{
		checkFormSecurity();
		
		$params = array(
			're' => _INN('Re'),
			'attn' => _IN('Attn'),
			'group' => 0
		);
		setError($id = messageSend(_uid(), '', _IN('mTo'), $params, _IN('mTopic'), _IN('mText')));
		showInfo('Completed', moduleToLink('message/outbox') . "?id=$id");
	}

} 
catch (Exception $e) 
{
}

if (!isset($_GET['new']))
{
	if ($id = _GETN('id'))
		$el = $db->fetch1Row($db->select("$table LEFT JOIN Msg ON mID=bmID LEFT JOIN Users ON uID=buID2", 
		'*', "$id_field=?d and (buID=?d or muID=?d)", array($id, _uid(), _uid())));
	if (!$el)
		goToURL($out_link);
	stampArrayToStr($el, 'mTS, bRTS', 0);

	if (($el['buID'] == _uid()) and !$el['bRTS'] and $db->update($table, array('bRTS' => timeToStamp()), '', "$id_field=?d and buID=?d", array($id, _uid())))
		updateUserCounters();
}
elseif ($re = _GETN('re'))
	if ($rel = $db->fetch1Row($db->select("$table LEFT JOIN Msg ON mID=bmID LEFT JOIN Users ON uID=muID", 
		"$table.*, Msg.*, Users.uLogin", "$id_field=?d", array($re))))
		$el = array(
			'Re' => $re,
			'mTopic' => 'Re: ' . $rel['mTopic'],
			'mText' => HS2_NL . HS2_NL . textReplace(HS2_NL . $rel['mText'], HS2_NL, HS2_NL . '> '),
			'mLang' => $rel['mLang'],
			'mGroup' => exValue($re, $rel['mGroup']),
			'mTo' => exValue('mailto:' . $rel['mMail'], $rel['uLogin'])
		);

$refs = array();
$a = array(_uid());
$n = $_cfg['Ref_Levels'];
if ($n < 1)
	$n = 1;
for ($i = 0; $i < $n; $i++)
{
	$refs[$i]['users'] = $db->fetchIDRows($db->select('Users U LEFT JOIN AddInfo ON auID=uID', 
		'U.uID, U.uLogin, U.uMail, AddInfo.*, 
		(SELECT SUM(dZD) FROM Deps WHERE dState>=1 and duID=U.uID) AS ZDepo,
		(SELECT SUM(oSum) FROM Opers WHERE oOper=? and ouID=?d and oState=3 and oTag=U.uID) AS ZRef',
		'U.uRef ?i', array('REF', _uid(), $a), 'U.uLogin'), false, 'uID');
	stampTableToStr($refs[$i]['users'], 'aCTS');
	$a = array_keys($refs[$i]['users']);
}

$users = array();

if (count(opReadUser($_user['uRef'])) > 0) {
	$users[opReadUser($_user)['uLogin']] = opReadUser($_user)['uLogin']." (Upliner)";
}

foreach ($refs as $key => $value) {
	foreach ($value['users'] as $keylvl => $valuelvl) {
		$users[$value['users'][$keylvl]['uLogin']] = $value['users'][$keylvl]['uLogin']." (Referal)";
	}
}

if (count($users)>0) {
	setPage('users', $users);
}

setPage('el', $el, 2);
showPage();

?>