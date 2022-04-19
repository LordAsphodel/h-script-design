<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 00:11:24
         compiled from "tpl/ru/message/admin/messages.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1734936385595ca8ad30aeb8-42211370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bbd3d974783f09ded4ebe4e5fab7f200ae0c0ce' => 
    array (
      0 => 'tpl/ru/message/admin/messages.row.tpl',
      1 => 1508709691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1734936385595ca8ad30aeb8-42211370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595ca8ad32c417_24093681',
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595ca8ad32c417_24093681')) {function content_595ca8ad32c417_24093681($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/admin/web/fxstarprofit.pw/public_html/smarty3/plugins/modifier.truncate.php';
?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['mID'];?>
</td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['mTS'];?>
</small></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['uLogin'];?>
<br><small><?php echo $_smarty_tpl->tpl_vars['l']->value['mMail'];?>
</small></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['mToCnt']>1){?><?php echo $_smarty_tpl->tpl_vars['l']->value['mToCnt'];?>
: <?php }?><small><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['l']->value['To'],120);?>
</small></td><td><a href="<?php echo tplModuleToLink(array('module'=>'message/admin/message'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['mID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['mTopic'];?>
</a></td><td><small><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['l']->value['mText'],120);?>
</small></td><?php }} ?>