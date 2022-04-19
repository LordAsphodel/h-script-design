<?php /* Smarty version Smarty-3.1.8, created on 2017-07-08 13:32:40
         compiled from "tpl/ru/account/admin/ip.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18075484705960b4c8707c22-47855646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3973138c90c3b4595066966ad4dc24f5e29978b0' => 
    array (
      0 => 'tpl/ru/account/admin/ip.row.tpl',
      1 => 1498731186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18075484705960b4c8707c22-47855646',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5960b4c8713b87_36857212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5960b4c8713b87_36857212')) {function content_5960b4c8713b87_36857212($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['uID'];?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['uID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['uLogin'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['aCIP'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['uLIP'];?>
</td><?php }} ?>