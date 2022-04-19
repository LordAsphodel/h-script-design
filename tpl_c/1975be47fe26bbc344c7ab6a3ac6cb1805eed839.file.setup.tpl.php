<?php /* Smarty version Smarty-3.1.8, created on 2017-10-28 17:15:28
         compiled from "tpl/ru/balance/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:331546092595d295a5fd736-58626782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1975be47fe26bbc344c7ab6a3ac6cb1805eed839' => 
    array (
      0 => 'tpl/ru/balance/admin/setup.tpl',
      1 => 1508709687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '331546092595d295a5fd736-58626782',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595d295a65eae5_31670829',
  'variables' => 
  array (
    'curr1' => 0,
    '_cfg' => 0,
    'cfg' => 0,
    'lastupdate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d295a65eae5_31670829')) {function content_595d295a65eae5_31670829($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Настройки'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['curr1']->value){?><p class="info"><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr']){?>Скрипт работает в режиме "Единая внутренняя валюта (<?php echo $_smarty_tpl->tpl_vars['curr1']->value['cCurrID'];?>
)".<br>Это означает, что все операции в системе будут выполняться только в этой валюте,<br>все средства, пополненные с внешних платежных систем будут автоматически<br>сконвертированы во внутреннюю валюту по нижеуказанному курсу<?php }else{ ?>Настроена всего одна платежная система и скрипт принимает ее за единственную<?php }?></p><?php }?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('RegBonus'=>array('$','Сумма бонуса за регистрацию <<в ед. внутренней валюты>>'),'LockWallets'=>array('C','Запретить изменять платежные реквизиты'),1=>'Курсы (в ед. внутренней вылюты)','RateUSD'=>array('$','1 USD ='),'RateEUR'=>array('$','1 EUR ='),'RateRUB'=>array('$','1 RUB ='),'UpdateRates'=>array('C','Обновлять курсы автоматически <<с сайта cbr.ru>>','comment'=>$_smarty_tpl->tpl_vars['lastupdate']->value),'RateBTC'=>array('$','1 BTC ='),'Update'=>array('C','Обновлять балансы кошельков'),'Пополнение','CASHINText'=>array('T','Текст <<доступны #id#, #user#>>','size'=>30),'ForcePayer'=>array('C','Выставлять <<фиксировать>> номер плательщика'),'Вывод','CASHOUTText'=>array('T','Текст <<доступны #id#, #user#>>','size'=>30),'NeedPIN'=>array('C','Требовать ввода PIN-кода <<при заявках вручную>>'),'Автоматический вывод','AWDBONUS'=>array('C','Бонус'),'AWDEXIN'=>array('C','Обмен'),'AWDTRIN'=>array('C','Приход <<Перевод>>'),'AWDSELL'=>array('C','Продажа'),'AWDSELL2'=>array('C','Оказание услуги'),'AWDREF'=>array('C','Рефские'),'AWDTAKE'=>array('C','Снятие'),'AWDCALCIN'=>array('C','Начисление'))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>