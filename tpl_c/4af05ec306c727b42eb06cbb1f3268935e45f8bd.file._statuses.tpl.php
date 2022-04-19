<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 17:08:03
         compiled from "tpl/ru/account/admin/_statuses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2763821215958a4fa558a99-80220476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4af05ec306c727b42eb06cbb1f3268935e45f8bd' => 
    array (
      0 => 'tpl/ru/account/admin/_statuses.tpl',
      1 => 1508709684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2763821215958a4fa558a99-80220476',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958a4fa560879_42275872',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958a4fa560879_42275872')) {function content_5958a4fa560879_42275872($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['usr_statuses'] = new Smarty_variable(array(0=>'не активен',1=>'активен',2=>'наказан',3=>'заблокирован',4=>'резерв'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['usr_statuses'] = clone $_smarty_tpl->tpl_vars['usr_statuses']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['usr_statuses'] = clone $_smarty_tpl->tpl_vars['usr_statuses'];?>
<?php }} ?>