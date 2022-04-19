<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 17:08:03
         compiled from "tpl/ru/account/admin/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4588447185958a4fa4d8f68-39012133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cad74345c5caa1af9652a42d46444157fec58ec' => 
    array (
      0 => 'tpl/ru/account/admin/users.tpl',
      1 => 1508709684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4588447185958a4fa4d8f68-39012133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958a4fa54df02_76480315',
  'variables' => 
  array (
    'edit_form_name' => 0,
    'usr_statuses' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958a4fa54df02_76480315')) {function content_5958a4fa54df02_76480315($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Пользователи'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('account/admin/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.begin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'users_filter','url'=>'*'), 0);?>
<table class="formatTable"><tr><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'uGroup','v'=>array('T','Группа','size'=>10),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['uGroup'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'uLogin','v'=>array('T','<i>Логин</i>','size'=>10),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['uLogin'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'aName','v'=>array('T','<i>Имя</i>','size'=>10),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['aName'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'uMail','v'=>array('T','<i>e-mail</i>','size'=>15),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['uMail'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
<tr></tr><td colspan="3"></td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'uState','v'=>array('S','Статус',0,array(9=>'- все -')+$_smarty_tpl->tpl_vars['usr_statuses']->value),'vv'=>valueIf(isset($_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]),$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['uState'],9),'l_width'=>'0%','r_width'=>'0%'), 0);?>
<td>&nbsp;</td><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('f'=>'RefLogin','v'=>array('T','Реферал','size'=>10),'vv'=>$_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]['RefLogin'],'l_width'=>'0%','r_width'=>'0%'), 0);?>
</tr></table><?php echo $_smarty_tpl->getSubTemplate ('edit.end.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('btn_text'=>'Отфильтровать','btns'=>valueIf(isset($_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]),array('clear'=>'Показать все'))), 0);?>
<?php ob_start();?><?php echo valueIf(isset($_SESSION[$_smarty_tpl->tpl_vars['edit_form_name']->value]),' (отфильтровано)');?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Пользователи".$_tmp1,'url'=>'*','fields'=>array('uID'=>array('ID'),'uGroup'=>array('Группа'),'uLogin'=>array('Логин'),'aName'=>array('Имя'),'uMail'=>array('e-mail'),'uState'=>array('Статус'),'uLevel'=>array('<small>Доступ</small>'),'RefLogin'=>array('Реферал'),'uBal'=>array('Баланс')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','include_code'=>'<input name="Group" type="text">','btns'=>array('setgroup'=>'Назначить группу','del'=>'Удалить')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
?add" class="button-green">Добавить</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>