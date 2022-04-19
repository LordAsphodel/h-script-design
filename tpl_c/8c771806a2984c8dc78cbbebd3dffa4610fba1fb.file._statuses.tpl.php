<?php /* Smarty version Smarty-3.1.8, created on 2017-07-05 21:03:14
         compiled from "tpl/ru/calendar/admin/_statuses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1745584024595d29e23e7658-43850182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c771806a2984c8dc78cbbebd3dffa4610fba1fb' => 
    array (
      0 => 'tpl/ru/calendar/admin/_statuses.tpl',
      1 => 1498731208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1745584024595d29e23e7658-43850182',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595d29e23f1ac0_27274239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d29e23f1ac0_27274239')) {function content_595d29e23f1ac0_27274239($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['d_types'] = new Smarty_variable(array(1=>'рабочий',2=>'выходной',3=>'праздничный'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['d_types'] = clone $_smarty_tpl->tpl_vars['d_types']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['d_types'] = clone $_smarty_tpl->tpl_vars['d_types'];?><?php }} ?>