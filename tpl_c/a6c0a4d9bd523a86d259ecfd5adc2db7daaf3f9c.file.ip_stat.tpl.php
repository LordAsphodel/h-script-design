<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 19:29:57
         compiled from "tpl/ru/account/admin/ip_stat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1576961050595d28f7738d72-21364271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6c0a4d9bd523a86d259ecfd5adc2db7daaf3f9c' => 
    array (
      0 => 'tpl/ru/account/admin/ip_stat.tpl',
      1 => 1508709683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1576961050595d28f7738d72-21364271',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595d28f77647b1_76541764',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d28f77647b1_76541764')) {function content_595d28f77647b1_76541764($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'IP Table'), 0);?>
<h2> Статистика IP <br> и кол-во  аторизаций и регистраций</h2><small><< только одно использование IP не показывается >></small><?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>array('ip'=>array('IP'),'auth'=>array('auth'),'reg'=>array('reg'),'sum'=>array('sum')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>