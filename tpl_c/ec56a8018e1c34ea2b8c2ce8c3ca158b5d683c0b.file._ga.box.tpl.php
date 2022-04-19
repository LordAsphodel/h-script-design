<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 11:45:47
         compiled from "tpl/en/account/_ga.box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1583700876597a13cdcb50a0-25725621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec56a8018e1c34ea2b8c2ce8c3ca158b5d683c0b' => 
    array (
      0 => 'tpl/en/account/_ga.box.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1583700876597a13cdcb50a0-25725621',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_597a13cdcbfeb4_66706020',
  'variables' => 
  array (
    'user' => 0,
    'GACode' => 0,
    'GAQR' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597a13cdcbfeb4_66706020')) {function content_597a13cdcbfeb4_66706020($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['user']->value['aGA']){?>
	<input name="GAKey" value="<?php echo $_smarty_tpl->tpl_vars['GACode']->value;?>
" type="hidden">
	<div class="settings-form-group form-group">							
		<label for="account_frm_$f" class="col-sm-6 control-label">To activate <a href="https://www.google.com/landing/2step/">Google Authenticator</a> use the following key:</label>
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
	To disable Google Authenticator
<?php }?>
<?php }} ?>