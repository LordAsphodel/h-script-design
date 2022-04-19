<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 11:45:44
         compiled from "tpl/en/message/outbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41581810059ad12b86c8a70-27528317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d08ede8f3076e630af9a3471a8243f2f7af8cd7' => 
    array (
      0 => 'tpl/en/message/outbox.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41581810059ad12b86c8a70-27528317',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad12b86eba13_20521545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad12b86eba13_20521545')) {function content_59ad12b86eba13_20521545($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Outgoing messages'), 0);?>
<div class="page-heading animateed fadeInDown"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Outgoing messages</h1></div><div class="clear"></div></div><div class="box-info full animated fadeInDown"><div class="col-xs-12"><div class="settings-nav clearfix"><a href="/<?php echo tplModuleToLink(array('module'=>'message/show'),$_smarty_tpl);?>
?new" class=""><i class="fa fa-envelope"></i> Write new message</a><a href="/messages" class=""><i class="fa fa-level-down"></i> Incoming</a><a href="/messages/outbox" class="active"><i class="fa fa-level-up"></i> Outgoing</a></div><h2 class="text-left"><i class="fa fa-level-up"></i> Outgoing messages</h2><div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div><?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php echo $_smarty_tpl->getSubTemplate ('mlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','table_class'=>'table table-striped','fields'=>array('mID'=>array('ID'),'mTS'=>array('Date'),'uLogin'=>array('Recipient'),'mTopic'=>array('Topic'),'mText'=>array('Text')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<?php }else{ ?>No messages<?php }?><br><br></div></div><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>