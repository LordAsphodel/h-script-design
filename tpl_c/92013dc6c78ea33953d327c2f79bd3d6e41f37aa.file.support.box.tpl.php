<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 23:23:13
         compiled from "tpl/en/message/support.box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1116432818595c64a16ae863-69434871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92013dc6c78ea33953d327c2f79bd3d6e41f37aa' => 
    array (
      0 => 'tpl/en/message/support.box.tpl',
      1 => 1508709657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1116432818595c64a16ae863-69434871',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595c64a16de557_04277621',
  'variables' => 
  array (
    'user' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595c64a16de557_04277621')) {function content_595c64a16de557_04277621($_smarty_tpl) {?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'message/support'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'form_class'=>'form','row_wrap'=>'form__row','label_class'=>'form__label','btn_class'=>'form__btn','fields'=>array('Mail'=>array('T','Your E-mail!! <<for communication>>',array('user_not_found'=>'Set E-mail','mail_wrong'=>'Incorrect E-mail'),'skip'=>_uid(),'default'=>$_smarty_tpl->tpl_vars['user']->value['uMail']),'Topic'=>array('L','Topic!!',array('topic_empty'=>'Set topic'),'size'=>50),'Message'=>array('W','Text!!',array('text_empty'=>'Set text'),'size'=>12,'cols'=>60)),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Msg_Captcha'],'btn_text'=>'Send'), 0);?>
<?php }} ?>