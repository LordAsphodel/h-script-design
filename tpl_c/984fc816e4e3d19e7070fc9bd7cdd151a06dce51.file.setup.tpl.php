<?php /* Smarty version Smarty-3.1.8, created on 2017-07-05 21:06:02
         compiled from "tpl/ru/tickets/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:980252145595d2a8acafb26-50832432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '984fc816e4e3d19e7070fc9bd7cdd151a06dce51' => 
    array (
      0 => 'tpl/ru/tickets/admin/setup.tpl',
      1 => 1498731241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '980252145595d2a8acafb26-50832432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595d2a8accc4b2_69893878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d2a8accc4b2_69893878')) {function content_595d2a8accc4b2_69893878($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Настройки'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('NoMail'=>array('C','Не высылать оповещения на e-mail'),'Captcha'=>array('S','Защита "captcha"',0,array(0=>'нет',1=>'авто',2=>'всегда')),'_Cats'=>array('A','Категории сообщений<br><<одна строка - одна категория>>','size'=>20))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>