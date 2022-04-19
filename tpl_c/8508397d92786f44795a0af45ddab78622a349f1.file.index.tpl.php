<?php /* Smarty version Smarty-3.1.8, created on 2022-04-20 00:21:55
         compiled from "tpl/ru\account\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18181625f27f39471a9-15760664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8508397d92786f44795a0af45ddab78622a349f1' => 
    array (
      0 => 'tpl/ru\\account\\login\\index.tpl',
      1 => 1510939454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18181625f27f39471a9-15760664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_625f27f39d0e02_94722309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_625f27f39d0e02_94722309')) {function content_625f27f39d0e02_94722309($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headerreg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Вход'), 0);?>
<section class="page"><div class="container"><div class="row"><div class="col-xs-12"><a href="/" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i> На главную</a><a href="/registration" class="page__btn page__btn_r hidden-xs">Регистрация <i class="fa fa-arrow-circle-o-right"></i></a><a href="/" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a><a href="/registration" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a><h2>Вход</h2></div><div class="col-md-6"><?php if (isset($_GET['ip_changed'])){?><h2>Система безопасности</h2><p class="info">Вы пытаетесь войти в аккаунт с другого IP-адреса.<br>Для продолжения <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">введите код подтверждения</a><br>или перейдите по ссылке, которые были высланы на Ваш e-mail</p><?php }elseif(isset($_GET['brute_force'])){?><h2>Система безопасности</h2><p class="info">До этого пароль был неверно введен несколько раз подряд.<br>Для продолжения <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">введите код подтверждения</a><br>или перейдите по ссылке, которые были высланы на Ваш e-mail</p><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['url']->value){?>Страница "<i>...<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
</i>" требует авторизации<br><br><?php }?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Sys_LockSite']){?><p class="info">В настоящее время на сайте идут технические работы.<br>Вход <b>только</b> для обслуживающего персонала</p><?php }?><?php echo $_smarty_tpl->getSubTemplate ('account/login/box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if (!$_smarty_tpl->tpl_vars['_cfg']->value['Sys_LockSite']){?><br><a href="<?php echo tplModuleToLink(array('module'=>'account/reset_pass'),$_smarty_tpl);?>
">Забыл пароль</a><br><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']>=0){?><a href="<?php echo tplModuleToLink(array('module'=>'account/register'),$_smarty_tpl);?>
">Еще нет регистрации</a><br><?php }?><br><?php }?><?php }?></div><div class="col-md-6"><div class="scroll-block scroll"><h3><b>ПРОЧТИ МЕНЯ</b></h3><b> Перед тем, как регистрироваться на нашем сайте, прочитайте, пожалуйста, <a href="<?php echo '/rules';?>
">правила</a> проекта. </b><br></div></div></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footerreg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>