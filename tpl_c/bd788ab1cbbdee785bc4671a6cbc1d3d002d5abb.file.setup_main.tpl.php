<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:58:24
         compiled from "tpl/ru/system/admin/setup_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108769480759573fbe7c0782-43773727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd788ab1cbbdee785bc4671a6cbc1d3d002d5abb' => 
    array (
      0 => 'tpl/ru/system/admin/setup_main.tpl',
      1 => 1508709694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108769480759573fbe7c0782-43773727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59573fbe7e62b5_73356364',
  'variables' => 
  array (
    'cfg' => 0,
    'ip' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59573fbe7e62b5_73356364')) {function content_59573fbe7e62b5_73356364($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Основные'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['cfg']->value['NeedReConfig']){?><p class="info">Проверьте все настройки скрипта</p><?php }?><?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('_country.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('ip'=>$_smarty_tpl->tpl_vars['ip']->value), 0);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('SiteName'=>array('T','Наименование сайта'),'ForceCharset'=>array('C','Выставлять заголовок "Кодировка utf-8" <<для некоторых хостингов>>'),'AdminMail'=>array('T','e-mail админа'),'NotifyMail'=>array('T','e-mail центра оповещения'),'LockSite'=>array('C','Технические работы <<запрет входа на сайт>>'),'OutIP'=>array('X','Исходящий IP сервера','default'=>($_smarty_tpl->tpl_vars['ip']->value)." ".$_tmp1))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>