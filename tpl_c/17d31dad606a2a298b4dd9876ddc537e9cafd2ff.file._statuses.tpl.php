<?php /* Smarty version Smarty-3.1.8, created on 2017-07-05 21:06:03
         compiled from "tpl/ru/sms/_statuses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1331714379595d2a8bc88fa6-70546255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17d31dad606a2a298b4dd9876ddc537e9cafd2ff' => 
    array (
      0 => 'tpl/ru/sms/_statuses.tpl',
      1 => 1498731120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1331714379595d2a8bc88fa6-70546255',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595d2a8bc9b562_70032937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d2a8bc9b562_70032937')) {function content_595d2a8bc9b562_70032937($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['sms_statuses'] = new Smarty_variable(array(0=>'ожидает',1=>'обрабатывается',2=>'отправлено',3=>'доставлено',4=>'ошибка',9=>'отложено'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['sms_statuses'] = clone $_smarty_tpl->tpl_vars['sms_statuses']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['sms_statuses'] = clone $_smarty_tpl->tpl_vars['sms_statuses'];?>

<?php $_smarty_tpl->tpl_vars['sms_errors'] = new Smarty_variable(array('low_balance'=>'недостаточно средств','no_suitable_text'=>'нет подходящего текста','from_wrong'=>'неверный формат отправителя','to_wrong'=>'неверный формат номера получателя','msg_empty'=>'не задан текст','msg_too_long'=>'текст слишком длинный','S1'=>'в очереди у оператора','S0'=>'подготовка к отправке','E1'=>'не доставлено','E2'=>'не принято','E3'=>'не известно'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['sms_errors'] = clone $_smarty_tpl->tpl_vars['sms_errors']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['sms_errors'] = clone $_smarty_tpl->tpl_vars['sms_errors'];?><?php }} ?>