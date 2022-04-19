<?php /* Smarty version Smarty-3.1.8, created on 2017-07-05 21:06:05
         compiled from "tpl/ru/sms/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1472395513595d2a8da41051-51974766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c79aad04ca8cf9bade6e3b306948ca118e5349d' => 
    array (
      0 => 'tpl/ru/sms/admin/setup.tpl',
      1 => 1498731235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1472395513595d2a8da41051-51974766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595d2a8da64c36_55296879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d2a8da64c36_55296879')) {function content_595d2a8da64c36_55296879($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Настройка'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('Prov'=>array('S','Провайдер',0,array('- отключено -','epochta.ru')),'From'=>array('T','Отправитель <<14 цифровых символов<br>или 11 цифробуквенных (английские буквы и цифры)>>'),'SendCount'=>array('I','Отправлять сообщения, не более N в минуту'),'UpdateCount'=>array('I','Обновлять статусы сообщений, не более N в минуту'),1=>'Подтверждения на операции','REG'=>array('C','Регистрация'),'CASHOUT'=>array('C','Вывод'),'epochta.ru','EP_Login'=>array('T','Логин <<e-mail>>'),'EP_Pass'=>array('*','Пароль')),'btn_text'=>'Сохранить'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>