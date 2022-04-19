<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 00:18:31
         compiled from "tpl/ru/balance/bal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9269392005958a50270f653-38807410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37758ed174d1c9f8fadd285fbd411474d57e3163' => 
    array (
      0 => 'tpl/ru/balance/bal.tpl',
      1 => 1508709662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9269392005958a50270f653-38807410',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958a502731326_89888704',
  'variables' => 
  array (
    'currs' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958a502731326_89888704')) {function content_5958a502731326_89888704($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['currs']->value){?><table class="FormatTable" border="1"><tr><th>Плат. система</th><th><small>Доступно</small></th><th><small>Занято</small></th><th><small>Ожидает</small></th></tr><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['c']->key;
?><?php if (($_smarty_tpl->tpl_vars['c']->value['wBal']!=0)||($_smarty_tpl->tpl_vars['c']->value['wLock']!=0)||($_smarty_tpl->tpl_vars['c']->value['wOut']!=0)){?><tr><td><?php echo $_smarty_tpl->tpl_vars['c']->value['cName'];?>
 <i><small><?php echo $_smarty_tpl->tpl_vars['c']->value['cCurr'];?>
</small></i></td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['c']->value['wBal'],$_smarty_tpl->tpl_vars['c']->value['wcID'],-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['c']->value['wLock'],$_smarty_tpl->tpl_vars['c']->value['wcID'],-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['c']->value['wOut'],$_smarty_tpl->tpl_vars['c']->value['wcID'],-1);?>
</td></tr><?php }?><?php } ?></table><?php }?>
<?php }} ?>