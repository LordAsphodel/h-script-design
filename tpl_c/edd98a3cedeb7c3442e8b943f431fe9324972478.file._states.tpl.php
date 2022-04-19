<?php /* Smarty version Smarty-3.1.8, created on 2017-07-05 11:51:43
         compiled from "tpl/ru/tickets/_states.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1881954224595ca89f4abb70-81366006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edd98a3cedeb7c3442e8b943f431fe9324972478' => 
    array (
      0 => 'tpl/ru/tickets/_states.tpl',
      1 => 1498731123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1881954224595ca89f4abb70-81366006',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595ca89f4b4de3_50250524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595ca89f4b4de3_50250524')) {function content_595ca89f4b4de3_50250524($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_tstates'] = new Smarty_variable(array(1=>'Новый',2=>'Ожидает ответа',3=>'В процессе',4=>'Обработан',5=>'Ответ отправлен',8=>'Задержан',9=>'Закрыт'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['_tstates'] = clone $_smarty_tpl->tpl_vars['_tstates']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['_tstates'] = clone $_smarty_tpl->tpl_vars['_tstates'];?><?php }} ?>