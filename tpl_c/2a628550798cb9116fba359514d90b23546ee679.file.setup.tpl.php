<?php /* Smarty version Smarty-3.1.8, created on 2017-10-30 17:45:05
         compiled from "tpl/ru/depo/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1697328051595740b85e67b2-30480219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a628550798cb9116fba359514d90b23546ee679' => 
    array (
      0 => 'tpl/ru/depo/admin/setup.tpl',
      1 => 1508709690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1697328051595740b85e67b2-30480219',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595740b8639a80_92597514',
  'variables' => 
  array (
    '_cfg' => 0,
    'cfg' => 0,
    'depolasttime' => 0,
    'depolast' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595740b8639a80_92597514')) {function content_595740b8639a80_92597514($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Настройки'), 0);?>
<?php if (($_smarty_tpl->tpl_vars['_cfg']->value['Depo_ChargeMode']==1)&&!$_smarty_tpl->tpl_vars['_cfg']->value['Cron_Enabled']){?><p class="info">Для автоматических начислений <a href="<?php echo tplModuleToLink(array('module'=>'cron/admin/setup'),$_smarty_tpl);?>
">Планировщик</a> должен быть <b>включен</b></p><?php }?><?php ob_start();?><?php echo -$_smarty_tpl->tpl_vars['depolast']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('OneFromGroup'=>array('C','Доступен только один <<любой>> план из группы'),'AutoDepo'=>array('C','Автоматически делать вклад после пополнения'),'Interval'=>array('I','Активировать вклады не чаще чем 1 раз в N минут<br><<0 - нет ограничения>>'),'LastTime'=>array('X','Дата активации последнего вклада',0,$_smarty_tpl->tpl_vars['depolasttime']->value,'comment'=>valueIf($_smarty_tpl->tpl_vars['depolast']->value<0,"через ".$_tmp1." мин.",($_smarty_tpl->tpl_vars['depolast']->value)." мин. назад"),'skip'=>(abs($_smarty_tpl->tpl_vars['depolast']->value)>=60)),'ChargeMode'=>array('S','Начисление',0,array(0=>'отключено',1=>'каждому в свое время (автомат)',2=>'всем в одно время (вручную)')),1=>'Ручное начисление','ManualPeriod'=>array('S','Начислять один раз в',0,array(0=>'день',1=>'неделю',2=>'месяц')),'ManualDay'=>array('I','Номер дня недели <<1..7>> или месяца <<1..31>>','comment'=>'0 = последний день'),'Калькулятор','_Compnd'=>array('A','Реинвестирование<br><<одна строка - одно значение>>','size'=>5),'Статистика','ShowStat'=>array('C','Показывать статистику'),'S0'=>array('DT','Метка даты и времени старта <<ГГГГММДДччммсс>>','comment'=>20130924130000),'S1'=>array('I','Всего участников'),'S2'=>array('$','Принято средств'),'S3'=>array('$','Выплачено средств'),'S4'=>array('$','в т.ч. рефских'),'S5'=>array('$','Реинвестировано средств'),'S6'=>array('I','Ожидает вкладов'),'S7'=>array('I','Окончено вкладов'),'S8'=>array('$','Новый вклад <<сумма>>'),'S9'=>array('T','Новый вклад <<пользователь>>'),'S11'=>array('$','Последняя выплата <<сумма>>'),'S12'=>array('T','Последняя выплата <<пользователь>>'))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>