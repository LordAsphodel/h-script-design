<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 23:23:21
         compiled from "tpl/en/account/register/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174851607595c64a56b2412-21512067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17baedd3f2f9d3371e3e63a59a7efc881b4de5cc' => 
    array (
      0 => 'tpl/en/account/register/index.tpl',
      1 => 1508709674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174851607595c64a56b2412-21512067',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595c64a5754b23_52820961',
  'variables' => 
  array (
    '_cfg' => 0,
    'valid_ref' => 0,
    'txt_login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595c64a5754b23_52820961')) {function content_595c64a5754b23_52820961($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headerreg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Regstration'), 0);?>
<section class="page"><div class="container"><div class="row"><div class="col-xs-12"><a href="/" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i> To homepage</a><a href="/login" class="page__btn page__btn_r hidden-xs">Log in <i class="fa fa-arrow-circle-o-right"></i></a><a href="/" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a><a href="/login" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a><h2>Registration</h2></div><div class="col-md-6"><div id="uReg"><div id="uReg-cont"><h1 style="color:#FF0000;">Attention!!!</h1><b>Any investment means taking risk at your own. If you are not ready to take risk you are advised to not doing investment. Otherwise click the button "I take the risk" and registration will be continued.</b><br><div onclick="$('#uReg').hide();$.cookie('uCookie','uRhide');">I take the risk</div><div onclick="location.href='/'">I do NOT take the risk</div></div></div><?php if (isset($_GET['done'])){?><h2>Registration is complete!</h2><p class="info">You are able to <a href="<?php echo tplModuleToLink(array('module'=>'account/login'),$_smarty_tpl);?>
">log into</a> your account.</p><?php }elseif(isset($_GET['need_confirm'])){?><h2>Registration is NOT complete!</h2><p class="info">In order to complete registration you must confirm your E-mail.<br>To manage this <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">enter confirmation code</a><br>or follow the link that were sent to your E-mail.<br><br>If there is no letter with your confirmation code try to <a href="<?php echo tplModuleToLink(array('module'=>'account/change_mail'),$_smarty_tpl);?>
">change E-mail</a></p><?php }elseif(isset($_GET['need_confirm_sms'])){?><h2>Registration is NOT complete!</h2><p class="info">In order to complete registration you must confirm your phone number.<br>To manage this <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">enter confirmation code</a><br>that was sent to your phone number.</p><?php }elseif($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==0){?><h2>Registration is suspended!</h2><p class="info">Registration is temporary suspended.<br>If  you have any questions <a href="<?php echo tplModuleToLink(array('module'=>'message/support'),$_smarty_tpl);?>
">contact us</a></p><?php }else{ ?><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'E-mail','Login'), null, 0);?><?php if (($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==2)&&!$_smarty_tpl->tpl_vars['valid_ref']->value){?><h2>Attention!</h2><p class="info">Registration is <b>only</b> available <a href="<?php echo tplModuleToLink(array('module'=>'udp/about'),$_smarty_tpl);?>
">by invitation</a>.<br>You should visit our site<br>using special refferal link of an existing member or set his <?php echo $_smarty_tpl->tpl_vars['txt_login']->value;?>
 to register.</p><?php }elseif($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==3){?><h2>Attention!</h2><p class="info">Registration is <b>only</b> available <a href="<?php echo tplModuleToLink(array('module'=>'udp/about'),$_smarty_tpl);?>
">by invitation</a>.<br>You must enter invitation code to register.</p><?php }?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_Loginza']&&(($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==1)||(($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==2)&&$_smarty_tpl->tpl_vars['valid_ref']->value))&&($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0)){?><?php echo $_smarty_tpl->getSubTemplate ('account/loginza/box.small.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><h3>or</h3><?php }?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'account/register'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==2){?><?php echo "!!";?><?php }?><?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins']){?><?php echo " <<enter E-mail>>";?><?php }?><?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'udp/rules'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'form'=>'register_frm','form_class'=>'form','row_wrap'=>'form__row','label_class'=>'form__label','btn_class'=>'form__btn','fields'=>array('aName'=>array('T','Your name',array('name_empty'=>'Set you name'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Account_UseName']!=1)),'uLogin'=>array('T','Set your login!!',array('login_empty'=>'Your login','login_short'=>"Login is too short [not less than ".($_smarty_tpl->tpl_vars['_cfg']->value['Account_MinLogin'])." symbols]",'login_wrong'=>'Incorrect login format','login_used'=>'Login is used'),'skip'=>$_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'comment'=>' <span id="login_check" class="err"></span>'),'uMail'=>array('T',valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegConfirm'],'E-mail!! <<A confirmation will be sent>>','E-mail!!'),array('mail_empty'=>'Set E-mail','mail_wrong'=>'Incorrect E-mail','mail_used'=>'E-mail is used'),'comment'=>' <span id="mail_check" class="err"></span>'),'uPass'=>array('*','Set password!!',array('pass_empty'=>'Set password','pass_short'=>"Password is too short [not less than ".($_smarty_tpl->tpl_vars['_cfg']->value['Account_MinPass'])." symbols]",'pass_wrong'=>'Password does not match format')),'Pass2'=>array('*','Retype password!!',array('pass_not_equal'=>'Passwords does not match')),'aTel'=>array('T','Phone number!! <<country code>>',array('tel_wrong'=>'Wrong format'),'skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['SMS_REG']),'uRef'=>array('T',"Your refferer".$_tmp2.$_tmp3,array('ref_empty'=>"Set ".($_smarty_tpl->tpl_vars['txt_login']->value),'ref_not_found'=>($_smarty_tpl->tpl_vars['txt_login']->value)." is not found"),'default'=>$_SESSION['_ref'],'skip'=>(($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==3)||!$_smarty_tpl->tpl_vars['_cfg']->value['Ref_Word']),'readonly'=>$_smarty_tpl->tpl_vars['valid_ref']->value),'Invite'=>array('T','Invitation code!!',array('inv_empty'=>'Enter code','inv_not_found'=>'Incorrect code','inv_used'=>'Code is already used'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']!=3)),'aSQuestion'=>array('T','Checking question!!',array('secq_empty'=>'Set question','secq_short'=>"Question is too short [not less than ".($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA'])." symbols]"),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0),'size'=>40),'aSAnswer'=>array('T','Checking answer!!',array('seca_empty'=>'Set answer','seca_short'=>"Answer is too short [not less than ".($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA'])." symbols]",'seqa_equal_secq'=>'Answer can not be equal to question'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0),'size'=>40),'Agree'=>array('CC',"I accept <a href=\"".$_tmp4."\" target=\"_blank\">regulations</a> of the project",array('must_agree'=>'You must accept the regulations of the project'))),'errors'=>array('multi_reg'=>'Multiregistration is forbidden'),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_RegCaptcha'],'btn_text'=>'Sign up'), 0);?>
<?php }?><?php if (!$_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins']){?><script type="text/javascript">function chkLogin(){$('#register_frm_uLogin').removeClass('error');$('#login_check').html('');$.ajax({type: 'POST',url: 'ajax',data: 'module=account/register&do=chklogin&login='+encodeURIComponent($('#register_frm_uLogin').val()),success:function(ex){if (ex == 1){$('#register_frm_uLogin').addClass('error');$('#login_check').html('занят');}}});}tid2=0;$('#register_frm_uLogin').keypress(function(){clearTimeout(tid2);tid2=setTimeout(function(){ chkLogin(); }, 1000);});chkLogin();</script><?php }?><script type="text/javascript">function chkMail(){$('#register_frm_uMail').removeClass('error');$('#mail_check').html('');$.ajax({type: 'POST',url: 'ajax',data: 'module=account/register&do=chkmail&mail='+encodeURIComponent($('#register_frm_uMail').val()),success:function(ex){if (ex == 1){$('#register_frm_uMail').addClass('error');$('#mail_check').html('занят');}}});}tid=0;$('#register_frm_uMail').keypress(function(){clearTimeout(tid);tid=setTimeout(function(){ chkMail(); }, 1000);});chkMail();</script></div><div class="col-md-6"><div class="scroll-block scroll"><h3><b>READ ME</b></h3><b> Before regestering on our site please read <a href="<?php echo '/rules';?>
">regulations</a> of the project. </b><br></div></div></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footerreg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>