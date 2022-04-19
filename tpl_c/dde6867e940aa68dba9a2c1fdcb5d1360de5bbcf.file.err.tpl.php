<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 23:23:13
         compiled from "tpl/en/err.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144264163059566d00b0c7e5-67991297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dde6867e940aa68dba9a2c1fdcb5d1360de5bbcf' => 
    array (
      0 => 'tpl/en/err.tpl',
      1 => 1508709642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144264163059566d00b0c7e5-67991297',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59566d00b3ddc6_35606128',
  'variables' => 
  array (
    'errs' => 0,
    'form' => 0,
    'tpl_errors' => 0,
    'i' => 0,
    'error_text' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59566d00b3ddc6_35606128')) {function content_59566d00b3ddc6_35606128($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['error_text'] = new Smarty_variable('', null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['error_text'] = clone $_smarty_tpl->tpl_vars['error_text']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['error_text'] = clone $_smarty_tpl->tpl_vars['error_text'];?><?php $_smarty_tpl->tpl_vars['error_class'] = new Smarty_variable('', null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['error_class'] = clone $_smarty_tpl->tpl_vars['error_class']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['error_class'] = clone $_smarty_tpl->tpl_vars['error_class'];?><?php if ($_smarty_tpl->tpl_vars['errs']->value&&(count($_smarty_tpl->tpl_vars['tpl_errors']->value[$_smarty_tpl->tpl_vars['form']->value])>0)){?><?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['e']->key;
?><?php if (in_array($_smarty_tpl->tpl_vars['i']->value,$_smarty_tpl->tpl_vars['tpl_errors']->value[$_smarty_tpl->tpl_vars['form']->value])){?><?php $_smarty_tpl->tpl_vars['error_text'] = new Smarty_variable(($_smarty_tpl->tpl_vars['error_text']->value).($_smarty_tpl->tpl_vars['e']->value)."<br>", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['error_text'] = clone $_smarty_tpl->tpl_vars['error_text']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['error_text'] = clone $_smarty_tpl->tpl_vars['error_text'];?><?php $_smarty_tpl->tpl_vars['error_class'] = new Smarty_variable('error', null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['error_class'] = clone $_smarty_tpl->tpl_vars['error_class']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['error_class'] = clone $_smarty_tpl->tpl_vars['error_class'];?><?php $_smarty_tpl->createLocalArrayVariable('tpl_errors', null, 3);
$_smarty_tpl->tpl_vars['tpl_errors']->value[$_smarty_tpl->tpl_vars['form']->value][array_search($_smarty_tpl->tpl_vars['i']->value,$_smarty_tpl->tpl_vars['tpl_errors']->value[$_smarty_tpl->tpl_vars['form']->value])] = null;
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['tpl_errors'] = clone $_smarty_tpl->tpl_vars['tpl_errors']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['tpl_errors'] = clone $_smarty_tpl->tpl_vars['tpl_errors'];?><?php }?><?php } ?><?php $_smarty_tpl->tpl_vars['error_text'] = new Smarty_variable("<span class=\"err\">".($_smarty_tpl->tpl_vars['error_text']->value)."</span>", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['error_text'] = clone $_smarty_tpl->tpl_vars['error_text']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['error_text'] = clone $_smarty_tpl->tpl_vars['error_text'];?><?php }?><?php }} ?>