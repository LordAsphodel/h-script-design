<?php /* Smarty version Smarty-3.1.8, created on 2017-09-29 08:21:11
         compiled from "tpl/ru/captcha/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16912218075958a5e9723e81-10875590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '627c0b787c71b0cb20ba3bf8525be1179ffab908' => 
    array (
      0 => 'tpl/ru/captcha/setup.tpl',
      1 => 1504512327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16912218075958a5e9723e81-10875590',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958a5e973d8f5_98384449',
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958a5e973d8f5_98384449')) {function content_5958a5e973d8f5_98384449($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Captcha'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('View'=>array('S','Вид',0,array(1=>'Искажение',2=>'Мозаика',3=>'Тени')))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>