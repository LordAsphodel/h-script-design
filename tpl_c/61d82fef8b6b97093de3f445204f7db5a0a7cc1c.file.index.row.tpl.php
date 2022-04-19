<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 05:30:15
         compiled from "tpl/ru/depo/index.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9913782975958d1f106b450-29473794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61d82fef8b6b97093de3f445204f7db5a0a7cc1c' => 
    array (
      0 => 'tpl/ru/depo/index.row.tpl',
      1 => 1508709665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9913782975958d1f106b450-29473794',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958d1f108c168_68129186',
  'variables' => 
  array (
    'l' => 0,
    'ststrs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958d1f108c168_68129186')) {function content_5958d1f108c168_68129186($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['dID'];?>
</td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['dCTS'];?>
</small></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['cName'];?>
</td><td align="nowrap"><?php echo _z($_smarty_tpl->tpl_vars['l']->value['dZD'],$_smarty_tpl->tpl_vars['l']->value['dcID'],-1);?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'depo/depo'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['dID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['pName'];?>
</a></td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['dLTS'];?>
</small></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['dNPer'];?>
 из <?php echo $_smarty_tpl->tpl_vars['l']->value['pNPer'];?>
</td><td align="nowrap"><?php echo _z($_smarty_tpl->tpl_vars['l']->value['dZP'],$_smarty_tpl->tpl_vars['l']->value['dcID'],-1);?>
</td><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['dNTS'];?>
</small></td><td><a href="<?php echo tplModuleToLink(array('module'=>'depo/depo'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['dID'];?>
"><?php echo $_smarty_tpl->tpl_vars['ststrs']->value[$_smarty_tpl->tpl_vars['l']->value['dState']];?>
</a></td>
<?php }} ?>