<?php

require_once('lib/db.php');
$db = new HS2_DB();

$k = md5($_GS['domain'] . $_cfg['sys_id']);
$db->open($_cfg['db_host'], $_cfg['db_name'], 
	decode1($_cfg['db_login'], $k, false, 1), decode1($_cfg['db_pass'], $k, false, 2));
if (!$db->link)
	xSysStop("DBInit: Can't open MySQL database");