<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 18:46:47
         compiled from "tpl/ru/depo/_depo.admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2748376615960b2e23a9b09-91344822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '259a720a5326e4c0b279e9366a190fd8f9cc9e7e' => 
    array (
      0 => 'tpl/ru/depo/_depo.admin.tpl',
      1 => 1508709665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2748376615960b2e23a9b09-91344822',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5960b2e243e917_32146940',
  'variables' => 
  array (
    'el' => 0,
    'chg' => 0,
    'add' => 0,
    'sub' => 0,
    'from_admin' => 0,
    'ststrs' => 0,
    'plans' => 0,
    'modform' => 0,
    'modbuttons' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5960b2e243e917_32146940')) {function content_5960b2e243e917_32146940($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('depo/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_smarty_tpl->tpl_vars['chg'] = new Smarty_variable((($_smarty_tpl->tpl_vars['el']->value['dState']==1)&&($_smarty_tpl->tpl_vars['el']->value['pCompndMax']>0)&&($_smarty_tpl->tpl_vars['el']->value['pCompndMin']<$_smarty_tpl->tpl_vars['el']->value['pCompndMax'])), null, 0);?><?php $_smarty_tpl->tpl_vars['modbuttons'] = new Smarty_variable(array(), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons'];?><?php if ($_smarty_tpl->tpl_vars['chg']->value){?><?php $_smarty_tpl->createLocalArrayVariable('modbuttons', null, 3);
$_smarty_tpl->tpl_vars['modbuttons']->value['chg'] = 'Сменить процент реинвеста';
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons'];?><?php }?><?php $_smarty_tpl->tpl_vars['add'] = new Smarty_variable($_smarty_tpl->tpl_vars['el']->value['pEnAdd'], null, 0);?><?php $_smarty_tpl->tpl_vars['sub'] = new Smarty_variable((($_smarty_tpl->tpl_vars['el']->value['pClComis']<100)&&($_smarty_tpl->tpl_vars['el']->value['dNPer']>=$_smarty_tpl->tpl_vars['el']->value['pMPer'])), null, 0);?><?php $_smarty_tpl->tpl_vars['modform'] = new Smarty_variable(array(), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modform'] = clone $_smarty_tpl->tpl_vars['modform']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modform'] = clone $_smarty_tpl->tpl_vars['modform'];?><?php if (($_smarty_tpl->tpl_vars['el']->value['dState']==1)&&($_smarty_tpl->tpl_vars['add']->value||$_smarty_tpl->tpl_vars['sub']->value)){?><?php $_smarty_tpl->tpl_vars['modform'] = new Smarty_variable(array(1=>'','Sum'=>array('$','Сумма изменения!!',array('sum_empty'=>'укажите сумму','sum_wrong'=>'неверная сумма','low_balance'=>'недостаточно средств','cant_add'=>'невозможно довложить','cant_sub'=>'невозможно снять','plan_not_found'=>'нет подходящего плана'),'comment'=>" <i><small>".($_smarty_tpl->tpl_vars['el']->value['cCurr'])."</small></i>",'default'=>0)), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modform'] = clone $_smarty_tpl->tpl_vars['modform']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modform'] = clone $_smarty_tpl->tpl_vars['modform'];?><?php if ($_smarty_tpl->tpl_vars['add']->value){?><?php $_smarty_tpl->createLocalArrayVariable('modbuttons', null, 3);
$_smarty_tpl->tpl_vars['modbuttons']->value['add'] = 'ДОвложить';
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons'];?><?php }?><?php if ($_smarty_tpl->tpl_vars['sub']->value){?><?php $_smarty_tpl->createLocalArrayVariable('modbuttons', null, 3);
$_smarty_tpl->tpl_vars['modbuttons']->value['sub'] = 'Снять';
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons'];?><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['el']->value['dState']==1){?><?php $_smarty_tpl->createLocalArrayVariable('modbuttons', null, 3);
$_smarty_tpl->tpl_vars['modbuttons']->value['chp'] = 'Сменить план';
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons'];?><?php $_smarty_tpl->createLocalArrayVariable('modbuttons', null, 3);
$_smarty_tpl->tpl_vars['modbuttons']->value['cls'] = 'Закрыть';
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons'];?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>valueIf($_smarty_tpl->tpl_vars['from_admin']->value,'Депозит'),'fields'=>array('dID'=>array(),'duID'=>array(),'dcID'=>array(),'dState'=>array('X','Статус',0,"<b>".($_smarty_tpl->tpl_vars['ststrs']->value[$_smarty_tpl->tpl_vars['el']->value['dState']])."</b>"),'dCTS'=>array('X','Создано'),'uLogin'=>array('X','Пользователь','skip'=>!$_smarty_tpl->tpl_vars['from_admin']->value),'Bal'=>array('U','balance/bal.tpl','skip'=>!$_smarty_tpl->tpl_vars['from_admin']->value),'cName'=>array('X','Плат. система'),'dZD'=>array('X','Сумма',0,_z($_smarty_tpl->tpl_vars['el']->value['dZD'],$_smarty_tpl->tpl_vars['el']->value['dcID'],1)),'dpID'=>array('S','План',0,$_smarty_tpl->tpl_vars['plans']->value),'dN'=>array('X','Начислений',0,($_smarty_tpl->tpl_vars['el']->value['dNPer'])." из ".($_smarty_tpl->tpl_vars['el']->value['pNPer'])),'dLTS'=>array('X','Последнее начисление'),'dNTS'=>array('X','Следующее начисление'),'dCompnd'=>array('X','Процент реинвеста <<капитализация>>','skip'=>$_smarty_tpl->tpl_vars['chg']->value),'Compnd'=>array('%','Процент реинвеста <<капитализация>>',array('compnd_wrong'=>"неверное значение [".($_smarty_tpl->tpl_vars['cmin']->value)."..".($_smarty_tpl->tpl_vars['cmax']->value)."]"),'default'=>$_smarty_tpl->tpl_vars['el']->value['dCompnd'],'skip'=>!$_smarty_tpl->tpl_vars['chg']->value),'dM'=>array('X','Досрочное снятие',0,valueIf($_smarty_tpl->tpl_vars['el']->value['pClComis']>=100,'Невозможно',valueIf($_smarty_tpl->tpl_vars['el']->value['dNPer']>=$_smarty_tpl->tpl_vars['el']->value['pMPer'],"Возможно","Осталось начислений: ".(($_smarty_tpl->tpl_vars['el']->value['pMPer']-$_smarty_tpl->tpl_vars['el']->value['dNPer'])))),'skip'=>($_smarty_tpl->tpl_vars['el']->value['dState']>1)))+$_smarty_tpl->tpl_vars['modform']->value,'values'=>$_smarty_tpl->tpl_vars['el']->value,'errors'=>array('oper_disabled'=>'операция запрещена'),'btn_text'=>' ','btns'=>$_smarty_tpl->tpl_vars['modbuttons']->value), 0);?>
<?php }} ?>