<?php /* Smarty version Smarty-3.1.8, created on 2017-09-06 11:05:19
         compiled from "tpl/ru/message/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1203786069595d2a8874fa02-84721968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28d5278871e2c5f2e04554384988e2b4514ed5ab' => 
    array (
      0 => 'tpl/ru/message/admin/setup.tpl',
      1 => 1504512327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1203786069595d2a8874fa02-84721968',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595d2a887a8d44_85775965',
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d2a887a8d44_85775965')) {function content_595d2a887a8d44_85775965($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Настройки'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('Mode'=>array('S','Режим','',array(0=>'только поддержка',1=>'поддержка и входящие',2=>'все')),'NoMail'=>array('C','Не высылать оповещения на e-mail'),'ShowCount'=>array('I','Кол-во сообщений на странице'),1=>'Поддержка','Captcha'=>array('S','Защита "captcha"',0,array(0=>'нет',1=>'авто',2=>'всегда')),'_Cats'=>array('A','Категории сообщений<br><<одна строка - одна категория>>','size'=>20))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>