<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 05:30:15
         compiled from "tpl/ru/depo/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5401724165958d1f1018803-11876724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '309774a261a2c09449191a8f5eb3056617ff98ff' => 
    array (
      0 => 'tpl/ru/depo/index.tpl',
      1 => 1508709665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5401724165958d1f1018803-11876724',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958d1f1042d70_83829277',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958d1f1042d70_83829277')) {function content_5958d1f1042d70_83829277($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Мои депозиты'), 0);?>
<div class="page-heading animateed fadeInDown"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Мои депозиты</h1></div><div class="clear"></div></div><?php echo $_smarty_tpl->getSubTemplate ('depo/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="box-info full animated fadeInDown"><h2 class="text-left"><i class="fa fa-history"></i> Мои депозиты</h2><div id="transactions-table" class="collapse in"><div class="table-responsive p-b-20"><?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php echo $_smarty_tpl->getSubTemplate ('mlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','table_class'=>'table table-striped','fields'=>array('dID'=>array('<small>ID</small>'),'dCTS'=>array('<small>Дата начала</small>'),'cName'=>array('<small>Плат.система</small>'),'dZD'=>array('<small>Сумма</small>'),'pName'=>array('<small>План</small>'),'dLTS'=>array('<small>Посл.начисление</small>'),'dN'=>array('<small>Начислений</small>'),'dZP'=>array('<small>Начислено</small>'),'dNTS'=>array('<small>След.начисление</small>'),'dState'=>array('<small>Статус</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<?php }else{ ?><table class="table table-striped"><thead><tr><th><small>ID</small></th><th><small>Дата начала</small></th><th><small>Плат.система</small></th><th><small>Сумма</small></th><th><small>План</small></th><th><small>Посл.начисление</small></th><th><small>Начислений</small></th><th><small>Начислено</small></th><th><small>След.начисление</small></th><th><small>Статус</small></th></tr></thead><tbody><tr><td colspan="4">У вас нет депозитов</td></tr></tbody></table><?php }?></div></div></div><div class="box-info full animated fadeInDown"><h2 class="text-left"> <a href="<?php echo tplModuleToLink(array('module'=>'depo/depo'),$_smarty_tpl);?>
?add" class="button-green"><i class="fa fa-money"></i>&nbsp; Сделать вклад</a></h2></div><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>