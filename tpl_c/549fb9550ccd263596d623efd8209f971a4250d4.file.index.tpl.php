<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 21:26:28
         compiled from "tpl/en/confirm/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1496846896595c64aa548396-62686640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '549fb9550ccd263596d623efd8209f971a4250d4' => 
    array (
      0 => 'tpl/en/confirm/index.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1496846896595c64aa548396-62686640',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595c64aa571c15_96051878',
  'variables' => 
  array (
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595c64aa571c15_96051878')) {function content_595c64aa571c15_96051878($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Confirmation'), 0);?>
<h1>Operation confirmation</h1><?php if (isset($_GET['done'])){?><h2>Operation is complete!</h2><?php }else{ ?><?php if (isset($_GET['need_confirm_sms'])){?><h2>Operation is NOT complete!</h2><p class="info">In order to complete operation you must enter confirmation code<br>that was sent to your phone number.</p><?php }?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'fields'=>array('Code'=>array('T','Enter code!!',array('code_empty'=>'Enter code','code_not_found'=>'Incorrect code','code_used'=>'Code is expired','code_expired'=>'Code activation period is expired','dif_ip'=>'Confirmation using your IP-address is impossible','oper_wrong'=>'Incorrect operation','oper_unkn'=>'Unknown operation'),'size'=>40,'default'=>$_GET['code'])),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Confirm_Captcha'],'btn_text'=>'Complete'), 0);?>
<?php }?>
<?php }} ?>