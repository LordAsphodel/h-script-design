<?php /* Smarty version Smarty-3.1.8, created on 2017-07-27 11:06:33
         compiled from "tpl/ru/depo/topin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85340212259799f097f6ea8-73221225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93f88907f7a53b736875d89b593862566accae44' => 
    array (
      0 => 'tpl/ru/depo/topin.tpl',
      1 => 1498731100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85340212259799f097f6ea8-73221225',
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
  'unifunc' => 'content_59799f0981a607_59104728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59799f0981a607_59104728')) {function content_59799f0981a607_59104728($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Топ вкладчиков'), 0);?>
<h1>Лучшие вкладчики</h1><?php if ($_smarty_tpl->tpl_vars['list']->value){?><table class="FormatTable" border="1"><tr><th>Пользователь</th><th>Сумма депозитов</th></tr><?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
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