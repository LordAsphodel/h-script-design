<?php /* Smarty version Smarty-3.1.8, created on 2017-07-28 11:21:04
         compiled from "tpl/en/depo/lastin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2076231422597af3f04e8bc8-10267530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '648ff07d8dbcca782e6311948de9b98f37abdece' => 
    array (
      0 => 'tpl/en/depo/lastin.tpl',
      1 => 1498731051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2076231422597af3f04e8bc8-10267530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'r' => 0,
    'imgs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_597af3f0554fc9_44225207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597af3f0554fc9_44225207')) {function content_597af3f0554fc9_44225207($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Last investors'), 0);?>
<h1>Last investors</h1><?php $_smarty_tpl->tpl_vars['imgs'] = new Smarty_variable(array(1=>'lr_small.png',2=>'pm_small.png'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['list']->value){?><table class="FormatTable" border="1"><tr><th>User</th><th>Amount</th><th>Batch</th></tr><?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['r']->key;
?><?php if ($_smarty_tpl->tpl_vars['r']->value['oSum']>0){?><tr><td><?php echo $_smarty_tpl->getSubTemplate ('_usericon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('user'=>$_smarty_tpl->tpl_vars['r']->value), 0);?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['uLogin'];?>
</td><td align="right"><img src="images/<?php echo $_smarty_tpl->tpl_vars['imgs']->value[$_smarty_tpl->tpl_vars['r']->value['ocID']];?>
"> <?php echo _z($_smarty_tpl->tpl_vars['r']->value['oSum'],$_smarty_tpl->tpl_vars['r']->value['ocID']);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['oBatch'];?>
</td></tr><?php }?><?php } ?></table><?php }?><br><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>