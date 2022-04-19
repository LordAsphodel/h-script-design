<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 11:45:17
         compiled from "tpl/en/balance/_statuses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69267085759ad129dbac503-20191936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e70eaf13a0c791c3c4b92a89cb42d6167b69b17d' => 
    array (
      0 => 'tpl/en/balance/_statuses.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69267085759ad129dbac503-20191936',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad129dbccab3_15404923',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad129dbccab3_15404923')) {function content_59ad129dbccab3_15404923($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['op_names'] = new Smarty_variable(array('BONUS'=>'Bonus','PENALTY'=>'Penalty','CASHIN'=>'Recharge','CASHOUT'=>'Withdrawal','EX'=>'Outgoing exchange','EXIN'=>'Incoming exchange','TR'=>'Transfer','TRIN'=>'Income','BUY'=>'Buy','SELL'=>'Sell','BUY2'=>'Service','SELL2'=>'Service','REF'=>'Refferal bonus','GIVE'=>'Deposit','TAKE'=>'Withdrawal','CALCIN'=>'Accrual','CALCOUT'=>'Calcout'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['op_names'] = clone $_smarty_tpl->tpl_vars['op_names']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['op_names'] = clone $_smarty_tpl->tpl_vars['op_names'];?>
<?php $_smarty_tpl->tpl_vars['op_statuses'] = new Smarty_variable(array(0=>'Confirmation awaiting',1=>'Rechargement awaiting',2=>'Completion awaiting',3=>'Done',4=>'Declined',5=>'Cancelled'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['op_statuses'] = clone $_smarty_tpl->tpl_vars['op_statuses']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['op_statuses'] = clone $_smarty_tpl->tpl_vars['op_statuses'];?>
<?php $_smarty_tpl->tpl_vars['op_sums'] = new Smarty_variable(array('BONUS'=>'Sum','PENALTY'=>'Sum','CASHIN'=>'Sum to recharge','CASHOUT'=>'Sum to withdraw','EX'=>'Sum to exchange','EXIN'=>'Sum recieved','TR'=>'Sum to recieve','TRIN'=>'Recieved sum','BUY'=>'Sum','SELL'=>'Sum','BUY2'=>'Sum','SELL2'=>'Sum','REF'=>'Sum','GIVE'=>'Sum of deposit','TAKE'=>'Sum to recieve','CALCIN'=>'Sum','CALCOUT'=>'Sum'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['op_sums'] = clone $_smarty_tpl->tpl_vars['op_sums']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['op_sums'] = clone $_smarty_tpl->tpl_vars['op_sums'];?>
<?php }} ?>