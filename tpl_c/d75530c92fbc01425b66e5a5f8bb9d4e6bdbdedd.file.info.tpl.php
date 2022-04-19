<?php /* Smarty version Smarty-3.1.8, created on 2017-10-25 15:00:17
         compiled from "tpl/en/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63361668859566d00623062-13376985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd75530c92fbc01425b66e5a5f8bb9d4e6bdbdedd' => 
    array (
      0 => 'tpl/en/info.tpl',
      1 => 1508709643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63361668859566d00623062-13376985',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59566d0064d314_93825430',
  'variables' => 
  array (
    '_info' => 0,
    'info_msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59566d0064d314_93825430')) {function content_59566d0064d314_93825430($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_info']->value){?><?php echo $_smarty_tpl->getSubTemplate ('info.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]]){?><div id="info_box" class="flash_<?php if (substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)=='*'){?>error<?php }else{ ?>info<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]];?>
</b><?php if ((substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)=='*')&&!is_array($_smarty_tpl->tpl_vars['_info']->value[1])){?><br><?php echo $_smarty_tpl->tpl_vars['info_msg']->value['*ErrorCode'];?>
 <?php echo $_smarty_tpl->tpl_vars['_info']->value[1];?>
<?php }?></div><?php if (substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)!='*'){?><script type="text/javascript">setTimeout(function(){$('#info_box').fadeOut('slow')},5000);</script><?php }?><?php }?><?php }?><?php }} ?>