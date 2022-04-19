<?php /* Smarty version Smarty-3.1.8, created on 2017-10-26 08:11:22
         compiled from "tpl/en/account/change_mail/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304757865595c64a9a9f063-20272613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '917ad24241d4f15edb7e21143221c85fd2849b4d' => 
    array (
      0 => 'tpl/en/account/change_mail/index.tpl',
      1 => 1508709672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304757865595c64a9a9f063-20272613',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595c64a9ade5f0_72392011',
  'variables' => 
  array (
    'squest' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595c64a9ade5f0_72392011')) {function content_595c64a9ade5f0_72392011($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'E-mail change'), 0);?>
<div class="page-heading animateed fadeInDown"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>E-mail change</h1></div><div class="clear"></div></div><div class="box-info full animated fadeInDown"><div class="settings-content clearfix"><div class="col-xs-12"><h2><i class="fa fa-cogs"></i> E-mail change</h2><div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div><?php if (isset($_GET['done'])){?><h2>Е-mail is changed to new one!</h2><?php }elseif(isset($_GET['need_confirm'])){?><h2>Operation is NOT complete!</h2><p class="info">In order to complete operation you should confirm your e-mail.<br>To manage this <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
"> enter the confirmation code</a><br>or follow the link that were sent to your E-mail<br><br>If there is no letter for long period of time try to <a href="<?php echo tplModuleToLink(array('module'=>'account/change_mail'),$_smarty_tpl);?>
">change E-mail</a></p><?php }elseif(isset($_GET['already_used'])){?><h2>Operation can NOT be completed!</h2><p class="info">This E-mail can not be confirmed by you<br>as it is used by another user.</p><?php }elseif(isset($_smarty_tpl->tpl_vars['squest']->value)){?><?php echo $_smarty_tpl->getSubTemplate ('sqa.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'e-mail','Login'), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','form_class'=>'form-horizontal','row_wrap'=>'settings-form-group form-group','label_class'=>'col-sm-3 control-label','input_class'=>'form-control','input_wrap'=>'col-sm-6','btn_class'=>'btn btn-primary col-sm-12','btn_wrapp'=>'col-sm-6 col-sm-offset-3','fields'=>array('Login'=>array('T',($_smarty_tpl->tpl_vars['txt_login']->value)."!!",array('login_empty'=>"Set ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Password",'login_not_found'=>"Incorrect couple ".($_smarty_tpl->tpl_vars['txt_login']->value)."/Password",'banned'=>"Account access is suspended till".($_smarty_tpl->tpl_vars['ban_date']->value),'blocked'=>'Account is blocked'),'skip'=>_uid()),'Pass'=>array('*','Password!!',array('pass_not_found'=>'Incorrect password')),'NewMail'=>array('T',valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Account_ChangeMailConfirm'],'New E-mail!! <<a confirmation will be sent>>','New E-mail!!'),array('mail_empty'=>'Set E-mail','mail_wrong'=>'Incorrect E-mail','mail_used'=>'E-mail is used'))),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_ChangeMailCaptcha'],'btn_text'=>'Next'), 0);?>
<?php }?></div></div></div><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>