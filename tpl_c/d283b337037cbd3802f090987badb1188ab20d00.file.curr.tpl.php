<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 18:46:26
         compiled from "tpl/ru/balance/admin/curr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1352637349595741ec2599a8-09474029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd283b337037cbd3802f090987badb1188ab20d00' => 
    array (
      0 => 'tpl/ru/balance/admin/curr.tpl',
      1 => 1508709686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1352637349595741ec2599a8-09474029',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595741ec316838_37664994',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595741ec316838_37664994')) {function content_595741ec316838_37664994($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Платежная система'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['el']->value){?><h2><?php if ($_smarty_tpl->tpl_vars['el']->value['cCID']=='*'){?>Внутренняя платежная система<?php }else{ ?>Платежная система [<?php echo $_smarty_tpl->tpl_vars['el']->value['cCID'];?>
]<?php }?></h2><?php if (isset($_GET['testapi'])){?><h2>Тест API</h2><p class="info"><?php if ($_smarty_tpl->tpl_vars['res']->value['result']=='OK'){?>Баланс кошелька: <b><?php echo _z($_smarty_tpl->tpl_vars['res']->value['sum'],$_smarty_tpl->tpl_vars['el']->value['cID'],-1);?>
</b> <?php echo $_smarty_tpl->tpl_vars['el']->value['cCurr'];?>
.<br>Тест успешно пройден!<?php }else{ ?>Ошибка <b><?php echo $_smarty_tpl->tpl_vars['res']->value['result'];?>
</b><?php }?></p><?php }?><?php if ($_smarty_tpl->tpl_vars['sfields']->value){?><?php $_smarty_tpl->tpl_vars['sfields'] = new Smarty_variable(array(1=>'SCI <small>(пополнение)</small>')+$_smarty_tpl->tpl_vars['sfields']->value, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['afields']->value){?><?php $_smarty_tpl->tpl_vars['afields'] = new Smarty_variable(array(2=>'API <small>(вывод)</small>')+$_smarty_tpl->tpl_vars['afields']->value, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['params'] = new Smarty_variable(array(77=>'Живой баланс','cBal'=>array('X','Последнее значение'),'cBalMin'=>array('$','Оповещать, если баланс ниже Х'),5=>'Пополнение','cCASHINMode'=>array('S','Режим',0,array(0=>'отключено',1=>'ручной',2=>'через мерчант',3=>'ручной и через мерчант')),'cCASHINMin'=>array('$','Мин. сумма'),'cCASHINMax'=>array('$','Макс. сумма <<0 - по умолчанию>>'),'cCASHINInt'=>array('C','Только целыми суммами','default'=>0),'cCASHINComis'=>array('%','Процент комиссии'),'cCASHINComisMin'=>array('$','Мин. сумма комиссии'),'cCASHINComisMax'=>array('$','Макс. сумма комиссии <<0 - нет>>'),6=>'Вывод','cCASHOUTMode'=>array('S','Режим',0,array(0=>'отключен',1=>'ручной',2=>'мгновенно')),'cCASHOUTMin'=>array('$','Мин. сумма'),'cCASHOUTMax'=>array('$','Макс. сумма <<0 - по умолчанию>>'),'cCASHOUTInt'=>array('C','Только целыми суммами','default'=>0),'cCASHOUTComis'=>array('%','Процент комиссии'),'cCASHOUTComisMin'=>array('$','Мин. сумма комиссии'),'cCASHOUTComisMax'=>array('$','Макс. сумма комиссии <<0 - нет>>'),'cCASHOUTLimitPer'=>array('I','Период лимита <<в часах, 0 - нет>>'),'cCASHOUTLimit'=>array('$','Сумма лимита'),7=>'Обмен','cEXMode'=>array('S','Режим',0,array(0=>'отключен',1=>'ручной',2=>'мгновенно')),'cEXOut'=>array('%','Корр. <<в процентах к курсу>> при обмене НА внут. валюту'),'cEXIn'=>array('%','Корр. <<в процентах к курсу>> при обмене С внут. валюты'),'cEXMin'=>array('$','Мин. сумма'),'cEXMax'=>array('$','Макс. сумма <<0 - по умолчанию>>'),'cEXInt'=>array('C','Только целыми суммами','default'=>0),'cEXComis'=>array('%','Процент комиссии'),'cEXComisMin'=>array('$','Мин. сумма комиссии'),'cEXComisMax'=>array('$','Макс. сумма комиссии <<0 - нет>>'),8=>'Перевод','cTRMode'=>array('S','Режим',0,array(0=>'отключен',1=>'ручной',2=>'мгновенно')),'cTRMin'=>array('$','Мин. сумма'),'cTRMax'=>array('$','Макс. сумма <<0 - по умолчанию>>'),'cTRInt'=>array('C','Только целыми суммами','default'=>0),'cTRComis'=>array('%','Процент комиссии'),'cTRComisMin'=>array('$','Мин. сумма комиссии'),'cTRComisMax'=>array('$','Макс. сумма комиссии <<0 - нет>>'),'Покупка','cBUYMode'=>array('S','Режим',0,array(0=>'отключена',1=>'ручной',2=>'мгновенно')),'Продажа','cSELLMode'=>array('S','Режим',0,array(0=>'отключена',1=>'ручной',2=>'мгновенно')),'Услуга','cBUY2Mode'=>array('S','Режим',0,array(0=>'отключена',1=>'ручной',2=>'мгновенно')),'Оказание услуги','cSELL2Mode'=>array('S','Режим',0,array(0=>'отключено',1=>'ручной',2=>'мгновенно')),'Вклад','cGIVEMode'=>array('S','Режим',0,array(0=>'отключен',1=>'ручной',2=>'мгновенно')),'Снятие','cTAKEMode'=>array('S','Режим',0,array(0=>'отключено',1=>'ручной',2=>'мгновенно'))), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('fields'=>array('cID'=>array(),'cCID'=>array(),'cDisabled'=>array('C','Отключена','default'=>1),'cHidden'=>array('C','Скрыта','default'=>1),'cMTS'=>array('X','Исправлено','skip'=>!$_smarty_tpl->tpl_vars['el']->value['cMTS']),99=>'Вид','cName'=>array('T','Наименование','size'=>30,'comment'=>$_smarty_tpl->tpl_vars['cName']->value),'cCurr'=>array('T','Валюта','comment'=>$_smarty_tpl->tpl_vars['el']->value['cCurrID']),'cNumDec'=>array('I','Кол-во знаков после запятой (0-6) <<0 - по умолчанию>>'))+(array)$_smarty_tpl->tpl_vars['pfields']->value+(array)$_smarty_tpl->tpl_vars['sfields']->value+(array)$_smarty_tpl->tpl_vars['afields']->value+$_smarty_tpl->tpl_vars['params']->value,'values'=>$_smarty_tpl->tpl_vars['el']->value), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'add','title'=>'Новая платежная система','fields'=>array('PSys'=>array('S','',array('psys_not_selected'=>'выберите плат.систему'),array(0=>'- выберите -')+(array)$_smarty_tpl->tpl_vars['cids']->value)),'btn_text'=>'Добавить'), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>