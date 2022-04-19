<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:12:05
         compiled from "tpl/ru/balance/index.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11190619185958a6ee335fb9-17828637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cea6ed9c8ca08c8652ffddbd9b6450beefe4921' => 
    array (
      0 => 'tpl/ru/balance/index.row.tpl',
      1 => 1508709662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11190619185958a6ee335fb9-17828637',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958a6ee3b2860_94712614',
  'variables' => 
  array (
    'l' => 0,
    'op_names' => 0,
    'op_statuses' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958a6ee3b2860_94712614')) {function content_5958a6ee3b2860_94712614($_smarty_tpl) {?><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['oCTS'];?>
</small><br><small><?php echo $_smarty_tpl->tpl_vars['l']->value['oTS'];?>
</small></td><td><a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['oID'];?>
"><?php if ($_smarty_tpl->tpl_vars['l']->value['oNTS']){?><b><?php echo $_smarty_tpl->tpl_vars['op_names']->value[$_smarty_tpl->tpl_vars['l']->value['oOper']];?>
</b><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['op_names']->value[$_smarty_tpl->tpl_vars['l']->value['oOper']];?>
<?php }?></a></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['cName'];?>
</td><td align="nowrap"><?php if (in_array($_smarty_tpl->tpl_vars['l']->value['oOper'],array('BONUS','CASHIN','EXIN','TRIN','SELL','REF','TAKE','CALCIN'))){?><?php echo _z($_smarty_tpl->tpl_vars['l']->value['oSum'],$_smarty_tpl->tpl_vars['l']->value['ocID'],-1);?>
<?php if ($_smarty_tpl->tpl_vars['l']->value['oComis']!=0){?><br><sup><?php echo _z($_smarty_tpl->tpl_vars['l']->value['oComis'],$_smarty_tpl->tpl_vars['l']->value['ocID'],-1);?>
</sup><?php }?><?php }?></td><td align="nowrap"><?php if (in_array($_smarty_tpl->tpl_vars['l']->value['oOper'],array('PENALTY','CASHOUT','EX','TR','BUY','GIVE','CALCOUT'))){?><span style="color: red;"><?php echo _z($_smarty_tpl->tpl_vars['l']->value['oSum'],$_smarty_tpl->tpl_vars['l']->value['ocID'],-1);?>
</span><?php if ($_smarty_tpl->tpl_vars['l']->value['oComis']!=0){?><br><sup><?php echo _z($_smarty_tpl->tpl_vars['l']->value['oComis'],$_smarty_tpl->tpl_vars['l']->value['ocID'],-1);?>
</sup><?php }?><?php }?></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['oBatch'];?>
</td><td class="nowrap"><a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['oID'];?>
"><?php if ($_smarty_tpl->tpl_vars['l']->value['oNTS']){?><b><?php echo $_smarty_tpl->tpl_vars['op_statuses']->value[$_smarty_tpl->tpl_vars['l']->value['oState']];?>
</b><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['op_statuses']->value[$_smarty_tpl->tpl_vars['l']->value['oState']];?>
<?php }?></a><?php if ($_smarty_tpl->tpl_vars['l']->value['oNTS']){?><br><small><?php echo $_smarty_tpl->tpl_vars['l']->value['oNTS'];?>
</small><?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['oParams']['user']){?><i><?php echo $_smarty_tpl->tpl_vars['l']->value['oParams']['user'];?>
</i> <?php }?><small><?php if ($_smarty_tpl->tpl_vars['l']->value['oMemo'][0]=='~'){?>Ошибка<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['l']->value['oMemo'];?>
<?php }?></small></td>
<?php }} ?>