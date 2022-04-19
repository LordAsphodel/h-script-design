<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:07:44
         compiled from "tpl/ru/medit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21469089205959adffa242f9-01612759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f95b66c848a6858a2b7bf9dfde1032bde07b2f8a' => 
    array (
      0 => 'tpl/ru/medit.tpl',
      1 => 1508709649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21469089205959adffa242f9-01612759',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5959adffa33429_74941487',
  'variables' => 
  array (
    'fields_wrap' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959adffa33429_74941487')) {function content_5959adffa33429_74941487($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('medit.begin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['fields_wrap']->value){?><div class="<?php echo $_smarty_tpl->tpl_vars['fields_wrap']->value;?>
"><?php echo $_smarty_tpl->getSubTemplate ('medit.block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('medit.block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('medit.end.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>