<?php /* Smarty version Smarty-3.1.8, created on 2017-10-25 15:00:17
         compiled from "tpl/en/menu.element.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133198826359566d005f3903-14569420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3380f1dfbef7f8eba60e0474d200ec2840aadc42' => 
    array (
      0 => 'tpl/en/menu.element.tpl',
      1 => 1508709644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133198826359566d005f3903-14569420',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59566d006203a7_74356360',
  'variables' => 
  array (
    'module' => 0,
    'tpl_module' => 0,
    'tpl_vmodule' => 0,
    'current' => 0,
    'params' => 0,
    'text' => 0,
    'text2' => 0,
    'count' => 0,
    'submenu' => 0,
    'sm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59566d006203a7_74356360')) {function content_59566d006203a7_74356360($_smarty_tpl) {?><li<?php if (($_smarty_tpl->tpl_vars['module']->value==$_smarty_tpl->tpl_vars['tpl_module']->value)||($_smarty_tpl->tpl_vars['module']->value==$_smarty_tpl->tpl_vars['tpl_vmodule']->value)||$_smarty_tpl->tpl_vars['current']->value){?> class="current"<?php }?>><a href="<?php echo tplModuleToLink(array('module'=>$_smarty_tpl->tpl_vars['module']->value),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['params']->value){?>?<?php echo $_smarty_tpl->tpl_vars['params']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<?php if ($_smarty_tpl->tpl_vars['text2']->value){?><span><?php echo $_smarty_tpl->tpl_vars['text2']->value;?>
</span><?php }?><?php if ($_smarty_tpl->tpl_vars['count']->value>0){?><b><sup><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</sup></b><?php }?></a><?php if ($_smarty_tpl->tpl_vars['submenu']->value){?><ul><?php  $_smarty_tpl->tpl_vars['sm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['submenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sm']->key => $_smarty_tpl->tpl_vars['sm']->value){
$_smarty_tpl->tpl_vars['sm']->_loop = true;
?><li><a href="<?php echo tplModuleToLink(array('module'=>$_smarty_tpl->tpl_vars['sm']->value[0]),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['sm']->value[1];?>
</a></li><?php } ?></ul><?php }?></li><?php }} ?>