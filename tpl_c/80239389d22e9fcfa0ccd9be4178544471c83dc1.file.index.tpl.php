<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 11:45:47
         compiled from "tpl/en/account/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:293468841597a13cdc142f9-45135965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80239389d22e9fcfa0ccd9be4178544471c83dc1' => 
    array (
      0 => 'tpl/en/account/index.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293468841597a13cdc142f9-45135965',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_597a13cdca23d2_84235509',
  'variables' => 
  array (
    '_cfg' => 0,
    'utz' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597a13cdca23d2_84235509')) {function content_597a13cdca23d2_84235509($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Security settings'), 0);?>
<div class="page-heading"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Security settings</h1></div><div class="clear"></div></div><div class="settings-box animated fadeInDown"><div class="settings-nav clearfix"><a href="/account" class="active"><i class="fa fa-cogs"></i> Security settings</a><a href="/balance/wallets" class=""><i class="fa fa-money"></i> Payment settings</a></div><div class="settings-content clearfix"><!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right" style="padding-top: 10px;"><h2><i class="fa fa-photo"></i> Фото профиля</h2><div class="s-divider" style="margin-top: 20px; margin-bottom: 20px;"></div><p id="photo_upload_error" style="background: #ffd7d7; padding: 20px; margin-bottom: 20px; border-left: 5px solid #fb7777; display: none;"></p><div class="settings-photo"><div class="photo-av"><img id="profile_photo_img" src="img/18733_c6677afa2f76650cbeb102f1b00b591151e31ffe_m150.jpg" /></div><div class="progress active" style="display: none;"><div class="progress-bar progress-bar-success" role="progressbar" id="profile_photo_progress" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"><span class="sr-only">0% Complete (success)</span></div></div><div class="bz-btn bz-btn-green" style="margin-bottom: 6px; position: relative; overflow: hidden;"><input type="file" name="profile_photo" onchange="App.profilePhotoUpload(this);" accept="image/*" class="btn-file-input" />Загрузить фото              </div><div class="bz-btn bz-btn-default" style="margin-bottom: 6px; display: none;">Изменить миниатюру</div><div class="bz-btn bz-btn-default" style="margin-bottom: 6px; display: none;">Удалить фото</div></div><p style="text-align: center; margin-top: 30px; font-size: 14px;">Для загрузки подходят изображения с расширениями: <b>jpeg, jpg, png</b>.<br/> Максимальный размер файла: <b>2 МБ</b>.            </p></div> --><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-right: 1px solid #eee; padding-top: 10px;"><h2><i class="fa fa-cogs"></i> Security settings</h2><div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div><p id="profile_common_save_success" class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3" style="background: #f3e68e; padding: 20px; margin-bottom: 20px; border-left: 5px solid #f1d200; display: none;"></p><p id="profile_common_save_error" class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3" style="background: #ffbeaa; padding: 20px; margin-bottom: 20px; border-left: 5px solid #f16400; display: none;"></p><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','form_class'=>'form-horizontal','row_wrap'=>'settings-form-group form-group','label_class'=>'col-sm-6 control-label','input_class'=>'form-control','input_wrap'=>'col-sm-6','btn_class'=>'btn btn-primary col-sm-6 col-sm-offset-6','btn_wrapp'=>'settings-bottom clearfix','fields'=>array('Avatar'=>array('U','account/_avatar.box.tpl','skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['Account_UseAvatar']),'aName'=>array('T','Your name!!',array('name_empty'=>'Set name'),'readonly'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_LockData'],'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Account_UseName']==0)),'uLogin'=>array('X','Your login',0,'skip'=>$_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins']),'uMail'=>array('X','Your E-mail'),'aTel'=>array('T','Your phone number!! <<with country code>>',array('tel_wrong'=>'Incorrect number'),'skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['SMS_REG']),'TZ'=>array('T','Your time-zone!! <<relatively to GMT>>',array('tz_wrong'=>'Incorrect format [h:m]'),'default'=>$_smarty_tpl->tpl_vars['utz']->value,'size'=>6),98=>'','GA'=>array('U','account/_ga.box.tpl'),'GACode'=>array('T','and enter the code from mobile application',array('ga_wrong'=>'Incorrect code')),99=>'','aIPSec'=>array('S','IP-address change check',0,array(0=>'- default -',1=>'x.0.0.0',2=>'x.x.0.0',3=>'x.x.x.0',4=>'x.x.x.x')),'aTimeOut'=>array('I','Automatically log out after N minutes'),'aSQuestion'=>array('T','Checking question!!',array('secq_empty'=>'Set question','secq_short'=>"Question is too short [not less than ".($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA'])." symbols]"),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0),'size'=>40),'aSAnswer'=>array('*','Checking answer <<fill in to change>>',array('seca_empty'=>'Set answer','seca_short'=>"Answer is too short [not less than ".($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA'])." symbols]",'seqa_equal_secq'=>'Answer can not be equal to question'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0),'size'=>40),'PIN'=>array('*','Enter PIN-code!! <<to confirm changes>>',array('pin_wrong'=>'Incorrect code'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinPIN']==0),'size'=>8),'aSessIP'=>array('C','Bound session to IP-address'),'aSessUniq'=>array('C','Forbid parallel sessions'),'aNoMail'=>array('C','Do not recieve notifications','skip'=>$_smarty_tpl->tpl_vars['_cfg']->value['Msg_NoMail'])),'values'=>$_smarty_tpl->tpl_vars['user']->value,'hide_cancel'=>$_smarty_tpl->tpl_vars['user']->value['aNeedReConfig']), 0);?>
</div></div><?php if (!($_smarty_tpl->tpl_vars['_cfg']->value['Sec_ForceReConfig']&&$_smarty_tpl->tpl_vars['user']->value['aNeedReConfig'])){?><div class="settings-nav clearfix"><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_Loginza']){?><a href="<?php echo tplModuleToLink(array('module'=>'account/loginza'),$_smarty_tpl);?>
"><i class="fa fa-cogs"></i> Profiles</a><?php }?><?php if (!$_smarty_tpl->tpl_vars['_cfg']->value['Account_LockData']){?><a href="<?php echo tplModuleToLink(array('module'=>'account/change_mail'),$_smarty_tpl);?>
"><i class="fa fa-envelope"></i> Change E-mail</a><?php }?><a href="<?php echo tplModuleToLink(array('module'=>'account/change_pass'),$_smarty_tpl);?>
"><i class="fa fa-lock"></i> Change password</a></div><br><br><?php }?></div><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Sec_ForceReConfig']&&$_smarty_tpl->tpl_vars['user']->value['aNeedReConfig']){?><p class="info">Before to start working you must fill in your personal data.</p><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>