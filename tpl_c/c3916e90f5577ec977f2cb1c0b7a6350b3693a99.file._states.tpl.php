<?php /* Smarty version Smarty-3.1.8, created on 2017-07-27 19:25:57
         compiled from "tpl/en/tickets/_states.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1668045482597a1415ac1952-94521346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3916e90f5577ec977f2cb1c0b7a6350b3693a99' => 
    array (
      0 => 'tpl/en/tickets/_states.tpl',
      1 => 1498731075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1668045482597a1415ac1952-94521346',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_597a1415acba80_51809674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597a1415acba80_51809674')) {function content_597a1415acba80_51809674($_smarty_tpl) {?>﻿<?php $_smarty_tpl->tpl_vars['_tstates'] = new Smarty_variable(array(1=>'new',2=>'Awaiting Reply',3=>'In progress',4=>'Processed',5=>'Reply sent',8=>'Detained',9=>'Closed'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['_tstates'] = clone $_smarty_tpl->tpl_vars['_tstates']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['_tstates'] = clone $_smarty_tpl->tpl_vars['_tstates'];?><?php }} ?>