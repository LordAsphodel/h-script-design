<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 11:45:32
         compiled from "tpl/en/refsys/_refs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96068587359ad12ac797a73-44048949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '623736c5d8c758bc6059f565f723eacc9b501f79' => 
    array (
      0 => 'tpl/en/refsys/_refs.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96068587359ad12ac797a73-44048949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'refs' => 0,
    'i' => 0,
    'r' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad12ac7bdd56_63699131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad12ac7bdd56_63699131')) {function content_59ad12ac7bdd56_63699131($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['states'] = new Smarty_variable(array(0=>'Not active',1=>'Active',2=>'Banned',3=>'Blocked'), null, 0);?><div class="box-info full animated fadeInDown"><h2 class="text-left"><i class="fa fa-group"></i> Your referrals</h2><div id="transactions-table" class="collapse in"><div class="table-responsive p-b-20"><table class="table table-striped"><tr><th>User</th><th>Registration date</th><th>Deposits</th><th>Referral bonus</th></tr><?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['refs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['r']->key;
?><?php if (count($_smarty_tpl->tpl_vars['refs']->value)>1){?><tr><td colspan="4" align="center">Level <?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
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