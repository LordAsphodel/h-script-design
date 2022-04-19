<?php /* Smarty version Smarty-3.1.8, created on 2017-10-30 15:50:30
         compiled from "tpl/ru/account/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3308490959573fc9b2b0a8-56112033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bf5bdd8c87b000e0b917992cad3212e4df18f20' => 
    array (
      0 => 'tpl/ru/account/admin/setup.tpl',
      1 => 1508709683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3308490959573fc9b2b0a8-56112033',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59573fc9b75932_55302852',
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59573fc9b75932_55302852')) {function content_59573fc9b75932_55302852($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Настройки'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('LockData'=>array('C','Запретить изменять личные данные'),'Loginza'=>array('C','Разрешить "быструю" регистрацию и вход,<br>используя аккаунты других сервисов <<провайдер Loginza.ru>>'),1=>'Регистрация','RegMode'=>array('S','Режим',0,array(0=>'запрещена',1=>'разрешена',2=>'только с рефом',3=>'только по пригл.')),'RegCheck'=>array('S','Проверка на множественную регистрацию',0,array(0=>'нет',1=>'по IP-адресу',2=>'по cookie',3=>'по IP-адресу и cookie')),'UseName'=>array('S','Запрашивать имя',0,array(0=>'нет (=логин)',1=>'да',2=>'в личных данных')),'UseAvatar'=>array('S','Использовать Аватар',0,array(0=>'нет',1=>'да'),'comment'=>'используя  <a href="https://ru.gravatar.com/">gravatar.com</a>'),'MinLogin'=>array('I','Мин. длина логина'),'LoginRegx'=>array('T','Формат логина <<регулярное выражение>>'),'MinPass'=>array('I','Мин. длина пароля'),'PassRegx'=>array('T','Формат пароля <<регулярное выражение>>'),'RegCaptcha'=>array('S','Защита "captcha"',0,array(0=>'нет',1=>'авто',2=>'всегда')),'RegConfirm'=>array('C','Подтверждение операции через SMS/e-mail'),'RegLogin'=>array('C','Входить в аккаунт сразу после окончания регистрации'),'Вход','LoginCaptcha'=>array('S','Защита "captcha"',0,array(0=>'нет',1=>'авто',2=>'всегда')),'Смена почты','ChangeMailCaptcha'=>array('S','Защита "captcha"',0,array(0=>'нет',1=>'авто',2=>'всегда')),'ChangeMailConfirm'=>array('C','Подтверждение операции через e-mail'),'Сброс пароля','ResetPassCaptcha'=>array('S','Защита "captcha"',0,array(0=>'нет',1=>'авто',2=>'всегда')))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>