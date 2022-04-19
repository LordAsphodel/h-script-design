<?php /* Smarty version Smarty-3.1.8, created on 2017-07-05 21:06:04
         compiled from "tpl/ru/sms/admin/send.tpl" */ ?>
<?php /*%%SmartyHeaderCode:535233028595d2a8ca45694-50268078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14c91cbf5dee1d3911702cd5c1230270edfc7b84' => 
    array (
      0 => 'tpl/ru/sms/admin/send.tpl',
      1 => 1498731235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '535233028595d2a8ca45694-50268078',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595d2a8ca62220_58987710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d2a8ca62220_58987710')) {function content_595d2a8ca62220_58987710($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Отправка СМС'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('fields'=>array('From'=>array('T','Отправитель <<пусто - значение "по умолчанию">>',array('from_wrong'=>'неверный отправитель')),'To'=>array('T','Номер получателя',array('to_wrong'=>'неверный номер получателя')),'Text'=>array('W','Текст',array('msg_empty'=>'введите сообщение','msg_too_long'=>'сообщение слишком длинное'),'size'=>5)),'btn_text'=>' ','btns'=>array('send'=>'Отправить')), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>