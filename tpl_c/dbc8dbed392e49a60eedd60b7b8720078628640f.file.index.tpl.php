<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 23:23:22
         compiled from "tpl/en/account/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10607180365958a6f7e84005-00436146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbc8dbed392e49a60eedd60b7b8720078628640f' => 
    array (
      0 => 'tpl/en/account/login/index.tpl',
      1 => 1508709673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10607180365958a6f7e84005-00436146',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958a6f7eb7087_88936165',
  'variables' => 
  array (
    'url' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958a6f7eb7087_88936165')) {function content_5958a6f7eb7087_88936165($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headerreg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Log in'), 0);?>
<section class="page"><div class="container"><div class="row"><div class="col-xs-12"><a href="/" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i>To homepage</a><a href="/registration" class="page__btn page__btn_r hidden-xs">Sign up <i class="fa fa-arrow-circle-o-right"></i></a><a href="/" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a><a href="/registration" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a><h2>Log in</h2></div><div class="col-md-6"><?php if (isset($_GET['ip_changed'])){?><h2>Security system</h2><p class="info">You are trying to log into account from different IP-address.<br>To confirm <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">enter confirmation code</a><br>or follow the link that were sent to your E-mail</p><?php }elseif(isset($_GET['brute_force'])){?><h2>Security system</h2><p class="info">Incorrect password has been entered several times in succession.<br>To continue <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">enter confirmation code</a><br>or follow the link that were sent to your E-mail</p><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['url']->value){?>Page "<i>...<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
</i>" requires authorization<br><br><?php }?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Sys_LockSite']){?><p class="info">The site is under maintance.<br>Login is available <b>only</b> for stuff.</p><?php }?><?php echo $_smarty_tpl->getSubTemplate ('account/login/box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if (!$_smarty_tpl->tpl_vars['_cfg']->value['Sys_LockSite']){?><br><a href="<?php echo tplModuleToLink(array('module'=>'account/reset_pass'),$_smarty_tpl);?>
">Forgot your password?</a><br><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']>=0){?><a href="<?php echo tplModuleToLink(array('module'=>'account/register'),$_smarty_tpl);?>
">Not registered yet</a><br><?php }?><br><?php }?><?php }?></div><div class="col-md-6"><div class="scroll-block scroll"><h3><b>READ ME</b></h3><b> Before regestering on our site please read <a href="<?php echo '/rules';?>
">regulations</a> of the project. </b><br></div></div></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footerreg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>