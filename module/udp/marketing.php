<?php

require_once('module/auth.php');

setPage('plani', $db->fetchRows($db->select('Plans', '*', '', '')));

showPage();

?>