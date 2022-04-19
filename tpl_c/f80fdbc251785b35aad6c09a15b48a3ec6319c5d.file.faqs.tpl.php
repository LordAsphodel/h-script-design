<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 12:20:48
         compiled from "tpl/ru/faq/admin/faqs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1651999125595d29ef1fef09-03883890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f80fdbc251785b35aad6c09a15b48a3ec6319c5d' => 
    array (
      0 => 'tpl/ru/faq/admin/faqs.tpl',
      1 => 1504512327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1651999125595d29ef1fef09-03883890',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595d29ef220023_00717975',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d29ef220023_00717975')) {function content_595d29ef220023_00717975($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'FAQ'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'FAQ','url'=>'*','fields'=>array('fID'=>array('ID'),'fCTS'=>array('<small>Дата добавления</small>'),'fHidden'=>array('<small>Невидимый</small>'),'fCat'=>array('Категория'),'fQuestion'=>array('Вопрос'),'fAnswer'=>array('Ответ'),'fOrder'=>array('<small>Порядок</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Удалить')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'faq/admin/faq'),$_smarty_tpl);?>
?add" class="button-green">Добавить</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>