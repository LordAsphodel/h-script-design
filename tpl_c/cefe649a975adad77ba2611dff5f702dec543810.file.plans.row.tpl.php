<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 16:35:42
         compiled from "tpl/ru/depo/admin/plans.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:962678136595740abe42438-13344772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cefe649a975adad77ba2611dff5f702dec543810' => 
    array (
      0 => 'tpl/ru/depo/admin/plans.row.tpl',
      1 => 1508709690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '962678136595740abe42438-13344772',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595740abe75ec4_10795544',
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595740abe75ec4_10795544')) {function content_595740abe75ec4_10795544($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pID'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['pHidden']){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['pNoCalc']){?>*<?php }?></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pGroup'];?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'depo/admin/plan'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['pID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['pName'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pMin'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pMax'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pDays'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['pPerc'];?>
</td><td align="right"><?php echo $_smarty_tpl->tpl_vars['l']->value['cnt'];?>
 (<?php echo _z($_smarty_tpl->tpl_vars['l']->value['dsum'],1);?>
)</td><td align="right"><?php echo $_smarty_tpl->tpl_vars['l']->value['acnt'];?>
 (<?php echo _z($_smarty_tpl->tpl_vars['l']->value['adsum'],1);?>
)</td><?php }} ?>