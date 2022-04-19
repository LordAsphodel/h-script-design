<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 17:08:03
         compiled from "tpl/ru/account/admin/users.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20017477865958a4fa569fd5-02585795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e35f93f898418d2f716b98664ef737febb9467f0' => 
    array (
      0 => 'tpl/ru/account/admin/users.row.tpl',
      1 => 1508709684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20017477865958a4fa569fd5-02585795',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958a4fa588e43_72452512',
  'variables' => 
  array (
    'l' => 0,
    'usr_statuses' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958a4fa588e43_72452512')) {function content_5958a4fa588e43_72452512($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['uID'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['uGroup'];?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['uID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['uLogin'];?>
</a></td><td><a href="<?php echo tplModuleToLink(array('module'=>'account/admin/user2'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['uID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['aName'];?>
</a></td><td><a href="<?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['uID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['uMail'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['usr_statuses']->value[$_smarty_tpl->tpl_vars['l']->value['uState']];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['uLevel'];?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['uRef'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['RefLogin'];?>
</a></td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['l']->value['uBal'],1,-1);?>
</td><?php }} ?>