<?php /* Smarty version Smarty-3.1.8, created on 2022-04-20 00:21:55
         compiled from "tpl/ru\edit.info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27430625f27f3af7b79-50706876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e3e89178b865cc6d4f5901ec2d2a58877045b7a' => 
    array (
      0 => 'tpl/ru\\edit.info.tpl',
      1 => 1510939451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27430625f27f3af7b79-50706876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_info' => 0,
    'info_msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_625f27f3b261d9_77800662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_625f27f3b261d9_77800662')) {function content_625f27f3b261d9_77800662($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_info']->value){?><?php echo $_smarty_tpl->getSubTemplate ('info.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]]){?><div id="edit_<?php echo $_smarty_tpl->tpl_vars['_info']->value[0];?>
_info_box" class="flash_edit_<?php if (substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)=='*'){?>error<?php }else{ ?>info<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]];?>
</b></div><?php }?><?php }?><?php }} ?>