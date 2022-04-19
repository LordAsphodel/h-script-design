<?php /* Smarty version Smarty-3.1.8, created on 2017-11-01 09:18:57
         compiled from "tpl/ru/message/outbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81751423359ad1b099cad04-48654660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf291f226b16d35d39fecffaf76e8c97d5b97f52' => 
    array (
      0 => 'tpl/ru/message/outbox.tpl',
      1 => 1508709667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81751423359ad1b099cad04-48654660',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad1b099eb037_79356898',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad1b099eb037_79356898')) {function content_59ad1b099eb037_79356898($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Исходящие сообщения'), 0);?>
<div class="page-heading animateed fadeInDown"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Исходящие сообщения</h1></div><div class="clear"></div></div><div class="box-info full animated fadeInDown"><div class="col-xs-12"><div class="settings-nav clearfix"><a href="/<?php echo tplModuleToLink(array('module'=>'message/show'),$_smarty_tpl);?>
?new" class=""><i class="fa fa-envelope"></i> Написать новое сообщение</a><a href="/messages" class=""><i class="fa fa-level-down"></i> Входящие</a><a href="/messages/outbox" class="active"><i class="fa fa-level-up"></i> Исходящие</a></div><h2 class="text-left"><i class="fa fa-level-up"></i> Исходящие сообщения</h2><div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div><?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php echo $_smarty_tpl->getSubTemplate ('mlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','table_class'=>'table table-striped','fields'=>array('mID'=>array('ID'),'mTS'=>array('Дата'),'uLogin'=>array('Получатель'),'mTopic'=>array('Тема'),'mText'=>array('Текст')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<?php }else{ ?>Сообщений нет<?php }?><br><br></div></div><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>