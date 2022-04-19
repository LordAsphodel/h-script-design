<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 19:46:39
         compiled from "tpl/en/depo/admin/stat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131632361759ad836f850b19-54060430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a52b8437105ee48bfd6ee1f11a60d850d7df6e7' => 
    array (
      0 => 'tpl/en/depo/admin/stat.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131632361759ad836f850b19-54060430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'deps' => 0,
    'currs' => 0,
    'c' => 0,
    'cid' => 0,
    'stat' => 0,
    'clist' => 0,
    'today' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad836f92a2a5_10500288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad836f92a2a5_10500288')) {function content_59ad836f92a2a5_10500288($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Statistics'), 0);?>
<h2>Information</h2>Total users: <?php echo $_smarty_tpl->tpl_vars['users']->value['all'];?>
, including active: <?php echo $_smarty_tpl->tpl_vars['users']->value['active'];?>
, including users with deposits: <?php echo $_smarty_tpl->tpl_vars['users']->value['wdepo'];?>
<br>Total deposits: <?php echo $_smarty_tpl->tpl_vars['deps']->value['all'];?>
, including active: <?php echo $_smarty_tpl->tpl_vars['deps']->value['active'];?>
<br><br><table class="FormatTable" border="1"><tr><th></th><th colspan="11">Operations</th><th rowspan="2"><small>Active deposits</small></th><th colspan="3">Balances</th></tr><tr><th>Payment&nbsp;system</th><th><small>Bonus</small></th><th><small>Penalty</small></th><th><small>Recharge</small></th><th><small>Refferal bonus</small></th><th><small>Deposit</small></th><th><small>including from balance</small></th><th><small>Withdrawal</small></th><th><small>Accrual</small></th><th><small>Retirement</small></th><th><small>Waitng for withdrawal</small></th><th><small>Withdrawal</small></th><th><small>Available</small></th><th><small>Held</small></th><th><small>Awaiting</small></th></tr><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['cid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['cid']->value = $_smarty_tpl->tpl_vars['c']->key;
?><tr><td align="right"><?php echo $_smarty_tpl->tpl_vars['c']->value['cName'];?>
&nbsp;<i><small><?php echo $_smarty_tpl->tpl_vars['c']->value['cCurr'];?>
</small></i></td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['BONUS'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['PENALTY'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['CASHIN'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['REF'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['GIVE'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['GIVE2'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['TAKE'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['CALCIN'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['CALCOUT'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['CASHOUT2'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['CASHOUT'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['DEPO'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['BAL'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['LOCK'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['OUT'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td></tr><?php } ?><tr><td align="right"><b>ИТОГО:</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['BONUS'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['PENALTY'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['CASHIN'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['REF'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['GIVE'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['GIVE2'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['TAKE'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['CALCIN'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['CALCOUT'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['CASHOUT2'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['CASHOUT'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['DEPO'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['BAL'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['LOCK'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['OUT'],1,-1);?>
</b></td></tr></table><br><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Filter settings','fields'=>array('PSys'=>array('S','Payment system',0,array(0=>'- all -')+(array)$_smarty_tpl->tpl_vars['clist']->value),'D1'=>array('DT','From date','default'=>$_smarty_tpl->tpl_vars['today']->value),'D2'=>array('DT','Till date')),'btn_text'=>'Filter'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['res']->value){?><br><table class="FormatTable" border="1"><tr><td>Registrations</td><td align="right"><?php echo $_smarty_tpl->tpl_vars['res']->value['REG'];?>
</td></tr><tr><td>Bonus</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['BONUS'],1);?>
</td></tr><tr><td>Penalty</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['PENALTY'],1);?>
</td></tr><tr><td>Recharges</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['CASHIN'],1);?>
</td></tr><tr><td>Refferal bonus</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['REF'],1);?>
</td></tr><tr><td>Deposit</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['GIVE'],1);?>
</td></tr><tr><td>Withdrawal</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['TAKE'],1);?>
</td></tr><tr><td>Accrual</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['CALCIN'],1);?>
</td></tr><tr><td>Retirement</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['CALCOUT'],1);?>
</td></tr><tr><td>Withdrawal</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['CASHOUT'],1);?>
</td></tr><tr><td>Deposits made</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['DEPO'],1);?>
</td></tr><tr><td>including active</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['DEPO2'],1);?>
</td></tr><tr><td>System profit</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['CASHIN']-$_smarty_tpl->tpl_vars['res']->value['CASHOUT'],1);?>
</td></tr></table><?php }?><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>