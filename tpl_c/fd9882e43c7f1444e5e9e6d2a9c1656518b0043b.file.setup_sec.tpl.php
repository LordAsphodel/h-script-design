<?php /* Smarty version Smarty-3.1.8, created on 2017-09-29 08:21:09
         compiled from "tpl/ru/system/admin/setup_sec.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18590232375958a5e35b54b4-22579289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd9882e43c7f1444e5e9e6d2a9c1656518b0043b' => 
    array (
      0 => 'tpl/ru/system/admin/setup_sec.tpl',
      1 => 1504512327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18590232375958a5e35b54b4-22579289',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958a5e35fa180_85705339',
  'variables' => 
  array (
    'cfg' => 0,
    'via_https' => 0,
    'curr_ip' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958a5e35fa180_85705339')) {function content_5958a5e35fa180_85705339($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Безопасность'), 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('_country.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('ip'=>$_smarty_tpl->tpl_vars['curr_ip']->value), 0);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('HTTPSMode'=>array('S',"Использовать http<b>s</b> <<меняется только через https://>>",0,array(0=>'только на защищ.страницах',1=>'всегда'),'readonly'=>!$_smarty_tpl->tpl_vars['via_https']->value),'MinPIN'=>array('I','Мин. длина PIN-кода <<0 - не использовать>>'),'MinSQA'=>array('I','Мин. длина вопроса/ответа <<0 - не использовать>>'),'BFC'=>array('I','Запрашивать код подтверждения после N<br>неудачных попыток входа подряд <<0 - не использовать>>'),'IP'=>array('S','Контроль смены IP-адреса',0,array(0=>'нет',1=>'x.0.0.0',2=>'x.x.0.0',3=>'x.x.x.0',4=>'x.x.x.x')),'ForceReConfig'=>array('C','Требовать проверки "Личных параметров" после регистрации'),'PassTime'=>array('I','Требовать смену пароля каждые N дней <<0 - не требовать>>'),'TimeOut'=>array('I','Автовыход через N минут <<0 - не использовать>>'),'_IPs'=>array('A',"IP-адреса, с которых разрешен вход в Панель управления<br><<одна строка - один адрес в формате x.x.x.x>><br>Ваш текущий IP: <b>".($_smarty_tpl->tpl_vars['curr_ip']->value)."</b> ".$_tmp1))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>