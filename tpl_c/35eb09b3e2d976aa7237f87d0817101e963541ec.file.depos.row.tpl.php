<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 18:46:39
         compiled from "tpl/ru/depo/admin/depos.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1161356792595d29ea6a4437-55043237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35eb09b3e2d976aa7237f87d0817101e963541ec' => 
    array (
      0 => 'tpl/ru/depo/admin/depos.row.tpl',
      1 => 1508709689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1161356792595d29ea6a4437-55043237',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595d29ea6c7eb7_20109335',
  'variables' => 
  array (
    'l' => 0,
    'ststrs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d29ea6c7eb7_20109335')) {function content_595d29ea6c7eb7_20109335($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['dID'];?>
</td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['dCTS'];?>
</small></td><td><a href="<?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['duID'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['l']->value['uLogin'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['cName'];?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['l']->value['dZD'],$_smarty_tpl->tpl_vars['l']->value['dcID'],-1);?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'depo/admin/depo'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['dID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['pName'];?>
</a></td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['dLTS'];?>
</small></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['dNPer'];?>
 из <?php echo $_smarty_tpl->tpl_vars['l']->value['pNPer'];?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['l']->value['dZP'],$_smarty_tpl->tpl_vars['l']->value['dcID'],-1);?>
</td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['dNTS'];?>
</small></td><td><a href="<?php echo tplModuleToLink(array('module'=>'depo/admin/depo'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['dID'];?>
"><?php echo $_smarty_tpl->tpl_vars['ststrs']->value[$_smarty_tpl->tpl_vars['l']->value['dState']];?>
</a></td><?php }} ?>