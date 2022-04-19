<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 00:18:36
         compiled from "tpl/ru/balance/_oper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20507229035958a611701c64-04232779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77122362571ecfef6793b9afc99cce8c29817627' => 
    array (
      0 => 'tpl/ru/balance/_oper.tpl',
      1 => 1508709663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20507229035958a611701c64-04232779',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958a6117d4551_31032735',
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
<?php if ($_valid && !is_callable('content_5958a6117d4551_31032735')) {function content_5958a6117d4551_31032735($_smarty_tpl) {?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'balance/admin/curr'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('fields'=>array('oID'=>array(),'oState'=>array('X','Статус:&nbsp&nbsp',0,"<b>".($_smarty_tpl->tpl_vars['op_statuses']->value[$_smarty_tpl->tpl_vars['el']->value['oState']])."</b>"),'oCTS'=>array('X','Дата:&nbsp&nbsp'),'uLogin'=>array('X','Пользователь:&nbsp&nbsp',0,"<a href=\"".$_tmp1."?id=".($_smarty_tpl->tpl_vars['el']->value['uID'])."\">".($_smarty_tpl->tpl_vars['el']->value['uLogin'])."</a>",'skip'=>!$_smarty_tpl->tpl_vars['from_admin']->value),'Login2'=>array('X',valueIf($_smarty_tpl->tpl_vars['el']->value['oOper']=='TR','Получатель:&nbsp&nbsp','Отправитель:&nbsp&nbsp'),0,valueIf($_smarty_tpl->tpl_vars['from_admin']->value,"<a href=\"".$_tmp2."?id=".($_smarty_tpl->tpl_vars['el']->value['oParams']['uid2'])."\">".($_smarty_tpl->tpl_vars['el']->value['oParams']['user'])."</a>",$_smarty_tpl->tpl_vars['el']->value['oParams']['user']),'skip'=>!$_smarty_tpl->tpl_vars['el']->value['oParams']['uid2']),'PSys'=>array('X','Платежная система:&nbsp&nbsp',0,valueIf($_smarty_tpl->tpl_vars['from_admin']->value,"<a href=\"".$_tmp3."?id=".($_smarty_tpl->tpl_vars['el']->value['ocID'])."\">".($_smarty_tpl->tpl_vars['el']->value['cName'])."</a>",$_smarty_tpl->tpl_vars['el']->value['cName'])),'PayTo'=>array('X','Реквизиты для оплаты:&nbsp&nbsp',0,$_GET['payto'],'skip'=>!$_GET['payto']),'oSum'=>array('X','Сумма:&nbsp&nbsp',0,_z($_smarty_tpl->tpl_vars['el']->value['oSum'],$_smarty_tpl->tpl_vars['el']->value['ocID'],1)),'oComis'=>array('X','Комиссия:&nbsp&nbsp',0,_z($_smarty_tpl->tpl_vars['el']->value['oComis'],$_smarty_tpl->tpl_vars['el']->value['ocID'],1),'skip'=>($_smarty_tpl->tpl_vars['el']->value['oComis']==0)),'Sum'=>array('X',$_smarty_tpl->tpl_vars['op_sums']->value[$_smarty_tpl->tpl_vars['el']->value['oOper']],0,_z($_smarty_tpl->tpl_vars['el']->value['oSum']-$_smarty_tpl->tpl_vars['el']->value['oComis'],$_smarty_tpl->tpl_vars['el']->value['ocID'],1),'skip'=>($_smarty_tpl->tpl_vars['el']->value['oComis']==0)),'PSys2'=>array('X',valueIf($_smarty_tpl->tpl_vars['el']->value['oOper']=='EX','На плат. систему:&nbsp&nbsp','С плат. системы:&nbsp&nbsp'),0,$_smarty_tpl->tpl_vars['el']->value['oParams']['psys'],'skip'=>!$_smarty_tpl->tpl_vars['el']->value['oParams']['cid2']),'Sum2'=>array('X','Сумма к получению:&nbsp&nbsp',0,_z($_smarty_tpl->tpl_vars['el']->value['oParams']['sum2'],exValue($_smarty_tpl->tpl_vars['el']->value['ocID'],$_smarty_tpl->tpl_vars['el']->value['oParams']['cid2']),1),'skip'=>!$_smarty_tpl->tpl_vars['el']->value['oParams']['sum2']),'Acc'=>array('X',valueIf($_smarty_tpl->tpl_vars['el']->value['oOper']=='CASHOUT','Счет получателя:&nbsp&nbsp','Счет отправителя:&nbsp&nbsp'),0,$_smarty_tpl->tpl_vars['el']->value['oParams2']['acc'],'skip'=>!in_array($_smarty_tpl->tpl_vars['el']->value['oOper'],array('CASHIN','CASHOUT'))||!$_smarty_tpl->tpl_vars['el']->value['oParams2']['acc']),'oBatch'=>array('X','Batch-номер:&nbsp&nbsp','skip'=>!$_smarty_tpl->tpl_vars['el']->value['oBatch']),'oMemo'=>array('X','Примечание:&nbsp&nbsp','skip'=>!$_smarty_tpl->tpl_vars['el']->value['oMemo'],0,valueIf(!$_smarty_tpl->tpl_vars['from_admin']->value&&($_smarty_tpl->tpl_vars['el']->value['oMemo'][0]=='~'),'Ошибка',$_smarty_tpl->tpl_vars['el']->value['oMemo'])),'oTS'=>array('X','Изменено:&nbsp&nbsp','skip'=>!$_smarty_tpl->tpl_vars['el']->value['oTS']),'oNTS'=>array('X','Отработано:&nbsp&nbsp','skip'=>!$_smarty_tpl->tpl_vars['el']->value['oNTS']))+(array)$_smarty_tpl->tpl_vars['afields']->value,'values'=>$_smarty_tpl->tpl_vars['el']->value,'btn_text'=>$_smarty_tpl->tpl_vars['bt']->value,'btns'=>$_smarty_tpl->tpl_vars['b']->value), 0);?>
<?php if ($_smarty_tpl->tpl_vars['afields']->value){?><br><p class="info">Для данной платежной системы не прописаны <a href="<?php echo tplModuleToLink(array('module'=>'balance/admin/curr'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['el']->value['ocID'];?>
">параметры API</a><br>Вы можете выполнить эту операцию, указав параметры выше.<br>Это безопасно, т.к. введенные данные нигде не сохраняются</p><?php }?><?php if ($_smarty_tpl->tpl_vars['el']->value['oOper']=='CASHIN'){?><?php if (!isset($_GET['payto'])){?><?php echo $_smarty_tpl->getSubTemplate ('balance/_pform.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('btn_text'=>'Оплатить через мерчант'), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['pvalues']->value['acc']){?><?php if ($_smarty_tpl->tpl_vars['el']->value['oState']<=1){?><br><p class="info"><?php if ($_smarty_tpl->tpl_vars['pform']->value){?>В случае невозможности оплатить напрямую через сайт,<br><?php }?>Вы можете совершить оплату по указанным реквизитам вручную,<br>а затем указать данные этого платежа в форме ниже</p><?php }?><h2>Наши платежные реквизиты<br>(для оплаты вручную через <?php echo $_smarty_tpl->tpl_vars['el']->value['cName'];?>
)</h2><table class="formatTable"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if ($_smarty_tpl->tpl_vars['pvalues']->value[$_smarty_tpl->tpl_vars['f']->value]){?><tr><td align="right"><?php $_smarty_tpl->createLocalArrayVariable('v', null, 0);
$_smarty_tpl->tpl_vars['v']->value[0] = str_replace('*',' <span class="descr_rem">(не обязательно)</span>',$_smarty_tpl->tpl_vars['v']->value[0]);?><?php if ($_smarty_tpl->tpl_vars['f']->value==='acc'){?>Счет получателя <span class="descr_rem">(<?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
)</span><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
<?php }?></td><td><span class="uline"><?php echo $_smarty_tpl->tpl_vars['pvalues']->value[$_smarty_tpl->tpl_vars['f']->value];?>
</span></td></tr><?php }?><?php } ?><tr><td align="right">Сумма</td><td><span class="uline"><?php echo _z($_smarty_tpl->tpl_vars['el']->value['oSum'],$_smarty_tpl->tpl_vars['el']->value['ocID'],1);?>
</span></td></tr></table><?php }?><?php if (isset($_smarty_tpl->tpl_vars['pvalues']->value['acc'])||($_smarty_tpl->tpl_vars['from_admin']->value&&($_smarty_tpl->tpl_vars['el']->value['oState']<=2))){?><?php echo $_smarty_tpl->getSubTemplate ('balance/_oper.data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('oComis'=>0), 0);?>
<?php }?><?php }elseif(($_smarty_tpl->tpl_vars['el']->value['oOper']=='CASHOUT')&&($_smarty_tpl->tpl_vars['from_admin']->value&&($_smarty_tpl->tpl_vars['el']->value['oState']<=2))){?><?php echo $_smarty_tpl->getSubTemplate ('balance/_oper.data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('oComis'=>$_smarty_tpl->tpl_vars['el']->value['oComis']), 0);?>
<?php }?>
<?php }} ?>