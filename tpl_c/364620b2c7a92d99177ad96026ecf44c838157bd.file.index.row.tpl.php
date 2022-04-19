<?php /* Smarty version Smarty-3.1.8, created on 2017-09-05 22:53:02
         compiled from "tpl/en/balance/index.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41001719359af009e676913-57612927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '364620b2c7a92d99177ad96026ecf44c838157bd' => 
    array (
      0 => 'tpl/en/balance/index.row.tpl',
      1 => 1504641160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41001719359af009e676913-57612927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
    'op_names' => 0,
    'op_statuses' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59af009e6c6de4_16454530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59af009e6c6de4_16454530')) {function content_59af009e6c6de4_16454530($_smarty_tpl) {?><td class="nowrap"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['oCTS'];?>
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
</i> <?php }?><small><?php if ($_smarty_tpl->tpl_vars['l']->value['oMemo'][0]=='~'){?>Error<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['l']->value['oMemo'];?>
<?php }?></small></td>
<?php }} ?>