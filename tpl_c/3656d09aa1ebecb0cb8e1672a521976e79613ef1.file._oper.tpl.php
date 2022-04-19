<?php /* Smarty version Smarty-3.1.8, created on 2017-09-05 23:05:54
         compiled from "tpl/en/balance/_oper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107155619759af000fde35b8-56884572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3656d09aa1ebecb0cb8e1672a521976e79613ef1' => 
    array (
      0 => 'tpl/en/balance/_oper.tpl',
      1 => 1504641939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107155619759af000fde35b8-56884572',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59af000feac1c6_95181841',
  'variables' => 
  array (
    'el' => 0,
    'op_statuses' => 0,
    'from_admin' => 0,
    'op_sums' => 0,
    'afields' => 0,
    'bt' => 0,
    'b' => 0,
    'pvalues' => 0,
    'pform' => 0,
    'pfields' => 0,
    'f' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59af000feac1c6_95181841')) {function content_59af000feac1c6_95181841($_smarty_tpl) {?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'balance/admin/curr'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('fields'=>array('oID'=>array(),'oState'=>array('X','State:&nbsp&nbsp',0,"<b>".($_smarty_tpl->tpl_vars['op_statuses']->value[$_smarty_tpl->tpl_vars['el']->value['oState']])."</b>"),'oCTS'=>array('X','Date:&nbsp&nbsp'),'uLogin'=>array('X','User:&nbsp&nbsp',0,"<a href=\"".$_tmp1."?id=".($_smarty_tpl->tpl_vars['el']->value['uID'])."\">".($_smarty_tpl->tpl_vars['el']->value['uLogin'])."</a>",'skip'=>!$_smarty_tpl->tpl_vars['from_admin']->value),'Login2'=>array('X',valueIf($_smarty_tpl->tpl_vars['el']->value['oOper']=='TR','Recipient:&nbsp&nbsp','Sender:&nbsp&nbsp'),0,valueIf($_smarty_tpl->tpl_vars['from_admin']->value,"<a href=\"".$_tmp2."?id=".($_smarty_tpl->tpl_vars['el']->value['oParams']['uid2'])."\">".($_smarty_tpl->tpl_vars['el']->value['oParams']['user'])."</a>",$_smarty_tpl->tpl_vars['el']->value['oParams']['user']),'skip'=>!$_smarty_tpl->tpl_vars['el']->value['oParams']['uid2']),'PSys'=>array('X','Payment system:&nbsp&nbsp',0,valueIf($_smarty_tpl->tpl_vars['from_admin']->value,"<a href=\"".$_tmp3."?id=".($_smarty_tpl->tpl_vars['el']->value['ocID'])."\">".($_smarty_tpl->tpl_vars['el']->value['cName'])."</a>",$_smarty_tpl->tpl_vars['el']->value['cName'])),'PayTo'=>array('X','payment details:&nbsp&nbsp',0,$_GET['payto'],'skip'=>!$_GET['payto']),'oSum'=>array('X','Sum:&nbsp&nbsp',0,_z($_smarty_tpl->tpl_vars['el']->value['oSum'],$_smarty_tpl->tpl_vars['el']->value['ocID'],1)),'oComis'=>array('X','Comission:&nbsp&nbsp',0,_z($_smarty_tpl->tpl_vars['el']->value['oComis'],$_smarty_tpl->tpl_vars['el']->value['ocID'],1),'skip'=>($_smarty_tpl->tpl_vars['el']->value['oComis']==0)),'Sum'=>array('X',$_smarty_tpl->tpl_vars['op_sums']->value[$_smarty_tpl->tpl_vars['el']->value['oOper']],0,_z($_smarty_tpl->tpl_vars['el']->value['oSum']-$_smarty_tpl->tpl_vars['el']->value['oComis'],$_smarty_tpl->tpl_vars['el']->value['ocID'],1),'skip'=>($_smarty_tpl->tpl_vars['el']->value['oComis']==0)),'PSys2'=>array('X',valueIf($_smarty_tpl->tpl_vars['el']->value['oOper']=='EX','To payment system:&nbsp&nbsp','From payment system:&nbsp&nbsp'),0,$_smarty_tpl->tpl_vars['el']->value['oParams']['psys'],'skip'=>!$_smarty_tpl->tpl_vars['el']->value['oParams']['cid2']),'Sum2'=>array('X','Amount to receive:&nbsp&nbsp',0,_z($_smarty_tpl->tpl_vars['el']->value['oParams']['sum2'],exValue($_smarty_tpl->tpl_vars['el']->value['ocID'],$_smarty_tpl->tpl_vars['el']->value['oParams']['cid2']),1),'skip'=>!$_smarty_tpl->tpl_vars['el']->value['oParams']['sum2']),'Acc'=>array('X',valueIf($_smarty_tpl->tpl_vars['el']->value['oOper']=='CASHOUT','Recipient account:&nbsp&nbsp','Sender account:&nbsp&nbsp'),0,$_smarty_tpl->tpl_vars['el']->value['oParams2']['acc'],'skip'=>!in_array($_smarty_tpl->tpl_vars['el']->value['oOper'],array('CASHIN','CASHOUT'))||!$_smarty_tpl->tpl_vars['el']->value['oParams2']['acc']),'oBatch'=>array('X','Batch-number:&nbsp&nbsp','skip'=>!$_smarty_tpl->tpl_vars['el']->value['oBatch']),'oMemo'=>array('X','Comment:&nbsp&nbsp','skip'=>!$_smarty_tpl->tpl_vars['el']->value['oMemo'],0,valueIf(!$_smarty_tpl->tpl_vars['from_admin']->value&&($_smarty_tpl->tpl_vars['el']->value['oMemo'][0]=='~'),'Error',$_smarty_tpl->tpl_vars['el']->value['oMemo'])),'oTS'=>array('X','Edited:&nbsp&nbsp','skip'=>!$_smarty_tpl->tpl_vars['el']->value['oTS']),'oNTS'=>array('X','Complete:&nbsp&nbsp','skip'=>!$_smarty_tpl->tpl_vars['el']->value['oNTS']))+(array)$_smarty_tpl->tpl_vars['afields']->value,'values'=>$_smarty_tpl->tpl_vars['el']->value,'btn_text'=>$_smarty_tpl->tpl_vars['bt']->value,'btns'=>$_smarty_tpl->tpl_vars['b']->value), 0);?>
<?php if ($_smarty_tpl->tpl_vars['afields']->value){?><br><p class="info">Current payment system does not have <a href="<?php echo tplModuleToLink(array('module'=>'balance/admin/curr'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['el']->value['ocID'];?>
"> API settings</a> set<br>You can complete this operation specifying settings above.<br>It is safe as specified data is not saved anywhere.</p><?php }?><?php if ($_smarty_tpl->tpl_vars['el']->value['oOper']=='CASHIN'){?><?php if (!isset($_GET['payto'])){?><?php echo $_smarty_tpl->getSubTemplate ('balance/_pform.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('btn_text'=>'Pay using merchant'), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['pvalues']->value['acc']){?><?php if ($_smarty_tpl->tpl_vars['el']->value['oState']<=1){?><br><p class="info"><?php if ($_smarty_tpl->tpl_vars['pform']->value){?>In the case of impossibility to pay using site,<br><?php }?>you can pay using specified payment data manually <br>and then enter this payment details in the form below</p><?php }?><h2>Our payment data<br>(to pay manually using <?php echo $_smarty_tpl->tpl_vars['el']->value['cName'];?>
)</h2><table class="formatTable"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if ($_smarty_tpl->tpl_vars['pvalues']->value[$_smarty_tpl->tpl_vars['f']->value]){?><tr><td align="right"><?php $_smarty_tpl->createLocalArrayVariable('v', null, 0);
$_smarty_tpl->tpl_vars['v']->value[0] = str_replace('*',' <span class="descr_rem">(not necessarily)</span>',$_smarty_tpl->tpl_vars['v']->value[0]);?><?php if ($_smarty_tpl->tpl_vars['f']->value==='acc'){?>Счет получателя <span class="descr_rem">(<?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
)</span><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
<?php }?></td><td><span class="uline"><?php echo $_smarty_tpl->tpl_vars['pvalues']->value[$_smarty_tpl->tpl_vars['f']->value];?>
</span></td></tr><?php }?><?php } ?><tr><td align="right">Сумма</td><td><span class="uline"><?php echo _z($_smarty_tpl->tpl_vars['el']->value['oSum'],$_smarty_tpl->tpl_vars['el']->value['ocID'],1);?>
</span></td></tr></table><?php }?><?php if (isset($_smarty_tpl->tpl_vars['pvalues']->value['acc'])||($_smarty_tpl->tpl_vars['from_admin']->value&&($_smarty_tpl->tpl_vars['el']->value['oState']<=2))){?><?php echo $_smarty_tpl->getSubTemplate ('balance/_oper.data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('oComis'=>0), 0);?>
<?php }?><?php }elseif(($_smarty_tpl->tpl_vars['el']->value['oOper']=='CASHOUT')&&($_smarty_tpl->tpl_vars['from_admin']->value&&($_smarty_tpl->tpl_vars['el']->value['oState']<=2))){?><?php echo $_smarty_tpl->getSubTemplate ('balance/_oper.data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('oComis'=>$_smarty_tpl->tpl_vars['el']->value['oComis']), 0);?>
<?php }?>
<?php }} ?>