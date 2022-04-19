<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:08:18
         compiled from "tpl/ru/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190407999559566cf36f19b4-87388280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b19b37d4f0ebc022d412da67f22e869910e94642' => 
    array (
      0 => 'tpl/ru/info.tpl',
      1 => 1508709648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190407999559566cf36f19b4-87388280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59566cf371f5a9_45015271',
  'variables' => 
  array (
    '_info' => 0,
    'info_msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59566cf371f5a9_45015271')) {function content_59566cf371f5a9_45015271($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_info']->value){?><?php echo $_smarty_tpl->getSubTemplate ('info.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]]){?><div id="info_box" class="flash_<?php if (substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)=='*'){?>error<?php }else{ ?>info<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['info_msg']->value[$_smarty_tpl->tpl_vars['_info']->value[0]];?>
</b><?php if ((substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)=='*')&&!is_array($_smarty_tpl->tpl_vars['_info']->value[1])){?><br><?php echo $_smarty_tpl->tpl_vars['info_msg']->value['*ErrorCode'];?>
 <?php echo $_smarty_tpl->tpl_vars['_info']->value[1];?>
<?php }?></div><?php if (substr($_smarty_tpl->tpl_vars['_info']->value[0],0,1)!='*'){?><script type="text/javascript">setTimeout(function(){$('#info_box').fadeOut('slow')},5000);</script><?php }?><?php }?><?php }?><?php }} ?>