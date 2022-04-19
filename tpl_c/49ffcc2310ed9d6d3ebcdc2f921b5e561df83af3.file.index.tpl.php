<?php /* Smarty version Smarty-3.1.8, created on 2017-11-15 00:48:32
         compiled from "tpl/ru/confirm/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17238744815959d5da5c1504-63271841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49ffcc2310ed9d6d3ebcdc2f921b5e561df83af3' => 
    array (
      0 => 'tpl/ru/confirm/index.tpl',
      1 => 1508709664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17238744815959d5da5c1504-63271841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5959d5da5eb7f9_18292111',
  'variables' => 
  array (
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959d5da5eb7f9_18292111')) {function content_5959d5da5eb7f9_18292111($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Подтверждение'), 0);?>
<h1>Подтверждение операции</h1><?php if (isset($_GET['done'])){?><h2>Операция завершена!</h2><?php }else{ ?><?php if (isset($_GET['need_confirm_sms'])){?><h2>Операция НЕ завершена!</h2><p class="info">Для завершения операции Вы должны ввести код подтверждения<br>который был выслан на Ваш телефон</p><?php }?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'fields'=>array('Code'=>array('T','Введите код!!',array('code_empty'=>'укажите код','code_not_found'=>'неверный код','code_used'=>'код уже неактуален','code_expired'=>'срок активации кода истек','dif_ip'=>'подтверждение с Вашего IP-адреса невозможно','oper_wrong'=>'неверная операция','oper_unkn'=>'операция не реализована'),'size'=>40,'default'=>$_GET['code'])),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Confirm_Captcha'],'btn_text'=>'Выполнить'), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>