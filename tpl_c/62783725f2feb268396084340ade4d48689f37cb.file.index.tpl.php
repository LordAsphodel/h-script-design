<?php /* Smarty version Smarty-3.1.8, created on 2017-10-26 18:39:07
         compiled from "tpl/ru/message/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99201919559ad1a4ded2c20-35532761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62783725f2feb268396084340ade4d48689f37cb' => 
    array (
      0 => 'tpl/ru/message/index.tpl',
      1 => 1508709667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99201919559ad1a4ded2c20-35532761',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad1a4def94d8_58547963',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad1a4def94d8_58547963')) {function content_59ad1a4def94d8_58547963($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Входящие сообщения'), 0);?>
<div class="page-heading animateed fadeInDown"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Входящие сообщения</h1></div><div class="clear"></div></div><div class="box-info full animated fadeInDown"><div class="col-xs-12"><div class="settings-nav clearfix"><a href="/<?php echo tplModuleToLink(array('module'=>'message/show'),$_smarty_tpl);?>
?new" class=""><i class="fa fa-envelope"></i> Написать новое сообщение</a><a href="/messages" class="active"><i class="fa fa-level-down"></i> Входящие</a><a href="/messages/outbox" class=""><i class="fa fa-level-up"></i> Исходящие</a></div><h2 class="text-left"><i class="fa fa-level-down"></i> Входящие сообщения</h2><div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div><?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php echo $_smarty_tpl->getSubTemplate ('mlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('table_class'=>'table table-striped','btn_wrapp'=>'lower-row','btn_class'=>'btn btn-primary','url'=>'*','fields'=>array('bID'=>array('ID'),'mTS'=>array('Дата'),'uLogin'=>array('Отправитель'),'mTopic'=>array('Тема'),'bRTS'=>array('Прочтено')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Удалить')), 0);?>
<?php }else{ ?>Сообщений нет<?php }?><br><br></div></div><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>