<?php /* Smarty version Smarty-3.1.8, created on 2022-04-20 00:19:57
         compiled from "tpl/ru\links.element.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5361625f277ddbdb65-10420754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b77086534d9c65621bb08e2cd08087bc33dcceb5' => 
    array (
      0 => 'tpl/ru\\links.element.tpl',
      1 => 1505759650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5361625f277ddbdb65-10420754',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_625f277ddf5828_01162397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_625f277ddf5828_01162397')) {function content_625f277ddf5828_01162397($_smarty_tpl) {?><a href="<?php echo tplModuleToLink(array('module'=>$_smarty_tpl->tpl_vars['module']->value),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['params']->value){?>?<?php echo $_smarty_tpl->tpl_vars['params']->value;?>
<?php }?>"<?php if (($_smarty_tpl->tpl_vars['module']->value==$_smarty_tpl->tpl_vars['tpl_module']->value)||($_smarty_tpl->tpl_vars['module']->value==$_smarty_tpl->tpl_vars['tpl_vmodule']->value)||$_smarty_tpl->tpl_vars['current']->value){?> class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<?php if ($_smarty_tpl->tpl_vars['text2']->value){?><span><?php echo $_smarty_tpl->tpl_vars['text2']->value;?>
</span><?php }?><?php if ($_smarty_tpl->tpl_vars['count']->value>0){?><b><sup><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</sup></b><?php }?></a><?php }} ?>