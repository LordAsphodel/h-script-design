<?php /* Smarty version Smarty-3.1.8, created on 2017-10-24 11:35:39
         compiled from "tpl/ru/news/admin/newses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16311664935959e683b043c5-61658587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a759826f8f60845574b5d1e483ed7634e3839a03' => 
    array (
      0 => 'tpl/ru/news/admin/newses.tpl',
      1 => 1508709692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16311664935959e683b043c5-61658587',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5959e683b22e44_01392876',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959e683b22e44_01392876')) {function content_5959e683b22e44_01392876($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Публикации'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Новости','url'=>'*','fields'=>array('nID'=>array('ID'),'nTS'=>array('Дата публикации'),'nAnnounce'=>array('Анонс'),'nDBegin'=>array('Публиковать с'),'nDEnd'=>array('По'),'nAttn'=>array('<small>Важная</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Удалить')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'news/admin/news'),$_smarty_tpl);?>
?add" class="button-green">Добавить</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>