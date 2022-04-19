<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 00:11:24
         compiled from "tpl/ru/message/admin/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1093024477595ca8ad2d8eb5-52834114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6edc74cb8694a8e1140788aa7d2a3777fbe336c9' => 
    array (
      0 => 'tpl/ru/message/admin/messages.tpl',
      1 => 1508709691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1093024477595ca8ad2d8eb5-52834114',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595ca8ad2f97b6_67098617',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595ca8ad2f97b6_67098617')) {function content_595ca8ad2f97b6_67098617($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Сообщения'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Сообщения','url'=>'*','fields'=>array('bID'=>array('ID'),'mTS'=>array('Дата'),'uLogin'=>array('Отправитель'),'To'=>array('Получатели'),'mTopic'=>array('Тема'),'mText'=>array('Текст')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Удалить')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'message/admin/message'),$_smarty_tpl);?>
?add" class="button-green">Создать</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>