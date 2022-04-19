<?php /* Smarty version Smarty-3.1.8, created on 2017-09-05 23:31:09
         compiled from "tpl/en/depo/_depo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51212608559af098dec3a34-74714994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a1e75508ec72c2214fa394c0ee1b06ee1240bf4' => 
    array (
      0 => 'tpl/en/depo/_depo.tpl',
      1 => 1504643464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51212608559af098dec3a34-74714994',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59af098e02f405_56044572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59af098e02f405_56044572')) {function content_59af098e02f405_56044572($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('depo/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_smarty_tpl->tpl_vars['chg'] = new Smarty_variable((($_smarty_tpl->tpl_vars['el']->value['dState']==1)&&($_smarty_tpl->tpl_vars['el']->value['pCompndMax']>0)&&($_smarty_tpl->tpl_vars['el']->value['pCompndMin']<$_smarty_tpl->tpl_vars['el']->value['pCompndMax'])), null, 0);?><?php $_smarty_tpl->tpl_vars['modbuttons'] = new Smarty_variable(array(), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons'];?><?php if ($_smarty_tpl->tpl_vars['chg']->value){?><?php $_smarty_tpl->createLocalArrayVariable('modbuttons', null, 3);
$_smarty_tpl->tpl_vars['modbuttons']->value['chg'] = 'Change reinvestment rate';
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons'];?><?php }?><?php $_smarty_tpl->tpl_vars['add'] = new Smarty_variable($_smarty_tpl->tpl_vars['el']->value['pEnAdd'], null, 0);?><?php $_smarty_tpl->tpl_vars['sub'] = new Smarty_variable((($_smarty_tpl->tpl_vars['el']->value['pClComis']<100)&&($_smarty_tpl->tpl_vars['el']->value['dNPer']>=$_smarty_tpl->tpl_vars['el']->value['pMPer'])), null, 0);?><?php $_smarty_tpl->tpl_vars['modform'] = new Smarty_variable(array(), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modform'] = clone $_smarty_tpl->tpl_vars['modform']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modform'] = clone $_smarty_tpl->tpl_vars['modform'];?><?php if (($_smarty_tpl->tpl_vars['el']->value['dState']==1)&&($_smarty_tpl->tpl_vars['add']->value||$_smarty_tpl->tpl_vars['sub']->value)){?><?php $_smarty_tpl->tpl_vars['modform'] = new Smarty_variable(array(1=>'','Sum'=>array('$','Amount to change!!',array('sum_empty'=>'enter amount','sum_wrong'=>'Incorrect sum','low_bal1'=>'Insufficient funds','cant_add'=>'Unable to reinvest','cant_sub'=>'Unable to withdraw','plan_not_found'=>'No matching investment plan'),'comment'=>" <i><small>".($_smarty_tpl->tpl_vars['el']->value['cCurr'])."</small></i>",'default'=>0)), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modform'] = clone $_smarty_tpl->tpl_vars['modform']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modform'] = clone $_smarty_tpl->tpl_vars['modform'];?><?php if ($_smarty_tpl->tpl_vars['add']->value){?><?php $_smarty_tpl->createLocalArrayVariable('modbuttons', null, 3);
$_smarty_tpl->tpl_vars['modbuttons']->value['add'] = 'Reinvest';
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons'];?><?php }?><?php if ($_smarty_tpl->tpl_vars['sub']->value){?><?php $_smarty_tpl->createLocalArrayVariable('modbuttons', null, 3);
$_smarty_tpl->tpl_vars['modbuttons']->value['sub'] = 'Withdraw';
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['modbuttons'] = clone $_smarty_tpl->tpl_vars['modbuttons'];?><?php }?><?php }?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'depo/admin/plan'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>valueIf($_smarty_tpl->tpl_vars['from_admin']->value,'Deposit'),'form_class'=>'form-horizontal','row_wrap'=>'form-group','label_class'=>'col-sm-6 control-label','input_class'=>'form-control','input_wrap'=>'col-sm-6','fields'=>array('dID'=>array(),'duID'=>array(),'dcID'=>array(),'dState'=>array('X','State',0,"<b>".($_smarty_tpl->tpl_vars['ststrs']->value[$_smarty_tpl->tpl_vars['el']->value['dState']])."</b>"),'dCTS'=>array('X','Created'),'uLogin'=>array('X','User','skip'=>!$_smarty_tpl->tpl_vars['from_admin']->value),'Bal'=>array('U','balance/bal.tpl','skip'=>!$_smarty_tpl->tpl_vars['from_admin']->value),'cName'=>array('X','Payment system'),'dZD'=>array('X','Sum',0,_z($_smarty_tpl->tpl_vars['el']->value['dZD'],$_smarty_tpl->tpl_vars['el']->value['dcID'],1)),'pName'=>array('X','Plan',0,valueIf($_smarty_tpl->tpl_vars['from_admin']->value,"<a href=\"".$_tmp1."?id=".($_smarty_tpl->tpl_vars['el']->value['dpID'])."\" target=\"_blank\">".($_smarty_tpl->tpl_vars['el']->value['pName'])."</a>")),'dN'=>array('X','Times charged',0,($_smarty_tpl->tpl_vars['el']->value['dNPer'])." of ".($_smarty_tpl->tpl_vars['el']->value['pNPer'])),'dLTS'=>array('X','Last charged'),'dNTS'=>array('X','Next accrual'),'dCompnd'=>array('X','Reinvestment rate <<capitalization>>','skip'=>$_smarty_tpl->tpl_vars['chg']->value),'Compnd'=>array('%','Reinvestment rate <<capitalization>>',array('compnd_wrong'=>"Incorrect value [".($_smarty_tpl->tpl_vars['cmin']->value)."..".($_smarty_tpl->tpl_vars['cmax']->value)."]"),'default'=>$_smarty_tpl->tpl_vars['el']->value['dCompnd'],'skip'=>!$_smarty_tpl->tpl_vars['chg']->value),'dM'=>array('X','Pre-term withdrawal',0,valueIf($_smarty_tpl->tpl_vars['el']->value['pClComis']>=100,'Not available',valueIf($_smarty_tpl->tpl_vars['el']->value['dNPer']>=$_smarty_tpl->tpl_vars['el']->value['pMPer'],"Available","Accruals left: ".(($_smarty_tpl->tpl_vars['el']->value['pMPer']-$_smarty_tpl->tpl_vars['el']->value['dNPer'])))),'skip'=>($_smarty_tpl->tpl_vars['el']->value['dState']>1)))+$_smarty_tpl->tpl_vars['modform']->value,'values'=>$_smarty_tpl->tpl_vars['el']->value,'errors'=>array('oper_disabled'=>'Operation is complete'),'btn_text'=>' ','btns'=>$_smarty_tpl->tpl_vars['modbuttons']->value), 0);?>
*Reinvestment is only available on Saturdays according to the <a href="/rules">regulations</a> of the project.
<?php }} ?>