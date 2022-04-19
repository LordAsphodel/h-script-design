<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 05:30:15
         compiled from "tpl/ru/depo/_statuses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18202958375958d1f1060330-90332968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9df7454e379f185ec6ea9351e409ac81b1e64eba' => 
    array (
      0 => 'tpl/ru/depo/_statuses.tpl',
      1 => 1508709666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18202958375958d1f1060330-90332968',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958d1f1067612_52210147',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958d1f1067612_52210147')) {function content_5958d1f1067612_52210147($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['ststrs'] = new Smarty_variable(array(0=>'Отменен',1=>'Активен',2=>'Окончен',3=>'Закрыт'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['ststrs'] = clone $_smarty_tpl->tpl_vars['ststrs']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['ststrs'] = clone $_smarty_tpl->tpl_vars['ststrs'];?>
<?php }} ?>