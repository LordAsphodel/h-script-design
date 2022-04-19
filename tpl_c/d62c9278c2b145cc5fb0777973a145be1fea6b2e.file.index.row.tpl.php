<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 11:45:10
         compiled from "tpl/en/depo/index.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179116862259ad1296c6e288-31669808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd62c9278c2b145cc5fb0777973a145be1fea6b2e' => 
    array (
      0 => 'tpl/en/depo/index.row.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179116862259ad1296c6e288-31669808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
    'ststrs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad1296c8e0f1_59457724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad1296c8e0f1_59457724')) {function content_59ad1296c8e0f1_59457724($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['dID'];?>
</td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['dCTS'];?>
</small></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['cName'];?>
</td><td align="nowrap"><?php echo _z($_smarty_tpl->tpl_vars['l']->value['dZD'],$_smarty_tpl->tpl_vars['l']->value['dcID'],-1);?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'depo/depo'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['dID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['pName'];?>
</a></td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['dLTS'];?>
</small></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['dNPer'];?>
 of <?php echo $_smarty_tpl->tpl_vars['l']->value['pNPer'];?>
</td><td align="nowrap"><?php echo _z($_smarty_tpl->tpl_vars['l']->value['dZP'],$_smarty_tpl->tpl_vars['l']->value['dcID'],-1);?>
</td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['dNTS'];?>
</small></td><td><a href="<?php echo tplModuleToLink(array('module'=>'depo/depo'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['dID'];?>
"><?php echo $_smarty_tpl->tpl_vars['ststrs']->value[$_smarty_tpl->tpl_vars['l']->value['dState']];?>
</a></td>
<?php }} ?>