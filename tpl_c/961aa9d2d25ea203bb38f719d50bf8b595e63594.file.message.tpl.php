<?php /* Smarty version Smarty-3.1.8, created on 2017-09-05 10:33:30
         compiled from "tpl/en/message/admin/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146120844759ae534a61c877-49145612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '961aa9d2d25ea203bb38f719d50bf8b595e63594' => 
    array (
      0 => 'tpl/en/message/admin/message.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146120844759ae534a61c877-49145612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'el' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ae534a69c4b6_47383355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ae534a69c4b6_47383355')) {function content_59ae534a69c4b6_47383355($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Message'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['el']->value['mID']){?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Message','fields'=>array('uLogin'=>array('T','Sender','skip'=>!$_smarty_tpl->tpl_vars['el']->value['uLogin'],'readonly'=>true),'mMail'=>array('T','Sender E-mail','skip'=>!$_smarty_tpl->tpl_vars['el']->value['mMail'],'readonly'=>true),'To1'=>array('T','Recipient','default'=>$_smarty_tpl->tpl_vars['el']->value['mTo'],'skip'=>($_smarty_tpl->tpl_vars['el']->value['mToCnt']!=1),'readonly'=>true),'mTo'=>array('A','Recipients<br><<* - to all>>','size'=>30,'skip'=>($_smarty_tpl->tpl_vars['el']->value['mToCnt']==1),'readonly'=>true),'mAttn'=>array('CC','Important','readonly'=>true),'mTopic'=>array('L','Topic','size'=>50,'readonly'=>true),'mText'=>array('W','Text','size'=>15,'readonly'=>true)),'values'=>$_smarty_tpl->tpl_vars['el']->value,'btn_text'=>' '), 0);?>
<?php if ($_smarty_tpl->tpl_vars['el']->value['mToCnt']==1){?><a href="<?php echo tplModuleToLink(array('module'=>'message/admin/message'),$_smarty_tpl);?>
?add&re=<?php echo $_smarty_tpl->tpl_vars['el']->value['mID'];?>
" class="button-green">Reply</a><br><?php }?><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'New message','fields'=>array('Re'=>array(),'uLogin'=>array('T','Sender',array('user_not_found'=>'User is not found'),'default'=>valueIf(!$_smarty_tpl->tpl_vars['el']->value['mMail'],exValue($_smarty_tpl->tpl_vars['user']->value['uLogin'],$_GET['from']))),'mMail'=>array('T','Sender E-mail',array('mail_wrong'=>'Incorrect E-mail')),'mTo'=>array('A','Recipients!!<br><<One line is equal to one recipient<br>To send via E-mail set prefix "mailto:">>',array('to_empty'=>'Set recipients','to_wrong'=>"Recipients are not found: [".($_smarty_tpl->tpl_vars['wrusrs']->value)."]"),'size'=>30,'default'=>$_GET['to'],'comment'=>$_smarty_tpl->tpl_vars['el']->value['mLang']),'mAttn'=>array('CC','Important'),'Feed'=>array('CC','Mailing List'),'mTopic'=>array('L','Topic!!',array('topic_empty'=>'Set topic'),'size'=>50),'mText'=>array('Y','Text!!',array('text_empty'=>'Set text'),'size'=>15)),'values'=>$_smarty_tpl->tpl_vars['el']->value,'btn_text'=>' ','btns'=>array('send'=>'Send')), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>