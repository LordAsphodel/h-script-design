<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 19:29:57
         compiled from "tpl/ru/account/admin/ip_stat.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1681382004595d28f7774de2-76098912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99da1a41524c9e8c68f5d2158e7114172aaf99fe' => 
    array (
      0 => 'tpl/ru/account/admin/ip_stat.row.tpl',
      1 => 1508709683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1681382004595d28f7774de2-76098912',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595d28f778efd4_58691647',
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d28f778efd4_58691647')) {function content_595d28f778efd4_58691647($_smarty_tpl) {?><td><a href="<?php echo tplModuleToLink(array('module'=>'account/admin/ip'),$_smarty_tpl);?>
?ip=<?php echo $_smarty_tpl->tpl_vars['l']->value['ip'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['ip'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['auth'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['reg'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['sum'];?>
</td><?php }} ?>