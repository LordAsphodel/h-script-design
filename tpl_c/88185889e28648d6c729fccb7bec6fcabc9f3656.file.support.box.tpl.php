<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 00:11:08
         compiled from "tpl/ru/message/support.box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16328555635957572c42d756-08012506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88185889e28648d6c729fccb7bec6fcabc9f3656' => 
    array (
      0 => 'tpl/ru/message/support.box.tpl',
      1 => 1508709667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16328555635957572c42d756-08012506',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5957572c447800_06273064',
  'variables' => 
  array (
    'user' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957572c447800_06273064')) {function content_5957572c447800_06273064($_smarty_tpl) {?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'message/support'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'form_class'=>'form','row_wrap'=>'form__row','label_class'=>'form__label','btn_class'=>'form__btn','fields'=>array('Mail'=>array('T','Ваш e-mail!! <<для связи>>',array('user_not_found'=>'укажите e-mail','mail_wrong'=>'неверный e-mail'),'skip'=>_uid(),'default'=>$_smarty_tpl->tpl_vars['user']->value['uMail']),'Topic'=>array('L','Тема!!',array('topic_empty'=>'укажите тему'),'size'=>50),'Message'=>array('W','Текст!!',array('text_empty'=>'укажите текст'),'size'=>12,'cols'=>60)),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Msg_Captcha'],'btn_text'=>'Отправить'), 0);?>
<?php }} ?>