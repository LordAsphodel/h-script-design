<?php /* Smarty version Smarty-3.1.8, created on 2017-07-28 09:23:49
         compiled from "tpl/en/depo/topin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:776124264597ad87579bea4-06574942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd445eb925986b3294674ad118d8634e4f93e0e19' => 
    array (
      0 => 'tpl/en/depo/topin.tpl',
      1 => 1498731052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '776124264597ad87579bea4-06574942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_597ad8757e4335_28816503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597ad8757e4335_28816503')) {function content_597ad8757e4335_28816503($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Top of investors'), 0);?>
<h1>Top of investors</h1><?php if ($_smarty_tpl->tpl_vars['list']->value){?><table class="FormatTable" border="1"><tr><th>User</th><th>Deposit amount</th></tr><?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['r']->key;
?><?php if ($_smarty_tpl->tpl_vars['r']->value['RSUM']>0){?><tr><td><?php echo $_smarty_tpl->getSubTemplate ('_usericon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('user'=>$_smarty_tpl->tpl_vars['r']->value), 0);?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['uLogin'];?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['r']->value['RSUM'],1);?>
</td></tr><?php }?><?php } ?></table><?php }?><br><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>