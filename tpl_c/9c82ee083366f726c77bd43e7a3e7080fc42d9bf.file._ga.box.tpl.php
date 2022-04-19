<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:08:01
         compiled from "tpl/ru/account/_ga.box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20720320455958d300731c12-81200552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c82ee083366f726c77bd43e7a3e7080fc42d9bf' => 
    array (
      0 => 'tpl/ru/account/_ga.box.tpl',
      1 => 1508709661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20720320455958d300731c12-81200552',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958d30073b1b6_19066270',
  'variables' => 
  array (
    'user' => 0,
    'GACode' => 0,
    'GAQR' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958d30073b1b6_19066270')) {function content_5958d30073b1b6_19066270($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['user']->value['aGA']){?>
	<input name="GAKey" value="<?php echo $_smarty_tpl->tpl_vars['GACode']->value;?>
" type="hidden">
	<div class="settings-form-group form-group">							
		<label for="account_frm_$f" class="col-sm-6 control-label">Для активиции <a href="https://www.google.com/landing/2step/" target="_blank">Google Authenticator</a> используйте ключ:</label>
		<div class="col-sm-6">
			<span class="form-control"><?php echo $_smarty_tpl->tpl_vars['GACode']->value;?>
</span>
		</div>
	</div>
	<div class="settings-form-group form-group">
		<div class="col-sm-6 col-sm-offset-6">	
			<img class="pull-right" src="<?php echo $_smarty_tpl->tpl_vars['GAQR']->value;?>
">
		</div>
	</div>
<?php }else{ ?>
	Для отключения Google Authenticator
<?php }?><?php }} ?>