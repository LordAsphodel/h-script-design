<?php /* Smarty version Smarty-3.1.8, created on 2017-09-05 17:42:57
         compiled from "tpl/ru/balance/_oper.data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1819523725958a611801300-74579723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7722a785a0ac3a3bf59129f5ea4aa2e1c233518' => 
    array (
      0 => 'tpl/ru/balance/_oper.data.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1819523725958a611801300-74579723',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958a61183bcb7_84880028',
  'variables' => 
  array (
    'el' => 0,
    'from_admin' => 0,
    'today' => 0,
    'ro' => 0,
    'oComis' => 0,
    's1' => 0,
    's2' => 0,
    's3' => 0,
    'defaultbatch' => 0,
    'dfields' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958a61183bcb7_84880028')) {function content_5958a61183bcb7_84880028($_smarty_tpl) {?><h2>Данные платежа через <?php echo $_smarty_tpl->tpl_vars['el']->value['cName'];?>
,<br>произведенного вручную<?php if (!$_smarty_tpl->tpl_vars['from_admin']->value&&($_smarty_tpl->tpl_vars['el']->value['oOper']=='CASHIN')){?> и<br> реквизиты плательщика<?php }?></h2><?php $_smarty_tpl->tpl_vars['s1'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['el']->value['cCID']=='BTCE','BTC-E код','Batch-номер!! <<операции/транзакции>>'), null, 0);?><?php $_smarty_tpl->tpl_vars['s2'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['el']->value['cCID']=='BTCE','Введите код','укажите номер операции'), null, 0);?><?php $_smarty_tpl->tpl_vars['s3'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['el']->value['cCID']=='BTCE','Код уже используется','номер используется'), null, 0);?><?php $_smarty_tpl->tpl_vars['ro'] = new Smarty_variable(!$_smarty_tpl->tpl_vars['from_admin']->value&&($_smarty_tpl->tpl_vars['el']->value['oState']>1), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'data','fields'=>array('oID'=>$_smarty_tpl->tpl_vars['el']->value['oID'],'date'=>array('D','Дата!!',array('data_date_wrong'=>'неверная дата'),'default'=>$_smarty_tpl->tpl_vars['today']->value,'readonly'=>$_smarty_tpl->tpl_vars['ro']->value),'sum'=>array('X','Сумма',0,_z($_smarty_tpl->tpl_vars['el']->value['oSum']-$_smarty_tpl->tpl_vars['oComis']->value,$_smarty_tpl->tpl_vars['el']->value['ocID'],1)),'batch'=>array('T',$_smarty_tpl->tpl_vars['s1']->value,array('data_batch_wrong'=>$_smarty_tpl->tpl_vars['s2']->value,'batch_exists'=>$_smarty_tpl->tpl_vars['s3']->value),'default'=>$_smarty_tpl->tpl_vars['defaultbatch']->value,'readonly'=>$_smarty_tpl->tpl_vars['ro']->value),'memo'=>array('A','Примечание','readonly'=>$_smarty_tpl->tpl_vars['ro']->value))+(array)$_smarty_tpl->tpl_vars['dfields']->value,'values'=>$_smarty_tpl->tpl_vars['el']->value['oParams2'],'btn_text'=>valueIf($_smarty_tpl->tpl_vars['ro']->value,' ',valueIf($_smarty_tpl->tpl_vars['el']->value['oParams2']['batch'],'Изменить','Создать')),'hide_cancel'=>true), 0);?>
<?php }} ?>