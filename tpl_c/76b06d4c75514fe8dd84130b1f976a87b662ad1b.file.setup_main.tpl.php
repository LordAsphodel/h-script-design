<?php /* Smarty version Smarty-3.1.8, created on 2017-06-30 18:23:44
         compiled from "tpl/en/system/admin/setup_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49543587559566d004ef7b5-92882010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76b06d4c75514fe8dd84130b1f976a87b662ad1b' => 
    array (
      0 => 'tpl/en/system/admin/setup_main.tpl',
      1 => 1498731180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49543587559566d004ef7b5-92882010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
    'ip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59566d0051db06_07052502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59566d0051db06_07052502')) {function content_59566d0051db06_07052502($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Main'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['cfg']->value['NeedReConfig']){?><p class="info">Check all script settings</p><?php }?><?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('_country.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('ip'=>$_smarty_tpl->tpl_vars['ip']->value), 0);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('SiteName'=>array('T','Site name'),'ForceCharset'=>array('C','Force header "utf-8 encoding" <<for some hostings>>'),'AdminMail'=>array('T','Admin e-mail'),'NotifyMail'=>array('T','Notification center e-mail'),'LockSite'=>array('C','Technical work <<login prohibition>>'),'OutIP'=>array('X','Outgoing server IP','default'=>($_smarty_tpl->tpl_vars['ip']->value)." ".$_tmp1))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>