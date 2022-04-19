<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 11:45:38
         compiled from "tpl/en/message/index.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172420246759ad12b280dc22-39681651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d454fa8f3bc6ed01df9997c04627d97e4b935de' => 
    array (
      0 => 'tpl/en/message/index.row.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172420246759ad12b280dc22-39681651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad12b281aff8_74668825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad12b281aff8_74668825')) {function content_59ad12b281aff8_74668825($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['bID'];?>
</td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['mTS'];?>
</small></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['uLogin'];?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'message/show'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['bID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['mTopic'];?>
</a></td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['bRTS'];?>
</small></td><?php }} ?>