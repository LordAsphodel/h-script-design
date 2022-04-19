<?php /* Smarty version Smarty-3.1.8, created on 2017-07-05 11:51:43
         compiled from "tpl/ru/tickets/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1917457182595ca89f452de4-26506843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2af1feea77d64f811a6be96790779d46149d7b3a' => 
    array (
      0 => 'tpl/ru/tickets/admin/index.tpl',
      1 => 1498731240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1917457182595ca89f452de4-26506843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595ca89f4a17b5_32453319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595ca89f4a17b5_32453319')) {function content_595ca89f4a17b5_32453319($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Поддержка'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('tickets/_states.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Тикеты','url'=>'*','fields'=>array('tID'=>array('ID'),'tLTS'=>array('Дата'),'uLogin'=>array('Отправитель'),'tTopic'=>array('Тема'),'tText'=>array('Текст'),'tState'=>array('Статус'),'cnt'=>array('Ответов')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Удалить')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'tickets/admin/ticket'),$_smarty_tpl);?>
?add" class="button-green">Создать</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>