<?php /* Smarty version Smarty-3.1.8, created on 2022-04-20 00:21:55
         compiled from "tpl/ru\account\login\box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14731625f27f3a05bd4-21711364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '838db592530ba94ccd846b89063b2e93a5b0a844' => 
    array (
      0 => 'tpl/ru\\account\\login\\box.tpl',
      1 => 1510939454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14731625f27f3a05bd4-21711364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_cfg' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_625f27f3a577e7_09839180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_625f27f3a577e7_09839180')) {function content_625f27f3a577e7_09839180($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_Loginza']){?><?php echo $_smarty_tpl->getSubTemplate ('account/loginza/box.small.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><h3>или</h3><?php }?><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'e-mail','Логин'), null, 0);?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'account/login'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'form'=>'login_frm','form_class'=>'form','row_wrap'=>'form__row','label_class'=>'form__label','btn_class'=>'form__btn','fields'=>array('Login'=>array('T',($_smarty_tpl->tpl_vars['txt_login']->value)."!!",array('login_empty'=>"укажите ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Пароль",'login_not_found'=>"неверная пара ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Пароль",'not_active'=>'e-mail аккаунта не подтвержден','banned'=>"доступ в аккаунт приостановлен до ".($_smarty_tpl->tpl_vars['ban_date']->value),'blocked'=>'аккаунт заблокирован')),'Pass'=>array('*','Пароль!!',array('GA_wrong'=>'неверный Google Authenticator код')),'Remember'=>array('CC','Запомнить',array()),'URL'=>$_smarty_tpl->tpl_vars['url']->value),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_LoginCaptcha'],'btn_text'=>'Войти'), 0);?>
<?php }} ?>