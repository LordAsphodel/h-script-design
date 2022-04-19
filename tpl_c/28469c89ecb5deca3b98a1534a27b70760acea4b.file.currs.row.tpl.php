<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:08:18
         compiled from "tpl/ru/balance/admin/currs.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:342020530595741e813d7f1-03671263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28469c89ecb5deca3b98a1534a27b70760acea4b' => 
    array (
      0 => 'tpl/ru/balance/admin/currs.row.tpl',
      1 => 1508709686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '342020530595741e813d7f1-03671263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595741e81820d5_43001656',
  'variables' => 
  array (
    'l' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595741e81820d5_43001656')) {function content_595741e81820d5_43001656($_smarty_tpl) {?><td><?php echo $_smarty_tpl->tpl_vars['l']->value['cID'];?>
</td><td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['l']->value['cCID'];?>
 <?php echo $_smarty_tpl->tpl_vars['l']->value['cCurrID'];?>
</td><td><a href="<?php echo tplModuleToLink(array('module'=>'balance/admin/curr'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['cID'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['cName'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['cCurr'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Bal_Update']){?><?php echo _z($_smarty_tpl->tpl_vars['l']->value['cBal'],$_smarty_tpl->tpl_vars['l']->value['cID']);?>
<br><small><?php echo timeToStr(stampToTime($_smarty_tpl->tpl_vars['l']->value['cBalTS']));?>
</small><?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['PAPI']['apipass']){?><a href="<?php echo tplModuleToLink(array('module'=>'balance/admin/curr'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['cID'];?>
&testapi">тест</a><?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cDisabled']){?><b style="color: red">X</b><?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cCASHINMode']>0){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cCASHOUTMode']>0){?>*<?php }?></td><td align="right"><?php if ($_smarty_tpl->tpl_vars['l']->value['cEXMode']>0){?><small><?php echo $_smarty_tpl->tpl_vars['l']->value['cEXOut'];?>
/<?php echo $_smarty_tpl->tpl_vars['l']->value['cEXIn'];?>
</small><?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cTRMode']>0){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cBUYMode']>0){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cSELLMode']>0){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cBUY2Mode']>0){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cSELL2Mode']>0){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cGIVEMode']>0){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cTAKEMode']>0){?>*<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['l']->value['cHidden']){?>Да<?php }?></td><?php }} ?>