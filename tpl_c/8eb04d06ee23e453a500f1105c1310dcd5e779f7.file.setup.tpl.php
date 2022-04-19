<?php /* Smarty version Smarty-3.1.8, created on 2017-07-05 20:59:06
         compiled from "tpl/ru/news/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:427722571595d28eacd5641-97504358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eb04d06ee23e453a500f1105c1310dcd5e779f7' => 
    array (
      0 => 'tpl/ru/news/admin/setup.tpl',
      1 => 1498731229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '427722571595d28eacd5641-97504358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595d28ead0c302_08939522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d28ead0c302_08939522')) {function content_595d28ead0c302_08939522($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Настройки'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('ShowCount'=>array('I','Кол-во новостей на странице'),'InBlock'=>array('I','Кол-во новостей в блоке'))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>