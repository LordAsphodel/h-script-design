<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 11:45:45
         compiled from "tpl/en/message/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30571682859ad12b9c73583-29263925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb5fa69480299d46248b850fb7cb6c483bc818cc' => 
    array (
      0 => 'tpl/en/message/show.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30571682859ad12b9c73583-29263925',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'el' => 0,
    '_cfg' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad12b9cd13f4_16690866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad12b9cd13f4_16690866')) {function content_59ad12b9cd13f4_16690866($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Message'), 0);?>
<div class="page-heading animateed fadeInDown"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Message</h1></div><div class="clear"></div></div><div class="box-info full animated fadeInDown"><div class="col-xs-12"><?php if ($_smarty_tpl->tpl_vars['el']->value['mID']){?><div class="settings-nav clearfix"><a href="<?php echo tplModuleToLink(array('module'=>'message/show'),$_smarty_tpl);?>
?new" class="active"><i class="fa fa-envelope"></i> Write new message</a><a href="/messages" class=""><i class="fa fa-level-down"></i> Incoming</a><a href="/messages/outbox" class=""><i class="fa fa-level-up"></i> Outgoing</a></div><h2 class="text-left"><i class="fa fa-envelope"></i> Reply message</h2><div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form_class'=>'form-horizontal','row_wrap'=>'settings-form-group form-group','label_class'=>'col-sm-3 control-label','input_class'=>'form-control','input_wrap'=>'col-sm-6','fields'=>array('uLogin'=>array('T','Sender','readonly'=>true),'mTopic'=>array('T','Topic','readonly'=>true),'mText'=>array('W','Text','size'=>15,'readonly'=>true)),'values'=>$_smarty_tpl->tpl_vars['el']->value,'btn_text'=>' '), 0);?>
<?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Msg_Mode']>1){?><div class="settings-form-group form-group"><div class="col-sm-6 col-sm-offset-3"><a class="btn btn-primary col-sm-12" href="<?php echo tplModuleToLink(array('module'=>'message/show'),$_smarty_tpl);?>
?new&re=<?php echo $_smarty_tpl->tpl_vars['el']->value['bID'];?>
" class="button-green">Reply</a><br></div></div><br><br><br><?php }?><?php }else{ ?><div class="settings-nav clearfix"><a href="<?php echo tplModuleToLink(array('module'=>'message/show'),$_smarty_tpl);?>
?new" class="active"><i class="fa fa-envelope"></i> Write new message</a><a href="/messages" class=""><i class="fa fa-level-down"></i> Incoming</a><a href="/messages/outbox" class=""><i class="fa fa-level-up"></i> Outgoing</a></div><h2 class="text-left"><i class="fa fa-envelope"></i> New message</h2><div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div><?php if ($_smarty_tpl->tpl_vars['el']->value['mTo']){?><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form_class'=>'form-horizontal','row_wrap'=>'settings-form-group form-group','label_class'=>'col-sm-3 control-label','input_class'=>'form-control','input_wrap'=>'col-sm-6','btn_class'=>'btn btn-primary col-sm-12','btn_wrapp'=>'col-sm-6 col-sm-offset-3','fields'=>array('Re'=>array(),'mTo'=>array('T','Recipient!!',array('to_empty'=>'Set recipient','to_wrong'=>'Recipient is not found'),'size'=>50,'readonly'=>true),'mTopic'=>array('L','Topic!!',array('topic_empty'=>'Set topic'),'size'=>50,'readonly'=>true),'mText'=>array('W','Text!!',array('text_empty'=>'Set text'),'size'=>15)),'values'=>$_smarty_tpl->tpl_vars['el']->value,'btn_text'=>' ','btns'=>array('send'=>'Send')), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form_class'=>'form-horizontal','row_wrap'=>'settings-form-group form-group','label_class'=>'col-sm-3 control-label','input_class'=>'form-control','input_wrap'=>'col-sm-6','btn_class'=>'btn btn-primary col-sm-12','btn_wrapp'=>'col-sm-6 col-sm-offset-3','fields'=>array('Re'=>array(),'mTo'=>array('S','Recipient!!',array('to_empty'=>'Set recipient','to_wrong'=>'Recipient is not found'),$_smarty_tpl->tpl_vars['users']->value),'mTopic'=>array('L','Topic!!',array('topic_empty'=>'Set topic'),'size'=>50),'mText'=>array('W','Text!!',array('text_empty'=>'Set topic'),'size'=>15)),'values'=>$_smarty_tpl->tpl_vars['el']->value,'btn_text'=>' ','btns'=>array('send'=>'Send')), 0);?>
<?php }?><?php }?><br><br></div></div><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>