<?php /* Smarty version Smarty-3.1.8, created on 2017-07-05 07:01:39
         compiled from "tpl/en/depo/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:257768534595c64a3434716-20518204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82bdd179be4876012dd6b1cd5cca6c09705f9843' => 
    array (
      0 => 'tpl/en/depo/top.tpl',
      1 => 1498731051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257768534595c64a3434716-20518204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list1' => 0,
    'r' => 0,
    'list2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595c64a34671a2_40717537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595c64a34671a2_40717537')) {function content_595c64a34671a2_40717537($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Top of inviters'), 0);?>
<h1>Top of inviters</h1><h2>By amount</h2><?php if ($_smarty_tpl->tpl_vars['list1']->value){?><table class="FormatTable" border="1"><tr><th>User</th><th>Amount</th></tr><?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['r']->key;
?><?php if ($_smarty_tpl->tpl_vars['r']->value['RSUM']>0){?><tr><td><?php echo $_smarty_tpl->getSubTemplate ('_usericon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('user'=>$_smarty_tpl->tpl_vars['r']->value), 0);?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['uLogin'];?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['r']->value['RSUM'],1);?>
</td></tr><?php }?><?php } ?></table><?php }?><br><h2>By count</h2><?php if ($_smarty_tpl->tpl_vars['list2']->value){?><table class="FormatTable" border="1"><tr><th>User</th><th>Count</th></tr><?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['r']->key;
?><?php if ($_smarty_tpl->tpl_vars['r']->value['RCNT']>0){?><tr><td><?php echo $_smarty_tpl->getSubTemplate ('_usericon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('user'=>$_smarty_tpl->tpl_vars['r']->value), 0);?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['uLogin'];?>
</td><td align="right"><?php echo $_smarty_tpl->tpl_vars['r']->value['RCNT'];?>
</td></tr><?php }?><?php } ?></table><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>