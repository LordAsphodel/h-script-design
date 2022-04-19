<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 06:37:16
         compiled from "tpl/ru/depo/_depo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1426334340595a02d5a21fb3-90419749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf3e7365a4a588f4e31a6e96c64d4e68fbd1c584' => 
    array (
      0 => 'tpl/ru/depo/_depo.tpl',
      1 => 1508709665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1426334340595a02d5a21fb3-90419749',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595a02d5ab0074_25515479',
  'variables' => 
  array (
    'el' => 0,
    'chg' => 0,
    'add' => 0,
    'sub' => 0,
    'from_admin' => 0,
    'ststrs' => 0,
    'modform' => 0,
    'modbuttons' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595a02d5ab0074_25515479')) {function content_595a02d5ab0074_25515479($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('depo/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_smarty_tpl->tpl_vars['chg'] = new Smarty_variable((($_smarty_tpl->tpl_vars['el']->value['dState']==1)&&($_smarty_tpl->tpl_vars['el']->value['pCompndMax']>0)&&($_smarty_tpl->tpl_vars['el']->value['pCompndMin']<$_smarty_tpl->tpl_vars['el']->value['pCompndMax'])), null, 0);?><?php $_smarty_tpl->tpl_vars['modbuttons'] = new Smarty_variable(array(), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons'];?><?php if ($_smarty_tpl->tpl_vars['chg']->value){?><?php $_smarty_tpl->createLocalArrayVariable('modbuttons', null, 3);
$_smarty_tpl->tpl_vars['modbuttons']->value['chg'] = 'Сменить процент реинвеста';
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons'];?><?php }?><?php $_smarty_tpl->tpl_vars['add'] = new Smarty_variable($_smarty_tpl->tpl_vars['el']->value['pEnAdd'], null, 0);?><?php $_smarty_tpl->tpl_vars['sub'] = new Smarty_variable((($_smarty_tpl->tpl_vars['el']->value['pClComis']<100)&&($_smarty_tpl->tpl_vars['el']->value['dNPer']>=$_smarty_tpl->tpl_vars['el']->value['pMPer'])), null, 0);?><?php $_smarty_tpl->tpl_vars['modform'] = new Smarty_variable(array(), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modform'] = clone $_smarty_tpl->tpl_vars['modform']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modform'] = clone $_smarty_tpl->tpl_vars['modform'];?><?php if (($_smarty_tpl->tpl_vars['el']->value['dState']==1)&&($_smarty_tpl->tpl_vars['add']->value||$_smarty_tpl->tpl_vars['sub']->value)){?><?php $_smarty_tpl->tpl_vars['modform'] = new Smarty_variable(array(1=>'','Sum'=>array('$','Сумма изменения!!',array('sum_empty'=>'укажите сумму','sum_wrong'=>'неверная сумма','low_bal1'=>'недостаточно средств','cant_add'=>'невозможно довложить','cant_sub'=>'невозможно снять','plan_not_found'=>'нет подходящего плана'),'comment'=>" <i><small>".($_smarty_tpl->tpl_vars['el']->value['cCurr'])."</small></i>",'default'=>0)), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modform'] = clone $_smarty_tpl->tpl_vars['modform']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modform'] = clone $_smarty_tpl->tpl_vars['modform'];?><?php if ($_smarty_tpl->tpl_vars['add']->value){?><?php $_smarty_tpl->createLocalArrayVariable('modbuttons', null, 3);
$_smarty_tpl->tpl_vars['modbuttons']->value['add'] = 'Довложить';
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons'];?><?php }?><?php if ($_smarty_tpl->tpl_vars['sub']->value){?><?php $_smarty_tpl->createLocalArrayVariable('modbuttons', null, 3);
$_smarty_tpl->tpl_vars['modbuttons']->value['sub'] = 'Снять';
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons'];?><?php }?><?php }?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'depo/admin/plan'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>valueIf($_smarty_tpl->tpl_vars['from_admin']->value,'Депозит'),'form_class'=>'form-horizontal','row_wrap'=>'form-group','label_class'=>'col-sm-6 control-label','input_class'=>'form-control','input_wrap'=>'col-sm-6','fields'=>array('dID'=>array(),'duID'=>array(),'dcID'=>array(),'dState'=>array('X','Статус',0,"<b>".($_smarty_tpl->tpl_vars['ststrs']->value[$_smarty_tpl->tpl_vars['el']->value['dState']])."</b>"),'dCTS'=>array('X','Создано'),'uLogin'=>array('X','Пользователь','skip'=>!$_smarty_tpl->tpl_vars['from_admin']->value),'Bal'=>array('U','balance/bal.tpl','skip'=>!$_smarty_tpl->tpl_vars['from_admin']->value),'cName'=>array('X','Плат. система'),'dZD'=>array('X','Сумма',0,_z($_smarty_tpl->tpl_vars['el']->value['dZD'],$_smarty_tpl->tpl_vars['el']->value['dcID'],1)),'pName'=>array('X','План',0,valueIf($_smarty_tpl->tpl_vars['from_admin']->value,"<a href=\"".$_tmp1."?id=".($_smarty_tpl->tpl_vars['el']->value['dpID'])."\" target=\"_blank\">".($_smarty_tpl->tpl_vars['el']->value['pName'])."</a>")),'dN'=>array('X','Начислений',0,($_smarty_tpl->tpl_vars['el']->value['dNPer'])." из ".($_smarty_tpl->tpl_vars['el']->value['pNPer'])),'dLTS'=>array('X','Последнее начисление'),'dNTS'=>array('X','Следующее начисление'),'dCompnd'=>array('X','Процент реинвеста <<капитализация>>','skip'=>$_smarty_tpl->tpl_vars['chg']->value),'Compnd'=>array('%','Процент реинвеста <<капитализация>>',array('compnd_wrong'=>"неверное значение [".($_smarty_tpl->tpl_vars['cmin']->value)."..".($_smarty_tpl->tpl_vars['cmax']->value)."]"),'default'=>$_smarty_tpl->tpl_vars['el']->value['dCompnd'],'skip'=>!$_smarty_tpl->tpl_vars['chg']->value),'dM'=>array('X','Досрочное снятие',0,valueIf($_smarty_tpl->tpl_vars['el']->value['pClComis']>=100,'Невозможно',valueIf($_smarty_tpl->tpl_vars['el']->value['dNPer']>=$_smarty_tpl->tpl_vars['el']->value['pMPer'],"Возможно","Осталось начислений: ".(($_smarty_tpl->tpl_vars['el']->value['pMPer']-$_smarty_tpl->tpl_vars['el']->value['dNPer'])))),'skip'=>($_smarty_tpl->tpl_vars['el']->value['dState']>1)))+$_smarty_tpl->tpl_vars['modform']->value,'values'=>$_smarty_tpl->tpl_vars['el']->value,'errors'=>array('oper_disabled'=>'операция запрещена'),'btn_text'=>' ','btns'=>$_smarty_tpl->tpl_vars['modbuttons']->value), 0);?>
*Реинвест доступен только по субботам в соответствии с <a href="/rules">правилами</a> проекта.
<?php }} ?>