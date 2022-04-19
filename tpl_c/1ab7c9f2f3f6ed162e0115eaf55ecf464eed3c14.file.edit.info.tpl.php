<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 23:23:13
         compiled from "tpl/en/edit.info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26460798559566d0088b222-86044027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ab7c9f2f3f6ed162e0115eaf55ecf464eed3c14' => 
    array (
      0 => 'tpl/en/edit.info.tpl',
      1 => 1508709642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26460798559566d0088b222-86044027',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59566d008a5e96_87006575',
  'variables' => 
  array (
    '_info' => 0,
    'info_msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59566d008a5e96_87006575')) {function content_59566d008a5e96_87006575($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_info']->value){?><?php echo $_smarty_tpl->getSubTemplate ('info.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]]){?><div id="edit_<?php echo $_smarty_tpl->tpl_vars['_info']->value[0];?>
_info_box" class="flash_edit_<?php if (substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)=='*'){?>error<?php }else{ ?>info<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]];?>
</b></div><?php }?><?php }?><?php }} ?>