<?php /* Smarty version Smarty-3.1.8, created on 2017-07-27 11:07:22
         compiled from "tpl/ru/depo/lastout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119289671759799f3a3bdf09-58669866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62e0980eb5e9fb9102f5eef0aac7c7bc4a7691c6' => 
    array (
      0 => 'tpl/ru/depo/lastout.tpl',
      1 => 1498731100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119289671759799f3a3bdf09-58669866',
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
  'unifunc' => 'content_59799f3a3ed330_76783590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59799f3a3ed330_76783590')) {function content_59799f3a3ed330_76783590($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Последние выплаты'), 0);?>
<h1>Последние выплаты</h1><?php $_smarty_tpl->tpl_vars['imgs'] = new Smarty_variable(array(1=>'lr_small.png',2=>'pm_small.png'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['list']->value){?><table class="FormatTable" border="1"><tr><th>Пользователь</th><th>Сумма</th><th>Batch</th></tr><?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
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