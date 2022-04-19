<?php /* Smarty version Smarty-3.1.8, created on 2017-09-26 19:22:58
         compiled from "tpl/ru/message/outbox.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5571415759ca7ee267c406-30610080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b783061e2502fb090e9c61427ecb525ac052241f' => 
    array (
      0 => 'tpl/ru/message/outbox.row.tpl',
      1 => 1504512327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5571415759ca7ee267c406-30610080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ca7ee26c27d9_06665881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ca7ee26c27d9_06665881')) {function content_59ca7ee26c27d9_06665881($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/c/cr21825/public_html/smarty3/plugins/modifier.truncate.php';
?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['mID'];?>
</td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['mTS'];?>
</small></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['mTo'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['mTopic'];?>
</td><td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['l']->value['mText'],100);?>
</td><?php }} ?>