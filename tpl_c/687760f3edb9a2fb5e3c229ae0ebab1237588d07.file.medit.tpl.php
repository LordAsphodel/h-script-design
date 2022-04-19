<?php /* Smarty version Smarty-3.1.8, created on 2022-04-20 00:21:55
         compiled from "tpl/ru\medit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2664625f27f3a62bb1-99206424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '687760f3edb9a2fb5e3c229ae0ebab1237588d07' => 
    array (
      0 => 'tpl/ru\\medit.tpl',
      1 => 1510939449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2664625f27f3a62bb1-99206424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields_wrap' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_625f27f3a7c604_72285358',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_625f27f3a7c604_72285358')) {function content_625f27f3a7c604_72285358($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('medit.begin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['fields_wrap']->value){?><div class="<?php echo $_smarty_tpl->tpl_vars['fields_wrap']->value;?>
"><?php echo $_smarty_tpl->getSubTemplate ('medit.block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('medit.block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('medit.end.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>