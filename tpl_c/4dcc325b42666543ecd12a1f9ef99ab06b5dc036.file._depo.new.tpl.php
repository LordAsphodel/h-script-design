<?php /* Smarty version Smarty-3.1.8, created on 2017-07-11 21:25:26
         compiled from "tpl/ru/depo/_depo.new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8354801759651816ce6706-17023856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dcc325b42666543ecd12a1f9ef99ab06b5dc036' => 
    array (
      0 => 'tpl/ru/depo/_depo.new.tpl',
      1 => 1498731102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8354801759651816ce6706-17023856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'from_admin' => 0,
    '_cfg' => 0,
    'clist' => 0,
    'plans' => 0,
    'pcmax' => 0,
    'el' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59651816d56fb6_76935545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59651816d56fb6_76935545')) {function content_59651816d56fb6_76935545($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'new','title_new'=>valueIf($_smarty_tpl->tpl_vars['from_admin']->value,'Новый депозит'),'fields'=>array('Login'=>$_GET['user'],'User'=>array('X','Пользователь',0,$_GET['user'],'skip'=>!$_smarty_tpl->tpl_vars['from_admin']->value),'Bal'=>array('U','balance/bal.tpl','skip'=>!$_smarty_tpl->tpl_vars['from_admin']->value&&$_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr']),'PSys'=>valueIf(!$_smarty_tpl->tpl_vars['from_admin']->value&&$_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr'],1,array('S','Плат. система!!',array('psys_empty'=>'укажите плат.систему','psys_wrong'=>'неверная плат.система'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- выберите -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value)),'Sum'=>array('$','Сумма!!',array('sum_empty'=>'укажите сумму','sum_wrong'=>'неверная сумма'),'comment'=>' <i><span id="ccurr"></span></i>'),'Plan'=>array('S','План',array('plan_wrong'=>'неверный план'),array(0=>'- авто -')+(array)$_smarty_tpl->tpl_vars['plans']->value,'skip'=>(count($_smarty_tpl->tpl_vars['plans']->value)<=1)),'Compnd'=>array('%','Процент реинвеста <<капитализация>>',array('compnd_wrong'=>"неверное значение [".($_smarty_tpl->tpl_vars['cmin']->value)."..".($_smarty_tpl->tpl_vars['cmax']->value)."]",'compnd_wrong1'=>"неверное значение для плана '".($_smarty_tpl->tpl_vars['cplan']->value)."'"),'skip'=>!$_smarty_tpl->tpl_vars['pcmax']->value)),'values'=>$_smarty_tpl->tpl_vars['el']->value,'errors'=>array('oper_disabled'=>'операция запрещена','low_bal1'=>'недостаточно средств')), 0);?>
<script type="text/javascript">function updateCurr(){$('#ccurr').html('');$.ajax({type: 'POST',url: 'ajax',data: 'module=balance&do=getcurr'+'&cid='+$('#new_PSys').val(),success:function(ex){$('#ccurr').html(ex);}});}$('#new_PSys').change(updateCurr);updateCurr();</script><?php }} ?>