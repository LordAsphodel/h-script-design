<?php /* Smarty version Smarty-3.1.8, created on 2017-09-05 10:39:21
         compiled from "tpl/en/account/admin/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67238458859ae54a9dfa9e6-06861689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aca8989c61903b9d15b6a20376e838c331d43e5e' => 
    array (
      0 => 'tpl/en/account/admin/users.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67238458859ae54a9dfa9e6-06861689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit_form_name' => 0,
    'usr_statuses' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ae54a9e84811_67789668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ae54a9e84811_67789668')) {function content_59ae54a9e84811_67789668($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Accounts'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('account/admin/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.begin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'users_filter','url'=>'*'), 0);?>
<table class="formatTable"><tr><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'uGroup','v'=>array('T','Group','size'=>10),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['uGroup'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'uLogin','v'=>array('T','<i>Login</i>','size'=>10),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['uLogin'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'aName','v'=>array('T','<i>Name</i>','size'=>10),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['aName'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'uMail','v'=>array('T','<i>e-mail</i>','size'=>15),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['uMail'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<tr></tr><td colspan="3"></td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'uState','v'=>array('S','State',0,array(9=>'- all -')+$_smarty_tpl->tpl_vars['usr_statuses']->value),'vv'=>valueIf(isset($_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]),$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['uState'],9),'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'RefLogin','v'=>array('T','Refferer','size'=>10),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['RefLogin'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
</tr></table><?php echo $_smarty_tpl->getSubTemplate ('edit.end.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('btn_text'=>'Filter','btns'=>valueIf(isset($_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]),array('clear'=>'Show all'))), 0);?>
<?php ob_start();?><?php echo valueIf(isset($_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]),' (filtered)');?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Users".$_tmp1,'url'=>'*','fields'=>array('uID'=>array('ID'),'uGroup'=>array('Group'),'uLogin'=>array('Login'),'aName'=>array('Name'),'uMail'=>array('E-mail'),'uState'=>array('State'),'uLevel'=>array('Access level'),'RefLogin'=>array('Refferer'),'uBal'=>array('Balance')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','include_code'=>'<input name="Group" type="text">','btns'=>array('setgroup'=>'Set group','del'=>'Delete')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
?add" class="button-green">Add user</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>