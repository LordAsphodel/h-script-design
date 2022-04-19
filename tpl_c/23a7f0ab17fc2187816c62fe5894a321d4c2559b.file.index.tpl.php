<?php /* Smarty version Smarty-3.1.8, created on 2017-10-25 23:09:06
         compiled from "tpl/en/refsys/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1677195229597d65545fb357-11543761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23a7f0ab17fc2187816c62fe5894a321d4c2559b' => 
    array (
      0 => 'tpl/en/refsys/index.tpl',
      1 => 1508709658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1677195229597d65545fb357-11543761',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_597d655466ab88_49294531',
  'variables' => 
  array (
    'refurl' => 0,
    'reflogin' => 0,
    'upref' => 0,
    'refs' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d655466ab88_49294531')) {function content_597d655466ab88_49294531($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Referral system'), 0);?>
<div class="page-heading animateed fadeInDown"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Referral system</h1></div><div class="clear"></div></div><div class="box-info full animated fadeInDown"><h2 class="text-left"><i class="fa fa-history"></i> Your referral link - <a href="<?php echo $_smarty_tpl->tpl_vars['refurl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['refurl']->value;?>
</a></h2><?php if ($_smarty_tpl->tpl_vars['reflogin']->value){?><h2 class="text-left"><i class="fa fa-history"></i> Your referrer - <a href='javascript:void(0);'><span class='open_popup' rel='popup1'><?php echo $_smarty_tpl->tpl_vars['reflogin']->value;?>
</span></a></h2><?php }?><style>	.overlay { display:none; position:fixed; z-index:999; opacity:0.5; filter:alpha(opacity=50); top:0; right:0; left:0; bottom:0; background:#000; }.popup  { display:none; position:fixed; border:3px solid #999; background:#fff; width:394px; height:194px; top:50%; left:50%; margin:-100px 0 0 -100px; z-index:1000;  border-radius:10px; padding:30px;}.close { display:block; width:12px; text-align:center; cursor:pointer;  height:12px; line-height:12px; background:#fff; color:red; border:3px solid red;  position:absolute; top:10px; right:10px; text-decoration:none; border-radius:3px; font-size:10px; }</style><div class="overlay"></div><div class="popup" id="popup1"><span class="close">X</span><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['reflogin']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('_usericon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('user'=>$_smarty_tpl->tpl_vars['upref']->value), 0);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['upref']->value['aName'];?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('fields'=>array('InvLogin'=>array('X','Your referrer',0,$_tmp1,'skip'=>!$_smarty_tpl->tpl_vars['reflogin']->value),'InvAvatar'=>array('X',$_tmp2),'InvName'=>array('X','Name',0,$_tmp3,'skip'=>!$_smarty_tpl->tpl_vars['upref']->value),'InvE-mail'=>array('X','E-mail:',0,"<a href=\"mailto:".($_smarty_tpl->tpl_vars['upref']->value['uMail'])."\" >".($_smarty_tpl->tpl_vars['upref']->value['uMail'])."</a>")),'btn_text'=>' '), 0);?>
</div><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('fields'=>array('Refs'=>array('U','refsys/_refs.tpl','skip'=>!$_smarty_tpl->tpl_vars['refs']->value)),'btn_text'=>' '), 0);?>
<?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==3){?><h2>Invitations</h2><?php }?><?php }?><script> $('.open_popup').click(function() {var popup_id = $('#' + $(this).attr("rel"));$(popup_id).show();$('.overlay').show();});$('.popup .close, .overlay').click(function() {$('.overlay, .popup').hide();});</script></div><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>