<?php /* Smarty version Smarty-3.1.8, created on 2017-11-01 09:19:00
         compiled from "tpl/ru/message/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73311374759ad1b0c01ace6-20591435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6678479149e2bf97e36bbdfe7748bb1fc89147d' => 
    array (
      0 => 'tpl/ru/message/show.tpl',
      1 => 1508709667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73311374759ad1b0c01ace6-20591435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad1b0c0795a5_58228801',
  'variables' => 
  array (
    'el' => 0,
    '_cfg' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad1b0c0795a5_58228801')) {function content_59ad1b0c0795a5_58228801($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Сообщение'), 0);?>
<div class="page-heading animateed fadeInDown"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Сообщение</h1></div><div class="clear"></div></div><div class="box-info full animated fadeInDown"><div class="col-xs-12"><?php if ($_smarty_tpl->tpl_vars['el']->value['mID']){?><div class="settings-nav clearfix"><a href="<?php echo tplModuleToLink(array('module'=>'message/show'),$_smarty_tpl);?>
?new" class="active"><i class="fa fa-envelope"></i> Написать новое сообщение</a><a href="/messages" class=""><i class="fa fa-level-down"></i> Входящие</a><a href="/messages/outbox" class=""><i class="fa fa-level-up"></i> Исходящие</a></div><h2 class="text-left"><i class="fa fa-envelope"></i> Сообщение для ответа</h2><div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form_class'=>'form-horizontal','row_wrap'=>'settings-form-group form-group','label_class'=>'col-sm-3 control-label','input_class'=>'form-control','input_wrap'=>'col-sm-6','fields'=>array('uLogin'=>array('T','Отправитель','readonly'=>true),'mTopic'=>array('T','Тема','readonly'=>true),'mText'=>array('W','Текст','size'=>15,'readonly'=>true)),'values'=>$_smarty_tpl->tpl_vars['el']->value,'btn_text'=>' '), 0);?>
<?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Msg_Mode']>1){?><div class="settings-form-group form-group"><div class="col-sm-6 col-sm-offset-3"><a class="btn btn-primary col-sm-12" href="<?php echo tplModuleToLink(array('module'=>'message/show'),$_smarty_tpl);?>
?new&re=<?php echo $_smarty_tpl->tpl_vars['el']->value['bID'];?>
" class="button-green">Ответить</a><br></div></div><br><br><br><?php }?><?php }else{ ?><div class="settings-nav clearfix"><a href="<?php echo tplModuleToLink(array('module'=>'message/show'),$_smarty_tpl);?>
?new" class="active"><i class="fa fa-envelope"></i> Написать новое сообщение</a><a href="/messages" class=""><i class="fa fa-level-down"></i> Входящие</a><a href="/messages/outbox" class=""><i class="fa fa-level-up"></i> Исходящие</a></div><h2 class="text-left"><i class="fa fa-envelope"></i> Новое сообщение</h2><div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div><?php if ($_smarty_tpl->tpl_vars['el']->value['mTo']){?><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form_class'=>'form-horizontal','row_wrap'=>'settings-form-group form-group','label_class'=>'col-sm-3 control-label','input_class'=>'form-control','input_wrap'=>'col-sm-6','btn_class'=>'btn btn-primary col-sm-12','btn_wrapp'=>'col-sm-6 col-sm-offset-3','fields'=>array('Re'=>array(),'mTo'=>array('T','Получатель!!',array('to_empty'=>'укажите получателя','to_wrong'=>'получатель не найдены'),'size'=>50,'readonly'=>true),'mTopic'=>array('L','Тема!!',array('topic_empty'=>'укажите тему'),'size'=>50,'readonly'=>true),'mText'=>array('W','Текст!!',array('text_empty'=>'укажите текст'),'size'=>15)),'values'=>$_smarty_tpl->tpl_vars['el']->value,'btn_text'=>' ','btns'=>array('send'=>'Отправить')), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form_class'=>'form-horizontal','row_wrap'=>'settings-form-group form-group','label_class'=>'col-sm-3 control-label','input_class'=>'form-control','input_wrap'=>'col-sm-6','btn_class'=>'btn btn-primary col-sm-12','btn_wrapp'=>'col-sm-6 col-sm-offset-3','fields'=>array('Re'=>array(),'mTo'=>array('S','Получатель!!',array('to_empty'=>'укажите получателя','to_wrong'=>'получатель не найдены'),$_smarty_tpl->tpl_vars['users']->value),'mTopic'=>array('L','Тема!!',array('topic_empty'=>'укажите тему'),'size'=>50),'mText'=>array('W','Текст!!',array('text_empty'=>'укажите текст'),'size'=>15)),'values'=>$_smarty_tpl->tpl_vars['el']->value,'btn_text'=>' ','btns'=>array('send'=>'Отправить')), 0);?>
<?php }?><?php }?><br><br></div></div><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>