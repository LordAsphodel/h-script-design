<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 18:48:49
         compiled from "tpl/ru/depo/admin/stat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1224846022595d29edf21d53-48164366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fef6a03c3df16d7f93e70f6d8f9e57d754cb6a64' => 
    array (
      0 => 'tpl/ru/depo/admin/stat.tpl',
      1 => 1508709690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1224846022595d29edf21d53-48164366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595d29ee0bf145_48479604',
  'variables' => 
  array (
    'users' => 0,
    'deps' => 0,
    'currs' => 0,
    'c' => 0,
    'cid' => 0,
    'stat' => 0,
    'clist' => 0,
    'today' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d29ee0bf145_48479604')) {function content_595d29ee0bf145_48479604($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Статистика'), 0);?>
<h2>Информация</h2>Пользователей всего: <?php echo $_smarty_tpl->tpl_vars['users']->value['all'];?>
, в т.ч. активных: <?php echo $_smarty_tpl->tpl_vars['users']->value['active'];?>
, в т.ч. со вкладами: <?php echo $_smarty_tpl->tpl_vars['users']->value['wdepo'];?>
<br>Депозитов всего: <?php echo $_smarty_tpl->tpl_vars['deps']->value['all'];?>
, в т.ч. активных: <?php echo $_smarty_tpl->tpl_vars['deps']->value['active'];?>
<br><br><table class="FormatTable" border="1"><tr><th></th><th colspan="11">Операции</th><th rowspan="2"><small>Активные депозиты</small></th><th colspan="3">Балансы</th></tr><tr><th>Плат.&nbsp;система</th><th><small>Бонус</small></th><th><small>Штраф</small></th><th><small>Пополнение</small></th><th><small>Рефские</small></th><th><small>Вклад</small></th><th><small>в т.ч. с баланса</small></th><th><small>Снятие</small></th><th><small>Начисление</small></th><th><small>Списание</small></th><th><small>Ожидает вывода</small></th><th><small>Вывод</small></th><th><small>Доступно</small></th><th><small>Занято</small></th><th><small>Ожидает</small></th></tr><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['cid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['cid']->value = $_smarty_tpl->tpl_vars['c']->key;
?><tr><td align="right"><?php echo $_smarty_tpl->tpl_vars['c']->value['cName'];?>
&nbsp;<i><small><?php echo $_smarty_tpl->tpl_vars['c']->value['cCurr'];?>
</small></i></td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['BONUS'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['PENALTY'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['CASHIN'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['REF'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['GIVE'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['GIVE2'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['TAKE'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['CALCIN'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['CALCOUT'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['CASHOUT2'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['CASHOUT'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['DEPO'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['BAL'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['LOCK'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[$_smarty_tpl->tpl_vars['cid']->value]['OUT'],$_smarty_tpl->tpl_vars['cid']->value,-1);?>
</td></tr><?php } ?><tr><td align="right"><b>ИТОГО:</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['BONUS'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['PENALTY'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['CASHIN'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['REF'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['GIVE'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['GIVE2'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['TAKE'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['CALCIN'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['CALCOUT'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['CASHOUT2'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['CASHOUT'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['DEPO'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['BAL'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['LOCK'],1,-1);?>
</b></td><td align="right"><b><?php echo _z($_smarty_tpl->tpl_vars['stat']->value[0]['OUT'],1,-1);?>
</b></td></tr></table><br><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Параметры отбора','fields'=>array('PSys'=>array('S','Платежная система',0,array(0=>'- все -')+(array)$_smarty_tpl->tpl_vars['clist']->value),'D1'=>array('DT','Дата с','default'=>$_smarty_tpl->tpl_vars['today']->value),'D2'=>array('DT','Дата по')),'btn_text'=>'Показать'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['res']->value){?><br><table class="FormatTable" border="1"><tr><td>Регистрации</td><td align="right"><?php echo $_smarty_tpl->tpl_vars['res']->value['REG'];?>
</td></tr><tr><td>Бонус</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['BONUS'],1);?>
</td></tr><tr><td>Штраф</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['PENALTY'],1);?>
</td></tr><tr><td>Пополнение</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['CASHIN'],1);?>
</td></tr><tr><td>Рефские</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['REF'],1);?>
</td></tr><tr><td>Вклад</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['GIVE'],1);?>
</td></tr><tr><td>Снятие</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['TAKE'],1);?>
</td></tr><tr><td>Начисление</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['CALCIN'],1);?>
</td></tr><tr><td>Списание</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['CALCOUT'],1);?>
</td></tr><tr><td>Вывод</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['CASHOUT'],1);?>
</td></tr><tr><td>Сделано депозитов</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['DEPO'],1);?>
</td></tr><tr><td>из них активных сейчас</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['DEPO2'],1);?>
</td></tr><tr><td>Заработок системы</td><td align="right"><?php echo _z($_smarty_tpl->tpl_vars['res']->value['CASHIN']-$_smarty_tpl->tpl_vars['res']->value['CASHOUT'],1);?>
</td></tr></table><?php }?><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>