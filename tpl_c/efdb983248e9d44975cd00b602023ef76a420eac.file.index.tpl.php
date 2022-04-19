<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:12:05
         compiled from "tpl/ru/balance/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27937777659574c9b8f9ac0-89994350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efdb983248e9d44975cd00b602023ef76a420eac' => 
    array (
      0 => 'tpl/ru/balance/index.tpl',
      1 => 1508709662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27937777659574c9b8f9ac0-89994350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59574c9b96d233_82770417',
  'variables' => 
  array (
    '_selfLink' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59574c9b96d233_82770417')) {function content_59574c9b96d233_82770417($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Баланс'), 0);?>
<div class="page-heading"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Информация о балансе</h1></div><div class="clear"></div></div><?php if (isset($_GET['fail'])){?><h2>Операция НЕ завершена!</h2><p class="info">Процедура пополнения была прервана или произошла ошибка.<br>Попробуйте <a href="<?php echo $_smarty_tpl->tpl_vars['_selfLink']->value;?>
">повторить операцию</a> позже</p><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('balance/_bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><div class="box-info full animated fadeInDown"><h2 class="text-left"> <i class="fa fa-history"></i> Мои операции</h2> <br><?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php echo $_smarty_tpl->getSubTemplate ('balance/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('mlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','table_class'=>'table table-striped','fields'=>array('oTS'=>array('Дата/Исполнено'),'oOper'=>array('Операция'),'oCID'=>array('Плат.система'),'oSum1'=>array('Приход'),'oSum2'=>array('Расход'),'oBatch'=>array('Batch-номер'),'oState'=>array('Статус'),'oMemo'=>array('Примечание')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<p align="center"><a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=CASHIN" class="btn btn-primary">          <b><u>Пополнить</u></b>          </a>&nbsp;<a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=CASHOUT" class="btn btn-primary"><b><u>Вывести*</u></b> </a></p>*Вывод доступен только по воскресеньям в соответствии с <a href="/rules">регламентом</a> проекта.</div><?php }?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>