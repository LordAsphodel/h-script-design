<?php /* Smarty version Smarty-3.1.8, created on 2017-10-24 11:35:42
         compiled from "tpl/ru/news/admin/news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13814195525959e68535d0c2-39392488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd80436c67f79a4a5ebbcc804e3888166a6a9ba78' => 
    array (
      0 => 'tpl/ru/news/admin/news.tpl',
      1 => 1508709692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13814195525959e68535d0c2-39392488',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5959e685395297_39888086',
  'variables' => 
  array (
    'today' => 0,
    'el' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959e685395297_39888086')) {function content_5959e685395297_39888086($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Публикация'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Публикация','title_new'=>'Новая публикация','fields'=>array('nID'=>array(),'nTS'=>array('DT','Дата публикации!!',array('date_empty'=>'укажите дату'),'default'=>$_smarty_tpl->tpl_vars['today']->value),'nTopic'=>array('L','Тема!!',array('topic_empty'=>'укажите тему'),'size'=>50),'nAttn'=>array('CC','Важная'),'nAnnounce'=>array('W','Краткий анонс!!',array('ann_empty'=>'укажите анонс'),'size'=>5),'nText'=>array('Y','Полный текст!!',array('text_empty'=>'укажите текст новости'),'size'=>15),'nDBegin'=>array('D','Отображать с'),'nDEnd'=>array('D','По')),'values'=>$_smarty_tpl->tpl_vars['el']->value), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>