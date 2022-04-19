<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 00:18:20
         compiled from "tpl/ru/balance/admin/oper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97453685958a5f6bd08d7-67143617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb863a6e36a2dac5898af6af51b31d6285a27426' => 
    array (
      0 => 'tpl/ru/balance/admin/oper.tpl',
      1 => 1508709686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97453685958a5f6bd08d7-67143617',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958a5f6c62fd0_35066208',
  'variables' => 
  array (
    'el' => 0,
    'op_names' => 0,
    'b' => 0,
    'oper' => 0,
    'clist' => 0,
    '_cfg' => 0,
    'use_sum2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958a5f6c62fd0_35066208')) {function content_5958a5f6c62fd0_35066208($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Операция'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('balance/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['el']->value){?><h2><?php echo $_smarty_tpl->tpl_vars['op_names']->value[$_smarty_tpl->tpl_vars['el']->value['oOper']];?>
</h2><?php $_smarty_tpl->tpl_vars['b'] = new Smarty_variable(array(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['el']->value['oState']<=2){?><?php $_smarty_tpl->createLocalArrayVariable('b', null, 0);
$_smarty_tpl->tpl_vars['b']->value['cancel'] = 'Отклонить';?><?php }?><?php if ($_smarty_tpl->tpl_vars['el']->value['oState']>=4){?><?php $_smarty_tpl->createLocalArrayVariable('b', null, 0);
$_smarty_tpl->tpl_vars['b']->value['del'] = 'Удалить';?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('balance/_oper.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bt'=>valueIf($_smarty_tpl->tpl_vars['el']->value['oState']<=2,'Выполнить',' '),'b'=>$_smarty_tpl->tpl_vars['b']->value,'errors'=>array('oper_not_found'=>'неверный статус операции','oper_disabled'=>'операция отключена','low_bal1'=>'недостаточно средств','data_date_wrong'=>'неверная дата операции','data_sum_wrong'=>'неверная сумма','data_batch_wrong'=>'не задан batch-номер операции','batch_exists'=>'операция с таким batch-номером уже существует','send_error'=>'ошибка при отправке средств'),'from_admin'=>true), 0);?>
<?php }else{ ?><?php if ($_GET['add']){?><?php $_smarty_tpl->tpl_vars['oper'] = new Smarty_variable($_GET['add'], null, 0);?><?php $_smarty_tpl->tpl_vars['use_sum2'] = new Smarty_variable(in_array($_smarty_tpl->tpl_vars['oper']->value,array('CASHIN','CASHOUT','EX','TR','SELL')), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'add','title'=>$_smarty_tpl->tpl_vars['op_names']->value[$_smarty_tpl->tpl_vars['oper']->value],'fields'=>array('Oper'=>$_smarty_tpl->tpl_vars['oper']->value,'Login'=>$_GET['user'],'User'=>array('X','Пользователь',0,$_GET['user']),'Bal'=>array('U','balance/bal.tpl'),'PSys'=>array('S',valueIf($_smarty_tpl->tpl_vars['oper']->value=='CALCIN','Плат. система!! или Депозит!!','Плат. система!!'),array('depo_wrong'=>'неверный депозит','psys_empty'=>'плат. система не указана'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- выберите -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value),'Sum'=>array('$',valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr']&&in_array($_smarty_tpl->tpl_vars['oper']->value,array('CASHOUT')),'Сумма!! <<в ед. внутр. валюты>>','Сумма!!'),array('sum_wrong'=>'неверная сумма'),'comment'=>' <i><span id="ccurr"></span></i>'),'Comis'=>array('X','Комиссия','comment'=>' <i><span id="csum"></span></i>','skip'=>!$_smarty_tpl->tpl_vars['use_sum2']->value),'PSys2'=>array('S',valueIf($_smarty_tpl->tpl_vars['oper']->value=='EX','На плат. систему!!','С плат. системы!!'),array('psys2_empty'=>'плат.система не указана','psys2_equal_psys'=>'плат.системы должны различаться'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- выберите -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value,'skip'=>($_smarty_tpl->tpl_vars['oper']->value!='EX')),'Sum2'=>array('X',valueIf($_smarty_tpl->tpl_vars['oper']->value=='CASHIN','Сумма к пополнению','Сумма к получению'),'comment'=>' <i><span id="sum2"></span></i>','skip'=>!$_smarty_tpl->tpl_vars['use_sum2']->value),'Login2'=>array('T',valueIf($_smarty_tpl->tpl_vars['oper']->value=='TR','Получатель!!','Отправитель!!'),array('user2_empty'=>'пользователь не найден','user2_equal_user'=>'пользователи должны различаться'),'skip'=>!in_array($_smarty_tpl->tpl_vars['oper']->value,array('TR','TRIN'))),'Memo'=>array('W','Описание','size'=>4)),'errors'=>array('oper_disabled'=>'операция отключена')), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('balance/_oper.js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('oper'=>$_smarty_tpl->tpl_vars['oper']->value,'use_sum2'=>$_smarty_tpl->tpl_vars['use_sum2']->value), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'add','title'=>'Новая операция','fields'=>array('Oper'=>array('S','Операция!!',array('oper_empty'=>'операция не указана','oper_wrong'=>'неизвестная операция'),array(0=>'- выберите -')+(array)$_smarty_tpl->tpl_vars['op_names']->value),'Login'=>array('T','Пользователь!!',array('user_empty'=>'пользователь не найден'),'default'=>$_GET['user'])),'btn_text'=>'Далее'), 0);?>
<?php }?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>