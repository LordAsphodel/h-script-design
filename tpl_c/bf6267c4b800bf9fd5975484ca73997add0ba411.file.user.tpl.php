<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 17:08:07
         compiled from "tpl/ru/account/admin/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6594027435958a502663345-31605793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf6267c4b800bf9fd5975484ca73997add0ba411' => 
    array (
      0 => 'tpl/ru/account/admin/user.tpl',
      1 => 1508709683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6594027435958a502663345-31605793',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958a5026e9857_14387216',
  'variables' => 
  array (
    'el' => 0,
    '_cfg' => 0,
    'usr_statuses' => 0,
    'langs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958a5026e9857_14387216')) {function content_5958a5026e9857_14387216($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Пользователь'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('account/admin/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['el']->value){?><h2>Пользователь '<?php echo $_smarty_tpl->tpl_vars['el']->value['aName'];?>
'</h2><a href="<?php echo tplModuleToLink(array('module'=>'account/admin/user2'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['el']->value['uID'];?>
" class="button-gray">Дополнительные параметры</a><br><br><?php }else{ ?><h2>Новый пользователь</h2><?php }?><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'e-mail','логин'), null, 0);?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==2){?><?php echo "!!";?><?php }?><?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('_country.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('ip'=>$_smarty_tpl->tpl_vars['el']->value['uLIP']), 0);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('fields'=>array('uID'=>array(),'uGroup'=>array('T','Группа','skip'=>!$_smarty_tpl->tpl_vars['el']->value),'uLogin'=>array('T','Логин!!',array('login_empty'=>'укажите логин','login_short'=>"логин слишком короткий [не менее ".($_smarty_tpl->tpl_vars['MinLogin']->value)."]",'login_wrong'=>'логин не может содержать пробел(ы)','login_used'=>'логин уже используется'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'])),'uMail'=>array('T','e-mail!!',array('mail_empty'=>'укажите e-mail','mail_wrong'=>'неверный e-mail','mail_used'=>'e-mail уже используется')),'uPass'=>array('*',valueIf(!$_smarty_tpl->tpl_vars['el']->value,'Пароль!!','Пароль'),array('pass_empty'=>'укажите пароль','pass_short'=>"пароль слишком короткий [не менее ".($_smarty_tpl->tpl_vars['MinPass']->value)."]",'pass_wrong'=>'пароль не соответствует формату')),'uPIN'=>array('*',valueIf(!$_smarty_tpl->tpl_vars['el']->value,'PIN-код!!','PIN-код'),array('pin_empty'=>'укажите PIN-код','pin_short'=>"PIN-код слишком короткий [не менее ".($_smarty_tpl->tpl_vars['MinPass']->value)."]",'pin_wrong'=>'PIN-код не соответствует формату'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinPIN']==0)||!$_smarty_tpl->tpl_vars['el']->value),'uState'=>array('S','Статус',0,$_smarty_tpl->tpl_vars['usr_statuses']->value,'skip'=>!$_smarty_tpl->tpl_vars['el']->value),'uBTS'=>array('DT','Забанен до',array('bdate_empty'=>'укажите срок'),'skip'=>!$_smarty_tpl->tpl_vars['el']->value),'uLevel'=>array('I','Уровень доступа',array('lvl_wrong'=>'неверное значение'),'size'=>3,'skip'=>!$_smarty_tpl->tpl_vars['el']->value),'uRef'=>array('T',"Кто пригласил".$_tmp1,array('ref_empty'=>"укажите ".($_smarty_tpl->tpl_vars['txt_login']->value),'ref_not_found'=>($_smarty_tpl->tpl_vars['txt_login']->value)." не найден",'ref_is_self'=>'неверное значение'),'skip'=>(($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==3)||!$_smarty_tpl->tpl_vars['_cfg']->value['Ref_Word']||!$_smarty_tpl->tpl_vars['el']->value)),'uBal'=>array('X','Баланс <<сумма по всем плат. системам>>',0,_z($_smarty_tpl->tpl_vars['el']->value['uBal'],1),'skip'=>!$_smarty_tpl->tpl_vars['el']->value),'Bal'=>array('U','balance/bal.tpl','skip'=>!$_smarty_tpl->tpl_vars['el']->value),'uLang'=>array('S','Язык',0,$_smarty_tpl->tpl_vars['langs']->value,'skip'=>!$_smarty_tpl->tpl_vars['el']->value),'uMode'=>array('T','Режим','size'=>8,'skip'=>!$_smarty_tpl->tpl_vars['el']->value),'uTheme'=>array('T','Тема','size'=>8,'skip'=>!$_smarty_tpl->tpl_vars['el']->value),'Act'=>array('X','Последняя активность',0,($_smarty_tpl->tpl_vars['el']->value['uLTS'])." <small>(IP ".($_smarty_tpl->tpl_vars['el']->value['uLIP'])." ".$_tmp2.")</small>",'skip'=>!$_smarty_tpl->tpl_vars['el']->value['uLTS'])),'values'=>$_smarty_tpl->tpl_vars['el']->value), 0);?>
<?php if ($_smarty_tpl->tpl_vars['el']->value){?><br><a href="<?php echo tplModuleToLink(array('module'=>'balance/admin/opers'),$_smarty_tpl);?>
?user=<?php echo $_smarty_tpl->tpl_vars['el']->value['uLogin'];?>
" class="button-green">Все операции пользователя</a>&nbsp;<a href="<?php echo tplModuleToLink(array('module'=>'message/admin/message'),$_smarty_tpl);?>
?add&to=<?php echo $_smarty_tpl->tpl_vars['el']->value['uLogin'];?>
" class="button-green">Написать сообщение пользователю</a>&nbsp;<a href="<?php echo tplModuleToLink(array('module'=>'account/admin/user'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['el']->value['uID'];?>
&login" class="button-green">Войти как пользователь</a><br><?php }?><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>