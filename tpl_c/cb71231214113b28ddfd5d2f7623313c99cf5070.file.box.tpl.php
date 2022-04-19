<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 23:23:22
         compiled from "tpl/en/account/login/box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10149124665958a6f7ed1c35-62106405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb71231214113b28ddfd5d2f7623313c99cf5070' => 
    array (
      0 => 'tpl/en/account/login/box.tpl',
      1 => 1508709673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10149124665958a6f7ed1c35-62106405',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958a6f7ef0b68_45959693',
  'variables' => 
  array (
    '_cfg' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958a6f7ef0b68_45959693')) {function content_5958a6f7ef0b68_45959693($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_Loginza']){?><?php echo $_smarty_tpl->getSubTemplate ('account/loginza/box.small.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><h3>or</h3><?php }?><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'E-mail','Login'), null, 0);?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'account/login'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'form'=>'login_frm','form_class'=>'form','row_wrap'=>'form__row','label_class'=>'form__label','btn_class'=>'form__btn','fields'=>array('Login'=>array('T',($_smarty_tpl->tpl_vars['txt_login']->value)."!!",array('login_empty'=>"Set ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Password",'login_not_found'=>"Incorrect couple ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Password",'not_active'=>'Account E-mail is not confirmed','banned'=>"Account access is suspended till ".($_smarty_tpl->tpl_vars['ban_date']->value),'blocked'=>'Account is blocked')),'Pass'=>array('*','Password!!',array('GA_wrong'=>'Incorrect Google Authenticator code')),'Remember'=>array('CC','Remember me',array()),'URL'=>$_smarty_tpl->tpl_vars['url']->value),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_LoginCaptcha'],'btn_text'=>'Log in'), 0);?>
<?php }} ?>