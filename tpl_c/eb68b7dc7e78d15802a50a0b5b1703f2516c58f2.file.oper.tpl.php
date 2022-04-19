<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:08:03
         compiled from "tpl/ru/balance/oper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34665814459574c9dc9e820-98656590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb68b7dc7e78d15802a50a0b5b1703f2516c58f2' => 
    array (
      0 => 'tpl/ru/balance/oper.tpl',
      1 => 1508709662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34665814459574c9dc9e820-98656590',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59574c9dd78ca8_95732603',
  'variables' => 
  array (
    'el' => 0,
    'op_names' => 0,
    'dfields' => 0,
    'opc' => 0,
    'b' => 0,
    'oper' => 0,
    'currs' => 0,
    'p' => 0,
    'clist' => 0,
    'clist2' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59574c9dd78ca8_95732603')) {function content_59574c9dd78ca8_95732603($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Операция'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('balance/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['el']->value){?><h1><?php echo $_smarty_tpl->tpl_vars['op_names']->value[$_smarty_tpl->tpl_vars['el']->value['oOper']];?>
</h1><?php if (isset($_GET['check'])){?><p class="info">Ожидание подтверждения оплаты...</p><?php }else{ ?><?php if (($_smarty_tpl->tpl_vars['el']->value['oState']<=1)){?><?php $_smarty_tpl->tpl_vars['opc'] = new Smarty_variable((($_smarty_tpl->tpl_vars['el']->value['oOper']!='CASHIN')||$_smarty_tpl->tpl_vars['dfields']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['opc']->value){?><p class="info">Операция НЕ подтверждена Вами!</p><?php }?><?php }elseif($_smarty_tpl->tpl_vars['el']->value['oState']==2){?><p class="info">Операция будет обработана Администратором в ближайшее время</p><?php }?><?php $_smarty_tpl->tpl_vars['b'] = new Smarty_variable(array(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['el']->value['oState']<=2){?><?php $_smarty_tpl->createLocalArrayVariable('b', null, 0);
$_smarty_tpl->tpl_vars['b']->value['cancel'] = 'Отменить';?><?php }?><?php if ($_smarty_tpl->tpl_vars['el']->value['oState']>=5){?><?php $_smarty_tpl->createLocalArrayVariable('b', null, 0);
$_smarty_tpl->tpl_vars['b']->value['del'] = 'Удалить';?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('balance/_oper.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bt'=>valueIf($_smarty_tpl->tpl_vars['opc']->value,'Подтвердить',' '),'b'=>$_smarty_tpl->tpl_vars['b']->value,'errors'=>array('oper_not_found'=>'неверный статус операции','oper_disabled'=>'операция отключена','low_bal1'=>'недостаточно средств','data_date_wrong'=>'неверная дата операции','data_sum_wrong'=>'неверная сумма','data_batch_wrong'=>'не задан batch-номер операции','batch_exists'=>'операция с таким batch-номером уже существует')), 0);?>
<?php }?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['oper'] = new Smarty_variable($_GET['add'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['oper']->value=='CASHIN'){?><div class="page-heading animateed fadeInDown"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Пополнить баланс</h1></div><div class="clear"></div></div><div class="row"><div class="col-sm-12"><div class="box-info full animated fadeInDown"><h2 class="text-left"><i class="fa fa-info"></i> Пополнить баланс</h2><div id="cab-payment-info" class="col-md-12 dep_ col-lg-12 col-sm-12 col-xs-12 collapse in"><h3 class="box-title">ВЫБЕРИТЕ ПЛАТЁЖНУЮ СИСТЕМУ</h3><form method="post" name="add"><input name="Oper" id="add_Oper" value="CASHIN" type="hidden"><div class="row" id="pay_list" name="pay_system"><?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['p']->value['cHidden']==1){?><?php continue 1?><?php }?><div class="col-lg-4 col-sm-4 col-xs-12 waves-effect waves-light"><div class="panel panel-pay"><div class="panel-heading"><div class="radio radio-info"><input type="radio" name="PSys" id="<?php echo $_smarty_tpl->tpl_vars['p']->value['cID'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['cID'];?>
" checked=""><label for="<?php echo $_smarty_tpl->tpl_vars['p']->value['cID'];?>
"><img class="img-responsive" src="assets/img/<?php echo $_smarty_tpl->tpl_vars['p']->value['cName'];?>
.png"></label></div></div></div></div><?php } ?></div><div id="cash" class="row"><div class="col-lg-8 col-sm-8 col-sm-8 col-xs-12 p-b-10"><div class="input-group bootstrap-touchspin"><span id="reinvest-currency" class="input-group-addon bootstrap-touchspin-prefix">$</span><input type="text" name="Sum" id="start-refill-amount" class="input-lg form-control" placeholder="Введите сумму"/></div></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-b-10"><input type="hidden" name="action" value="start_refill"><button type="submit" name="add_btn" id="start-refill-button" class="btn btn-primary btn-lg pull-left waves-effect waves-light col-lg-12 col-sm-12 col-xs-12">Пополнить</button></div></div></form></div></div></div></div><?php }elseif($_smarty_tpl->tpl_vars['oper']->value=='CASHOUT'){?><div class="page-heading animateed fadeInDown"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Вывод средств</h1></div><div class="clear"></div></div><div class="row"><div class="col-sm-12"><div class="box-info full animated fadeInDown"><h2 class="text-left"><i class="fa fa-money"></i> Вывод средств</h2><div id="cab-payment-info" class="col-md-12 dep_ col-lg-12 col-sm-12 col-xs-12 collapse in"><h3 class="box-title">ВЫБЕРИТЕ ПЛАТЁЖНУЮ СИСТЕМУ</h3><form method="post" name="add"><input name="Oper" id="add_Oper" value="CASHOUT" type="hidden"><div class="row" id="pay_list" name="pay_system"><?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['p']->value['cHidden']==1){?><?php continue 1?><?php }?><div class="col-lg-4 col-sm-4 col-xs-12 waves-effect waves-light"><div class="panel panel-pay"><div class="panel-heading"><div class="radio radio-info"><input type="radio" name="PSys" id="<?php echo $_smarty_tpl->tpl_vars['p']->value['cID'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['cID'];?>
" checked=""><label for="<?php echo $_smarty_tpl->tpl_vars['p']->value['cID'];?>
"><img class="img-responsive" src="assets/img/<?php echo $_smarty_tpl->tpl_vars['p']->value['cName'];?>
.png"></label></div></div></div></div><?php } ?></div><div id="cash" class="row"><div class="col-lg-8 col-sm-8 col-sm-8 col-xs-12 p-b-10"><div class="input-group bootstrap-touchspin"><span id="reinvest-currency" class="input-group-addon bootstrap-touchspin-prefix">$</span><input type="text" name="Sum" id="start-refill-amount" class="input-lg form-control" placeholder="Введите сумму"/></div></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-b-10"><input type="hidden" name="action" value="start_refill"><button type="submit" name="add_btn" id="start-refill-button" class="btn btn-primary btn-lg pull-left waves-effect waves-light col-lg-12 col-sm-12 col-xs-12">Вывести</button></div></div></form></div></div></div></div><?php }elseif($_smarty_tpl->tpl_vars['oper']->value=='EX'){?><h1>Обмен валют</h1><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'add','fields'=>array('Oper'=>$_smarty_tpl->tpl_vars['oper']->value,'PSys'=>array('S','С платежной системы!!',array('psys_empty'=>'плат.система не указана'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- выберите -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value),'Sum'=>array('$','Сумма!!',array('sum_wrong'=>'неверная сумма'),'comment'=>' <i><span id="ccurr"></span></i>'),'Comis'=>array('X','Комиссия','comment'=>' <i><span id="csum"></span></i>'),'PSys2'=>array('S','На платежную систему!!',array('psys2_empty'=>'плат.система не указана','psys2_equal_psys'=>'плат.системы должны различаться','ex_rate_not_set'=>'Курс валюты не задан'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist2']->value)>1,array(0=>'- выберите -'),array())+(array)$_smarty_tpl->tpl_vars['clist2']->value),'Sum2'=>array('X','Сумма к получению','comment'=>' <i><span id="sum2"></span></i>')),'errors'=>array('low_bal1'=>'недостаточно средств','oper_disabled'=>'операция отключена')), 0);?>
<?php }elseif($_smarty_tpl->tpl_vars['oper']->value=='TR'){?><h1>Перевод средств</h1><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'add','fields'=>array('Oper'=>$_smarty_tpl->tpl_vars['oper']->value,'PSys'=>valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr'],1,array('S','Платежная система!!',array('psys_empty'=>'плат.система не указана'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- выберите -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value)),'Sum'=>array('$','Сумма!!',array('sum_wrong'=>'неверная сумма'),'comment'=>' <i><span id="ccurr"></span></i>'),'Comis'=>array('X','Комиссия','comment'=>' <i><span id="csum"></span></i>'),'Sum2'=>array('X','Получателю будет переведена сумма','comment'=>' <i><span id="sum2"></span></i>'),'Login2'=>array('T','Получатель!!',array('user2_empty'=>'пользователь не найден','user2_equal_user'=>'пользователи должны различаться')),'Memo'=>array('W','Примечание','size'=>4)),'errors'=>array('low_bal1'=>'недостаточно средств','oper_disabled'=>'операция отключена')), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('balance/_oper.js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('oper'=>$_smarty_tpl->tpl_vars['oper']->value,'use_sum2'=>true), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>