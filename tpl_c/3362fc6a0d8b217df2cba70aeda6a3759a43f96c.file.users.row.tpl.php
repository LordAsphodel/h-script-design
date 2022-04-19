<?php /* Smarty version Smarty-3.1.8, created on 2017-09-05 10:39:21
         compiled from "tpl/en/account/admin/users.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47476796259ae54a9eb4069-00123549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3362fc6a0d8b217df2cba70aeda6a3759a43f96c' => 
    array (
      0 => 'tpl/en/account/admin/users.row.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47476796259ae54a9eb4069-00123549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
    'usr_statuses' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ae54a9ed3ab6_09601991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ae54a9ed3ab6_09601991')) {function content_59ae54a9ed3ab6_09601991($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['uID'];?>
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