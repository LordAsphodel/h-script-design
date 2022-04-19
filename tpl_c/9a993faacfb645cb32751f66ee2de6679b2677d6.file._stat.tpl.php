<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:07:51
         compiled from "tpl/ru/balance/_stat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116598676659573f6b2e7191-83116610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a993faacfb645cb32751f66ee2de6679b2677d6' => 
    array (
      0 => 'tpl/ru/balance/_stat.tpl',
      1 => 1508709663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116598676659573f6b2e7191-83116610',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59573f6b309726_19505315',
  'variables' => 
  array (
    'stats' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59573f6b309726_19505315')) {function content_59573f6b309726_19505315($_smarty_tpl) {?><div class="box-info full animated fadeInDown"><h2 class="text-left"><i class="fa fa-history"></i> Информация по балансу</h2><div id="transactions-table" class="collapse in"><div class="table-responsive p-b-20"><table class="table table-striped"><thead><tr><th>Плат. система</th><th>Рефские</th><th>Введено</th><th>На депозитах</th><th>Начислено</th><th>Выведено</th></tr></thead><tbody id="transactions-table-body"><?php if ($_smarty_tpl->tpl_vars['stats']->value){?><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['c']->key;
?><tr><td><?php echo $_smarty_tpl->tpl_vars['c']->value['cName'];?>
 <i><small><?php echo $_smarty_tpl->tpl_vars['c']->value['cCurr'];?>
</small></i></td><td><?php echo _z($_smarty_tpl->tpl_vars['c']->value['ZREF'],$_smarty_tpl->tpl_vars['c']->value['cID'],-1);?>
</td><td><?php echo _z($_smarty_tpl->tpl_vars['c']->value['ZIN'],$_smarty_tpl->tpl_vars['c']->value['cID'],-1);?>
</td><td><?php echo _z($_smarty_tpl->tpl_vars['c']->value['ZINDEPO'],$_smarty_tpl->tpl_vars['c']->value['cID'],-1);?>
</td><td><?php echo _z($_smarty_tpl->tpl_vars['c']->value['ZCALCIN'],$_smarty_tpl->tpl_vars['c']->value['cID'],-1);?>
</td><td><?php echo _z($_smarty_tpl->tpl_vars['c']->value['ZOUT'],$_smarty_tpl->tpl_vars['c']->value['cID'],-1);?>
</td></tr><?php } ?><?php }else{ ?><tr><td colspan="4">Список транзакций пуст</td></tr><?php }?></tbody></table></div></div></div><?php }} ?>