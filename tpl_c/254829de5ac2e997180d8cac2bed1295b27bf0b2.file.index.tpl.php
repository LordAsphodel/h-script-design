<?php /* Smarty version Smarty-3.1.8, created on 2017-11-15 23:06:09
         compiled from "tpl/ru/account/reset_pass/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2471299375959d51dd0da73-34685134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '254829de5ac2e997180d8cac2bed1295b27bf0b2' => 
    array (
      0 => 'tpl/ru/account/reset_pass/index.tpl',
      1 => 1508709686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2471299375959d51dd0da73-34685134',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5959d51dd5a5e6_12834764',
  'variables' => 
  array (
    'squest' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959d51dd5a5e6_12834764')) {function content_5959d51dd5a5e6_12834764($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headerpage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Сброс пароля'), 0);?>
<section class="page"><div class="container"><div class="row"><div class="col-xs-12"><a href="/" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i> Главная</a><a href="/login" class="page__btn page__btn_r hidden-xs">Войти <i class="fa fa-arrow-circle-o-right"></i></a><a href="/" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a><a href="/login" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a><h2><b>Сброс</b> пароля</h2></div><div class="col-md-6 col-md-offset-3"><?php if (isset($_GET['done'])){?><h2>Операция завершена!</h2><p class="info">Теперь Вы можете <a href="<?php echo tplModuleToLink(array('module'=>'account/login'),$_smarty_tpl);?>
">войти</a> в свой аккаунт, используя <b>новый</b> пароль.<br>После этого его можно будет сменить на другой</p><?php }elseif(isset($_GET['need_confirm'])){?><h2>Операция НЕ завершена!</h2><p class="info">Для получения временного пароля <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">введите код подтверждения</a><br>или перейдите по ссылке, которые были высланы на Ваш e-mail.<br><br>Если письмо долго не приходит, то попробуйте <a href="<?php echo tplModuleToLink(array('module'=>'account/change_mail'),$_smarty_tpl);?>
">сменить e-mail</a></p><?php }elseif(isset($_smarty_tpl->tpl_vars['squest']->value)){?><?php echo $_smarty_tpl->getSubTemplate ('sqa.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><p align='center'><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'e-mail','Логин'), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>array('Login'=>array('T',($_smarty_tpl->tpl_vars['txt_login']->value)."!!",array('login_empty'=>"укажите ".($_smarty_tpl->tpl_vars['txt_login']->value),'login_not_found'=>'неверная пара Логин/e-mail','mail_not_found'=>'e-mail не найден')),'Mail'=>array('T','e-mail!!',array(),'skip'=>$_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'])),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_ResetPassCaptcha'],'btn_text'=>'Далее'), 0);?>
</p><?php }?></div></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>