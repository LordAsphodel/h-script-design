<?php /* Smarty version Smarty-3.1.8, created on 2017-09-29 08:21:58
         compiled from "tpl/ru/confirm/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3019023765958a5e84d0548-99254075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c4296d8e33c746df972c83545ecd59b0877be26' => 
    array (
      0 => 'tpl/ru/confirm/admin/setup.tpl',
      1 => 1504512327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3019023765958a5e84d0548-99254075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958a5e84e9089_59368038',
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958a5e84e9089_59368038')) {function content_5958a5e84e9089_59368038($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Подтверждение'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('Captcha'=>array('S','Защита "captcha"',0,array(0=>'нет',1=>'авто',2=>'всегда')))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>