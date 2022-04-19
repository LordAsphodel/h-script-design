<?php /* Smarty version Smarty-3.1.8, created on 2017-09-05 00:48:39
         compiled from "tpl/en/info.messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196187075759566d3593d365-86245989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7ab94785bdf0b60a1814da9deadc08d779cd8f2' => 
    array (
      0 => 'tpl/en/info.messages.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196187075759566d3593d365-86245989',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59566d3595b5e0_48118376',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59566d3595b5e0_48118376')) {function content_59566d3595b5e0_48118376($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['info_msg'] = new Smarty_variable(array('Completed'=>'Completed','Saved'=>'Saved','Canceled'=>'Canceled','Added'=>'Added','Deleted'=>'Deleted','LogIn'=>'Logged in','LogOut'=>'Logged out','*NoSelected'=>'Select at least one element','*CantComplete'=>'Operation can not be completed','*AlreadyUsed'=>'Data is already in use','*Error'=>'Operation completition error','*ErrorCode'=>'Error Code','*NoPage'=>'Page is not found','*Denied'=>'Acces denied'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['info_msg'] = clone $_smarty_tpl->tpl_vars['info_msg']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['info_msg'] = clone $_smarty_tpl->tpl_vars['info_msg'];?>
<?php }} ?>