<?php /* Smarty version Smarty-3.1.8, created on 2017-07-05 17:57:48
         compiled from "tpl/ru/custom/admin/pages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:392679981595cfe6c58b656-87698148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f7f069809f95bdb76b8b02fb0d166935def2a69' => 
    array (
      0 => 'tpl/ru/custom/admin/pages.tpl',
      1 => 1498731215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '392679981595cfe6c58b656-87698148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595cfe6c5b4159_33111546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595cfe6c5b4159_33111546')) {function content_595cfe6c5b4159_33111546($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Страницы'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Пользовательские страницы','url'=>'*','fields'=>array('pID'=>array('ID'),'pTopic'=>array('Название'),'pHidden'=>array('<small>Скрыта</small>'),'URL'=>array('Ссылка')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Удалить')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'custom/admin/page'),$_smarty_tpl);?>
?add" class="button-green">Добавить</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>