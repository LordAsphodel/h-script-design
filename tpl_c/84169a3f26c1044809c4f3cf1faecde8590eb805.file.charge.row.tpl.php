<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 16:36:13
         compiled from "tpl/ru/depo/admin/charge.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1167886138595cfe4d2deed5-90507250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84169a3f26c1044809c4f3cf1faecde8590eb805' => 
    array (
      0 => 'tpl/ru/depo/admin/charge.row.tpl',
      1 => 1508709689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1167886138595cfe4d2deed5-90507250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595cfe4d2f3218_50781811',
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595cfe4d2f3218_50781811')) {function content_595cfe4d2f3218_50781811($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pID'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['pHidden']){?>*<?php }?></td><td><a href="<?php echo tplModuleToLink(array('module'=>'depo/admin/plan'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['pID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['pName'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pMin'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pMax'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pDays'];?>
</td><td><input name="p[<?php echo $_smarty_tpl->tpl_vars['l']->value['pID'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['l']->value['pPerc'];?>
" type="text" size="5"></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['cnt'];?>
</td><?php }} ?>