<?php /* Smarty version Smarty-3.1.8, created on 2017-10-24 11:35:39
         compiled from "tpl/ru/news/admin/newses.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21302881755959e6a67f8d73-94199317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '429b883507bd34c006988f7d0c8e2f21111641a0' => 
    array (
      0 => 'tpl/ru/news/admin/newses.row.tpl',
      1 => 1508709692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21302881755959e6a67f8d73-94199317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5959e6a681ea81_94122287',
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959e6a681ea81_94122287')) {function content_5959e6a681ea81_94122287($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/admin/web/fxstarprofit.pw/public_html/smarty3/plugins/modifier.truncate.php';
?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['nID'];?>
</td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['nTS'];?>
</small></td><td><a href="<?php echo tplModuleToLink(array('module'=>'news/admin/news'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['nID'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['l']->value['nAnnounce'],70);?>
</a></td><td><small><?php echo $_smarty_tpl->tpl_vars['l']->value['nDBegin'];?>
</small></td><td><small><?php echo $_smarty_tpl->tpl_vars['l']->value['nDEnd'];?>
</small></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['nAttn']){?>Да<?php }?></td><?php }} ?>