<?php /* Smarty version Smarty-3.1.8, created on 2017-09-29 08:21:59
         compiled from "tpl/ru/refsys/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194338627759573fac3e6bb3-85689082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12a0e16cb69a9201012bab8f574b4d8962713804' => 
    array (
      0 => 'tpl/ru/refsys/admin/setup.tpl',
      1 => 1504512327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194338627759573fac3e6bb3-85689082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59573fac418345_44864490',
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59573fac418345_44864490')) {function content_59573fac418345_44864490($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Настройки'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('Word'=>array('T','Для <b>включения</b> реф.системы укажите<br>имя параметра в ссылке для приглашения','comment'=>'../?<u>ref</u>=..'),'Levels'=>array('I','Кол-во отображаемых уровней <<для многоуровневой>>'),1=>'Пополнение','Type'=>array('S','Метод','',array('многоуровневая'=>'',0=>'<процент> вышестоящим','одноуровневая'=>'',2=>'<от_кол-ва_активных_рефов>-<процент>',3=>'<от_суммы_депозитов_рефов>-<процент>',4=>'<от_суммы_активных_депозитов_юзера>-<процент>')),'_Perc'=>array('A','Значения','size'=>5),'Вклад','DType'=>array('S','Метод','',array('многоуровневая'=>'',0=>'<процент> вышестоящим','одноуровневая'=>'',2=>'<от_кол-ва_активных_рефов>-<процент>',3=>'<от_суммы_депозитов_рефов>-<процент>',4=>'<от_суммы_активных_депозитов_юзера>-<процент>')),'_DPerc'=>array('A','Значения','size'=>5),'Начисление','PType'=>array('S','Метод','',array('многоуровневая'=>'',0=>'<процент> вышестоящим','одноуровневая'=>'',2=>'<от_кол-ва_активных_рефов>-<процент>',3=>'<от_суммы_депозитов_рефов>-<процент>',4=>'<от_суммы_активных_депозитов_юзера>-<процент>')),'_PPerc'=>array('A','Значения','size'=>5))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>