<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 23:40:43
         compiled from "tpl/ru/refsys/_refs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9135300555957421ab4f210-60233352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df4c48673d9242216a536cc28c776e4ca372f395' => 
    array (
      0 => 'tpl/ru/refsys/_refs.tpl',
      1 => 1508709668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9135300555957421ab4f210-60233352',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5957421ab78a95_13704771',
  'variables' => 
  array (
    'refs' => 0,
    'i' => 0,
    'r' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957421ab78a95_13704771')) {function content_5957421ab78a95_13704771($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['states'] = new Smarty_variable(array(0=>'Не активен',1=>'Активен',2=>'Заблокирован',3=>'Отключен'), null, 0);?><div class="box-info full animated fadeInDown"><h2 class="text-left"><i class="fa fa-group"></i> Мои рефералы</h2><div id="transactions-table" class="collapse in"><div class="table-responsive p-b-20"><table class="table table-striped"><tr><th>Пользователь</th><th>Дата регистрации</th><th>Вклады</th><th>Рефские</th></tr><?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['refs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['r']->key;
?><?php if (count($_smarty_tpl->tpl_vars['refs']->value)>1){?><tr><td colspan="4" align="center">Уровень <?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
<?php if ($_smarty_tpl->tpl_vars['r']->value['perc']){?>: <?php echo $_smarty_tpl->tpl_vars['r']->value['perc'];?>
%<?php }?></td></tr><?php }?><?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['r']->value['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value){
$_smarty_tpl->tpl_vars['u']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['u']->key;
?><tr><td><?php echo $_smarty_tpl->getSubTemplate ('_usericon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('user'=>$_smarty_tpl->tpl_vars['u']->value), 0);?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['uLogin'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value['aCTS'];?>
</td><td><?php echo _z($_smarty_tpl->tpl_vars['u']->value['ZDepo'],1);?>
</td><td><?php echo _z($_smarty_tpl->tpl_vars['u']->value['ZRef'],1);?>
</td></tr><?php } ?><?php } ?></table></div></div></div>
<?php }} ?>