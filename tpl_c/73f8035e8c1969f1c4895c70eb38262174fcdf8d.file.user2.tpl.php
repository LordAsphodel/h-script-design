<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 17:08:19
         compiled from "tpl/ru/account/admin/user2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:834707450595f8cd648c7a6-08581951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73f8035e8c1969f1c4895c70eb38262174fcdf8d' => 
    array (
      0 => 'tpl/ru/account/admin/user2.tpl',
      1 => 1508709683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '834707450595f8cd648c7a6-08581951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595f8cd6525757_26931864',
  'variables' => 
  array (
    'el' => 0,
    '_cfg' => 0,
    'txt_login' => 0,
    'wfields' => 0,
    'defcurr' => 0,
    'wdata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595f8cd6525757_26931864')) {function content_595f8cd6525757_26931864($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Пользователь'), 0);?>
<h2>Пользователь '<?php echo $_smarty_tpl->tpl_vars['el']->value['aName'];?>
'</h2><a href="<?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['el']->value['uID'];?>
" class="button-gray">Основные параметры</a><br><br><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'e-mail','Логин'), null, 0);?><?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('_country.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('ip'=>$_smarty_tpl->tpl_vars['el']->value['aCIP']), 0);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('fields'=>array('auID'=>array(),'uLogin'=>array('X',$_smarty_tpl->tpl_vars['txt_login']->value),'C'=>array('X','Регистрация',0,($_smarty_tpl->tpl_vars['el']->value['aCTS'])." <small>(IP ".($_smarty_tpl->tpl_vars['el']->value['aCIP'])." ".$_tmp1.")</small>",'skip'=>!$_smarty_tpl->tpl_vars['el']->value['aCTS']),'aName'=>array('T','Имя!!',array('name_empty'=>'укажите имя')),'aTZ'=>array('T','Часовой пояс!! <<от GMT>>',array('tz_wrong'=>'неверное смещение [ч:м]'),'comment'=>'+4:00 = Москва','size'=>6),'aBD'=>array('D','Дата рождения'),'aCountry'=>array('T','Страна'),'aCity'=>array('T','Город'),'aTel'=>array('T','Номер телефона'),'aNoMail'=>array('C','Не получать оповещения на e-mail','skip'=>$_smarty_tpl->tpl_vars['_cfg']->value['Msg_NoMail']),50=>'Специальная реф.система','aPerc'=>array('A','От пополнения<br><<значения по уровням>>'),'aDPerc'=>array('A','От вклада<br><<значения по уровням>>'),'aPPerc'=>array('A','От начисления<br><<значения по уровням>>'),99=>'Безопасность','aGA'=>array('T','Google Authenticator'),'aIPSec'=>array('S','Контроль смены IP-адреса',0,array(0=>'- по умолчанию -',1=>'x.0.0.0',2=>'x.x.0.0',3=>'x.x.x.0',4=>'x.x.x.x')),'aSessIP'=>array('C','Привязывать сессию к IP-адресу'),'aSessUniq'=>array('C','Запретить параллельные сессии'),'aTimeOut'=>array('I','Автовыход через N минут <<0 - по умолчанию>>'),'aSQuestion'=>array('T','Контрольный вопрос!!',array('secq_empty'=>'укажите вопрос','secq_short'=>"вопрос слишком короткий [не менее ".($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA'])."]"),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0),'size'=>40),'aSAnswer'=>array('*','Контрольный ответ <<заполните чтобы сменить>>',array('seca_empty'=>'укажите ответ','seca_short'=>"ответ слишком короткий [не менее ".($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA'])."]",'seqa_equal_secq'=>'ответ не может совпадать с вопросом'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0),'size'=>40)),'values'=>$_smarty_tpl->tpl_vars['el']->value), 0);?>
<?php if ($_smarty_tpl->tpl_vars['wfields']->value){?><br><?php $_smarty_tpl->tpl_vars['wfields'] = new Smarty_variable(array('auID'=>array(),'DefCurr'=>array('S','Платежная система по умолчанию!!',array('psys_wrong'=>'укажите плат.систему'),array(0=>'- выберите -')+(array)$_smarty_tpl->tpl_vars['defcurr']->value,'default'=>$_smarty_tpl->tpl_vars['el']->value['aDefCurr']))+$_smarty_tpl->tpl_vars['wfields']->value, null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'wallets','title'=>'Платежные реквизиты','fields'=>$_smarty_tpl->tpl_vars['wfields']->value,'values'=>$_smarty_tpl->tpl_vars['wdata']->value), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>