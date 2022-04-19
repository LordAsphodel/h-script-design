<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 11:45:38
         compiled from "tpl/en/message/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40861808959ad12b27b85e4-50408471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce71a6f61d73a5d7299b48ca10a769b0f373b67d' => 
    array (
      0 => 'tpl/en/message/index.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40861808959ad12b27b85e4-50408471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad12b27de4f9_61626879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad12b27de4f9_61626879')) {function content_59ad12b27de4f9_61626879($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Incoming messages'), 0);?>
<div class="page-heading animateed fadeInDown"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Incoming messages</h1></div><div class="clear"></div></div><div class="box-info full animated fadeInDown"><div class="col-xs-12"><div class="settings-nav clearfix"><a href="/<?php echo tplModuleToLink(array('module'=>'message/show'),$_smarty_tpl);?>
?new" class=""><i class="fa fa-envelope"></i> Write new message</a><a href="/messages" class="active"><i class="fa fa-level-down"></i> Incoming</a><a href="/messages/outbox" class=""><i class="fa fa-level-up"></i> Outgoing</a></div><h2 class="text-left"><i class="fa fa-level-down"></i> Incoming messages</h2><div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div><?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php echo $_smarty_tpl->getSubTemplate ('mlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('table_class'=>'table table-striped','btn_wrapp'=>'lower-row','btn_class'=>'btn btn-primary','url'=>'*','fields'=>array('bID'=>array('ID'),'mTS'=>array('Date'),'uLogin'=>array('Sender'),'mTopic'=>array('Topic'),'bRTS'=>array('Is read')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Delete')), 0);?>
<?php }else{ ?>No messages<?php }?><br><br></div></div><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>