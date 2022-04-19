<?php /* Smarty version Smarty-3.1.8, created on 2017-09-05 10:39:21
         compiled from "tpl/en/account/admin/_statuses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209207020459ae54a9e98a04-48592025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe48ed75555b74e683af5ea57800fc8ff0c99113' => 
    array (
      0 => 'tpl/en/account/admin/_statuses.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209207020459ae54a9e98a04-48592025',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ae54a9ea10d0_09591274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ae54a9ea10d0_09591274')) {function content_59ae54a9ea10d0_09591274($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['usr_statuses'] = new Smarty_variable(array(0=>'Not active',1=>'Active',2=>'Punished',3=>'Blocked',4=>'Reserved'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['usr_statuses'] = clone $_smarty_tpl->tpl_vars['usr_statuses']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['usr_statuses'] = clone $_smarty_tpl->tpl_vars['usr_statuses'];?>
<?php }} ?>