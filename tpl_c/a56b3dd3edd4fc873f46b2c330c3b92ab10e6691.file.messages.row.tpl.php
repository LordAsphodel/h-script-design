<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 19:46:28
         compiled from "tpl/en/message/admin/messages.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122778893159ad8364229557-43303328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a56b3dd3edd4fc873f46b2c330c3b92ab10e6691' => 
    array (
      0 => 'tpl/en/message/admin/messages.row.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122778893159ad8364229557-43303328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad83642439f3_25191540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad83642439f3_25191540')) {function content_59ad83642439f3_25191540($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/c/cr21825/public_html/smarty3/plugins/modifier.truncate.php';
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