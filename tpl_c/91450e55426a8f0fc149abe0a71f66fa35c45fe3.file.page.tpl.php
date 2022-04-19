<?php /* Smarty version Smarty-3.1.8, created on 2017-07-10 22:27:49
         compiled from "tpl/ru/custom/admin/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3294261775963d535e98f04-62468377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91450e55426a8f0fc149abe0a71f66fa35c45fe3' => 
    array (
      0 => 'tpl/ru/custom/admin/page.tpl',
      1 => 1498731214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3294261775963d535e98f04-62468377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'el' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5963d535eb7c97_93085698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5963d535eb7c97_93085698')) {function content_5963d535eb7c97_93085698($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Страница'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Страница','title_new'=>'Новая страница','fields'=>array('pID'=>array(),'pHidden'=>array('C','Скрыта'),'pDirect'=>array('C','Показывать только этот код <<без "шапки" и "подвала">>'),'pTopic'=>array('L','Название!!',array('topic_empty'=>'укажите название'),'size'=>50),'pText'=>array('Y','Содержимое!!',array('text_empty'=>'укажите содержимое'),'size'=>15)),'values'=>$_smarty_tpl->tpl_vars['el']->value), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>