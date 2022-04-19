<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 12:20:39
         compiled from "tpl/ru/message/index.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195121492859ad1ae77bcee4-12351099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7af86d81d1e941ad112b6575d631295650aea0f' => 
    array (
      0 => 'tpl/ru/message/index.row.tpl',
      1 => 1504512327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195121492859ad1ae77bcee4-12351099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad1ae77ed278_33646464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad1ae77ed278_33646464')) {function content_59ad1ae77ed278_33646464($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['bID'];?>
</td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['mTS'];?>
</small></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['uLogin'];?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'message/show'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['bID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['mTopic'];?>
</a></td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['bRTS'];?>
</small></td><?php }} ?>