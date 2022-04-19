<?php /* Smarty version Smarty-3.1.8, created on 2017-09-05 10:28:25
         compiled from "tpl/en/admin/module.block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166807979059ae521941e254-04272635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e88421602bc526a7c7c02f4e867851e5316767b' => 
    array (
      0 => 'tpl/en/admin/module.block.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166807979059ae521941e254-04272635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modules' => 0,
    'modules_cat' => 0,
    'm' => 0,
    'n' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ae521943ca14_29668542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ae521943ca14_29668542')) {function content_59ae521943ca14_29668542($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['modules']->value){?><h1><?php echo exValue('Others',$_smarty_tpl->tpl_vars['modules_cat']->value);?>
</h1><table class="formatTable"><tr><?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cc']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['m']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cc']['iteration']++;
?><?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['cc']['iteration']%6)==0){?></tr><tr><?php }?><td width="100px" align="center"><a href="<?php echo tplModuleToLink(array('module'=>$_smarty_tpl->tpl_vars['m']->value),$_smarty_tpl);?>
"><img src="images/module.png"><br><?php echo $_smarty_tpl->tpl_vars['n']->value;?>
</a></td><?php } ?></tr></table><br><?php }?>
<?php }} ?>