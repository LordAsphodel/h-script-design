<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 23:23:13
         compiled from "tpl/en/medit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143767366259ad128a6a1496-18530130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6a9329806acfb000b4f432d180c073e843ee46b' => 
    array (
      0 => 'tpl/en/medit.tpl',
      1 => 1508709644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143767366259ad128a6a1496-18530130',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad128a6ac9e5_10283399',
  'variables' => 
  array (
    'fields_wrap' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad128a6ac9e5_10283399')) {function content_59ad128a6ac9e5_10283399($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('medit.begin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['fields_wrap']->value){?><div class="<?php echo $_smarty_tpl->tpl_vars['fields_wrap']->value;?>
"><?php echo $_smarty_tpl->getSubTemplate ('medit.block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('medit.block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('medit.end.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>