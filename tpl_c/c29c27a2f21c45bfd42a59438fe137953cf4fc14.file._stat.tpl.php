<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 15:03:08
         compiled from "tpl/en/balance/_stat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129003784859799b50876930-04527575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c29c27a2f21c45bfd42a59438fe137953cf4fc14' => 
    array (
      0 => 'tpl/en/balance/_stat.tpl',
      1 => 1508709653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129003784859799b50876930-04527575',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59799b5089b216_26620522',
  'variables' => 
  array (
    'stats' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59799b5089b216_26620522')) {function content_59799b5089b216_26620522($_smarty_tpl) {?><div class="box-info full animated fadeInDown"><h2 class="text-left"><i class="fa fa-history"></i>Balance information</h2><div id="transactions-table" class="collapse in"><div class="table-responsive p-b-20"><table class="table table-striped"><thead><tr><th>Payment system</th><th>Refferal bonus</th><th>Recharched</th><th>Deposits</th><th>Accrual</th><th>Withdrawn</th></tr></thead><tbody id="transactions-table-body"><?php if ($_smarty_tpl->tpl_vars['stats']->value){?><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
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
</td></tr><?php } ?><?php }else{ ?><tr><td colspan="4">Transaction list is empty</td></tr><?php }?></tbody></table></div></div></div>
<?php }} ?>