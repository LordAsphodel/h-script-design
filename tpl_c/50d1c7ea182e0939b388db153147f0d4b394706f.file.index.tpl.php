<?php /* Smarty version Smarty-3.1.8, created on 2017-07-05 21:06:07
         compiled from "tpl/ru/review/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:524744884595d2a8f2d3fc4-35768862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50d1c7ea182e0939b388db153147f0d4b394706f' => 
    array (
      0 => 'tpl/ru/review/admin/index.tpl',
      1 => 1498731232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '524744884595d2a8f2d3fc4-35768862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595d2a8f2f1369_38080229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d2a8f2f1369_38080229')) {function content_595d2a8f2f1369_38080229($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Отзывы'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Отзывы','url'=>'*','fields'=>array('oID'=>array('ID'),'oTS'=>array('Дата'),'uLogin'=>array('Автор'),'oText'=>array('Текст'),'oState'=>array('<small>Одобрен</small>'),'oOrder'=>array('<small>Вес</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('accept'=>'Одобрить','del'=>'Удалить')), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>