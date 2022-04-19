<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:58:24
         compiled from "tpl/ru/_country.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164241486359573fbe7f1a42-86418537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd8c514fe2a40c1de366d09bd86a1c3b363fc84b' => 
    array (
      0 => 'tpl/ru/_country.tpl',
      1 => 1508709650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164241486359573fbe7f1a42-86418537',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59573fbe800a15_05967034',
  'variables' => 
  array (
    'ip' => 0,
    'c' => 0,
    'countries' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59573fbe800a15_05967034')) {function content_59573fbe800a15_05967034($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("geoip2/countries.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable(giGetCountry($_smarty_tpl->tpl_vars['ip']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['c']->value=='AA'){?>Localhost<?php }else{ ?><img src="images/flags/<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
.png" width="15" height="10"> <?php echo $_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->tpl_vars['c']->value];?>
<?php }?><?php }} ?>