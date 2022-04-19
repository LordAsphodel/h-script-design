<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:08:18
         compiled from "tpl/ru/links.element.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58033109159566cf362dc38-81445703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0b5f1cd8914a63989057aa21995228f05a1c14c' => 
    array (
      0 => 'tpl/ru/links.element.tpl',
      1 => 1508709648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58033109159566cf362dc38-81445703',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59566cf364cf57_88843797',
  'variables' => 
  array (
    'module' => 0,
    'params' => 0,
    'tpl_module' => 0,
    'tpl_vmodule' => 0,
    'current' => 0,
    'text' => 0,
    'text2' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59566cf364cf57_88843797')) {function content_59566cf364cf57_88843797($_smarty_tpl) {?><a href="<?php echo tplModuleToLink(array('module'=>$_smarty_tpl->tpl_vars['module']->value),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['params']->value){?>?<?php echo $_smarty_tpl->tpl_vars['params']->value;?>
<?php }?>"<?php if (($_smarty_tpl->tpl_vars['module']->value==$_smarty_tpl->tpl_vars['tpl_module']->value)||($_smarty_tpl->tpl_vars['module']->value==$_smarty_tpl->tpl_vars['tpl_vmodule']->value)||$_smarty_tpl->tpl_vars['current']->value){?> class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<?php if ($_smarty_tpl->tpl_vars['text2']->value){?><span><?php echo $_smarty_tpl->tpl_vars['text2']->value;?>
</span><?php }?><?php if ($_smarty_tpl->tpl_vars['count']->value>0){?><b><sup><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</sup></b><?php }?></a><?php }} ?>