<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 23:23:23
         compiled from "tpl/en/account/reset_pass/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:442191428595c64aad748e4-67217293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ee7dcfca542cc8ed024d6aefaf6d5e056f27247' => 
    array (
      0 => 'tpl/en/account/reset_pass/index.tpl',
      1 => 1508709674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '442191428595c64aad748e4-67217293',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595c64aadac3b7_26993455',
  'variables' => 
  array (
    'squest' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595c64aadac3b7_26993455')) {function content_595c64aadac3b7_26993455($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headerpage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Reset password'), 0);?>
<section class="page"><div class="container"><div class="row"><div class="col-xs-12"><a href="/" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i> Main</a><a href="/login" class="page__btn page__btn_r hidden-xs">Log in <i class="fa fa-arrow-circle-o-right"></i></a><a href="/" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a><a href="/login" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a><h2><b>Reset</b> password</h2></div><div class="col-md-6 col-md-offset-3"><?php if (isset($_GET['done'])){?><h2>Operation is complete!</h2><p class="info">You are able to <a href="<?php echo tplModuleToLink(array('module'=>'account/login'),$_smarty_tpl);?>
">log into</a> your account using <b>new</b> paasword.<br>Later you can change it.</p><?php }elseif(isset($_GET['need_confirm'])){?><h2>Operation is NOT complete!</h2><p class="info">In order to get temporary password <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">enter confirmation code</a><br>or follow the link that were sent to your E-mail.<br><br>If there is no letter for long period of time try to <a href="<?php echo tplModuleToLink(array('module'=>'account/change_mail'),$_smarty_tpl);?>
">change E-mail</a></p><?php }elseif(isset($_smarty_tpl->tpl_vars['squest']->value)){?><?php echo $_smarty_tpl->getSubTemplate ('sqa.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><p align='center'><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'E-mail','Login'), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>array('Login'=>array('T',($_smarty_tpl->tpl_vars['txt_login']->value)."!!",array('login_empty'=>"Set ".($_smarty_tpl->tpl_vars['txt_login']->value),'login_not_found'=>'Incorrect couple Login/E-mail','mail_not_found'=>'E-mail not found')),'Mail'=>array('T','E-mail!!',array(),'skip'=>$_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'])),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_ResetPassCaptcha'],'btn_text'=>'Next'), 0);?>
</p><?php }?></div></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>