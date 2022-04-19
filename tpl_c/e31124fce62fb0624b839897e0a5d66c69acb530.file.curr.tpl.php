<?php /* Smarty version Smarty-3.1.8, created on 2017-09-05 21:25:50
         compiled from "tpl/en/balance/admin/curr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46810737159aeec2e08f9b7-22566261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e31124fce62fb0624b839897e0a5d66c69acb530' => 
    array (
      0 => 'tpl/en/balance/admin/curr.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46810737159aeec2e08f9b7-22566261',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'el' => 0,
    'res' => 0,
    'sfields' => 0,
    'afields' => 0,
    'cName' => 0,
    'pfields' => 0,
    'params' => 0,
    'cids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59aeec2e14be73_33292572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aeec2e14be73_33292572')) {function content_59aeec2e14be73_33292572($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Internal payment system'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['el']->value){?><h2><?php if ($_smarty_tpl->tpl_vars['el']->value['cCID']=='*'){?>Internal payment system<?php }else{ ?>Payment system [<?php echo $_smarty_tpl->tpl_vars['el']->value['cCID'];?>
]<?php }?></h2><?php if (isset($_GET['testapi'])){?><h2>Тест API</h2><p class="info"><?php if ($_smarty_tpl->tpl_vars['res']->value['result']=='OK'){?>Wallet balance: <b><?php echo _z($_smarty_tpl->tpl_vars['res']->value['sum'],$_smarty_tpl->tpl_vars['el']->value['cID'],-1);?>
</b> <?php echo $_smarty_tpl->tpl_vars['el']->value['cCurr'];?>
.<br>Test passed successfully!<?php }else{ ?>Error <b><?php echo $_smarty_tpl->tpl_vars['res']->value['result'];?>
</b><?php }?></p><?php }?><?php if ($_smarty_tpl->tpl_vars['sfields']->value){?><?php $_smarty_tpl->tpl_vars['sfields'] = new Smarty_variable(array(1=>'SCI <small>(cashin)</small>')+$_smarty_tpl->tpl_vars['sfields']->value, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['afields']->value){?><?php $_smarty_tpl->tpl_vars['afields'] = new Smarty_variable(array(2=>'API <small>(cashout)</small>')+$_smarty_tpl->tpl_vars['afields']->value, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['params'] = new Smarty_variable(array(77=>'Live balance','cBal'=>array('X','Last value'),'cBalMin'=>array('$','Warn if balance is less than Х'),5=>'Cahin','cCASHINMode'=>array('S','Mode',0,array(0=>'Disabled',1=>'Manual',2=>'Merchant',3=>'Manual and merchant')),'cCASHINMin'=>array('$','Min sum'),'cCASHINMax'=>array('$','Max sum <<0 - default>>'),'cCASHINInt'=>array('C','Only integer sums','default'=>0),'cCASHINComis'=>array('%','Comission rate'),'cCASHINComisMin'=>array('$','Min comission'),'cCASHINComisMax'=>array('$','Max comission <<0 - none>>'),6=>'Withdrawal','cCASHOUTMode'=>array('S','Mode',0,array(0=>'Disabled',1=>'Manual',2=>'Instant')),'cCASHOUTMin'=>array('$','Min sum'),'cCASHOUTMax'=>array('$','Max sum <<0 - default>>'),'cCASHOUTInt'=>array('C','Only integer','default'=>0),'cCASHOUTComis'=>array('%','Comission rate'),'cCASHOUTComisMin'=>array('$','Min comission'),'cCASHOUTComisMax'=>array('$','Max comission <<0 - none>>'),'cCASHOUTLimitPer'=>array('I','limit period <<hours, 0 - none>>'),'cCASHOUTLimit'=>array('$','Limit'),7=>'Exchange','cEXMode'=>array('S','Режим',0,array(0=>'отключен',1=>'ручной',2=>'мгновенно')),'cEXOut'=>array('%','Корр. <<в процентах к курсу>> при обмене НА внут. валюту'),'cEXIn'=>array('%','Корр. <<в процентах к курсу>> при обмене С внут. валюты'),'cEXMin'=>array('$','Мин. сумма'),'cEXMax'=>array('$','Макс. сумма <<0 - по умолчанию>>'),'cEXInt'=>array('C','Только целыми суммами','default'=>0),'cEXComis'=>array('%','Процент комиссии'),'cEXComisMin'=>array('$','Мин. сумма комиссии'),'cEXComisMax'=>array('$','Макс. сумма комиссии <<0 - нет>>'),8=>'Перевод','cTRMode'=>array('S','Режим',0,array(0=>'отключен',1=>'ручной',2=>'мгновенно')),'cTRMin'=>array('$','Мин. сумма'),'cTRMax'=>array('$','Макс. сумма <<0 - по умолчанию>>'),'cTRInt'=>array('C','Только целыми суммами','default'=>0),'cTRComis'=>array('%','Процент комиссии'),'cTRComisMin'=>array('$','Мин. сумма комиссии'),'cTRComisMax'=>array('$','Макс. сумма комиссии <<0 - нет>>'),'Покупка','cBUYMode'=>array('S','Режим',0,array(0=>'отключена',1=>'ручной',2=>'мгновенно')),'Продажа','cSELLMode'=>array('S','Режим',0,array(0=>'отключена',1=>'ручной',2=>'мгновенно')),'Услуга','cBUY2Mode'=>array('S','Режим',0,array(0=>'отключена',1=>'ручной',2=>'мгновенно')),'Оказание услуги','cSELL2Mode'=>array('S','Режим',0,array(0=>'отключено',1=>'ручной',2=>'мгновенно')),'Вклад','cGIVEMode'=>array('S','Режим',0,array(0=>'отключен',1=>'ручной',2=>'мгновенно')),'Снятие','cTAKEMode'=>array('S','Режим',0,array(0=>'отключено',1=>'ручной',2=>'мгновенно'))), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('fields'=>array('cID'=>array(),'cCID'=>array(),'cDisabled'=>array('C','Отключена','default'=>1),'cHidden'=>array('C','Скрыта','default'=>1),'cMTS'=>array('X','Исправлено','skip'=>!$_smarty_tpl->tpl_vars['el']->value['cMTS']),99=>'Вид','cName'=>array('T','Наименование','size'=>30,'comment'=>$_smarty_tpl->tpl_vars['cName']->value),'cCurr'=>array('T','Валюта','comment'=>$_smarty_tpl->tpl_vars['el']->value['cCurrID']),'cNumDec'=>array('I','Кол-во знаков после запятой (0-6) <<0 - по умолчанию>>'))+(array)$_smarty_tpl->tpl_vars['pfields']->value+(array)$_smarty_tpl->tpl_vars['sfields']->value+(array)$_smarty_tpl->tpl_vars['afields']->value+$_smarty_tpl->tpl_vars['params']->value,'values'=>$_smarty_tpl->tpl_vars['el']->value), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'add','title'=>'New payment system','fields'=>array('PSys'=>array('S','',array('psys_not_selected'=>'Choose payment system'),array(0=>'- select -')+(array)$_smarty_tpl->tpl_vars['cids']->value)),'btn_text'=>'Add'), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>