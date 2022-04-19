<?php /* Smarty version Smarty-3.1.8, created on 2017-07-05 21:06:03
         compiled from "tpl/ru/sms/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1322552625595d2a8bc5cde6-57681344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46c2900419b40b18e731f953588b85631902fdff' => 
    array (
      0 => 'tpl/ru/sms/admin/index.tpl',
      1 => 1498731234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1322552625595d2a8bc5cde6-57681344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595d2a8bc7ebf8_26340079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d2a8bc7ebf8_26340079')) {function content_595d2a8bc7ebf8_26340079($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Очередь'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('sms/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Очередь','url'=>'*','fields'=>array('qID'=>array('ID'),'uLogin'=>array('Отправлено'),'qFromTo'=>array('Кому'),'qText'=>array('Текст'),'qState'=>array('Статус'),'qPartsPrice'=>array('<small>Кол-во<br>частей</small>'),'qError'=>array('Описание'),'qErrCnt'=>array('<small>Попыток</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Удалить')), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>