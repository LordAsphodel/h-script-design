<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:08:18
         compiled from "tpl/ru/info.messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109086915759573f6b2bfd29-23825286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d9816f7cba4f53de6f70673032b8a1a2a2f67ef' => 
    array (
      0 => 'tpl/ru/info.messages.tpl',
      1 => 1508709647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109086915759573f6b2bfd29-23825286',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59573f6b2ceda8_30317965',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59573f6b2ceda8_30317965')) {function content_59573f6b2ceda8_30317965($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['info_msg'] = new Smarty_variable(array('Completed'=>'Выполнено','Saved'=>'Сохранено','Canceled'=>'Отменено','Added'=>'Добавлено','Deleted'=>'Удалено','LogIn'=>'Вход выполнен','LogOut'=>'Выход выполнен','*NoSelected'=>'Отметьте хотябы один элемент','*CantComplete'=>'Операция не может быть выполнена','*AlreadyUsed'=>'Данные уже используются','*Error'=>'Ошибка при выполнении операции','*ErrorCode'=>'Код ошибки','*NoPage'=>'Страница не найдена','*Denied'=>'В доступе отказано'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['info_msg'] = clone $_smarty_tpl->tpl_vars['info_msg']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['info_msg'] = clone $_smarty_tpl->tpl_vars['info_msg'];?><?php }} ?>