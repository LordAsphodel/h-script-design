<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 19:46:35
         compiled from "tpl/en/balance/admin/opers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73580112659ad836ba5eab2-07416023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c52a24d5e80a252ba85bd968b988657f92475101' => 
    array (
      0 => 'tpl/en/balance/admin/opers.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73580112659ad836ba5eab2-07416023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit_form_name' => 0,
    'op_names' => 0,
    'currs' => 0,
    'op_statuses' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad836bae42b0_03283483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad836bae42b0_03283483')) {function content_59ad836bae42b0_03283483($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Operations'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('balance/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.begin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'opers_filter','url'=>'*'), 0);?>
<table class="formatTable"><tr><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'uLogin','v'=>array('T','User','size'=>10),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['uLogin'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'oOper','v'=>array('S','Operation',0,array('- all -')+$_smarty_tpl->tpl_vars['op_names']->value),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['oOper'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'ocID','v'=>array('S','Payment system',0,array('- all -')+$_smarty_tpl->tpl_vars['currs']->value),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['ocID'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<tr></tr><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'oBatch','v'=>array('T','Batch-number','size'=>10),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['oBatch'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'oState','v'=>array('S','State',0,array(9=>'- all -')+$_smarty_tpl->tpl_vars['op_statuses']->value),'vv'=>valueIf(isset($_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]),$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['oState'],9),'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'oMemo','v'=>array('T','<i>Comments</i>','size'=>20),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['oMemo'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
</tr></table><?php echo $_smarty_tpl->getSubTemplate ('edit.end.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('btn_text'=>'Filter','btns'=>valueIf(isset($_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]),array('clear'=>'Show all'))), 0);?>
<?php ob_start();?><?php echo valueIf(isset($_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]),' (filtered)');?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Operations".$_tmp1,'url'=>'*','fields'=>array('oID'=>array('ID'),'uLogin'=>array('User'),'oTS'=>array('Created<br>Fulfilled'),'oOper'=>array('Operation'),'oCID'=>array('Payment system<br>Account'),'oSum'=>array('Sum<br>Comission'),'oBatch'=>array('Batch-number'),'oState'=>array('State'),'oMemo'=>array('Comments')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('complete'=>'Complete','confirm'=>'Confirm','cancel'=>'Cancel','del'=>'Delete')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'balance/admin/oper'),$_smarty_tpl);?>
?add" class="button-green">Create</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>