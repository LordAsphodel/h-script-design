<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:08:18
         compiled from "tpl/ru/line.top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129067742759566cf35d36b8-46719584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87331c5a68a497e8af4eb01d055c32da99c08708' => 
    array (
      0 => 'tpl/ru/line.top.tpl',
      1 => 1508709648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129067742759566cf35d36b8-46719584',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59566cf3609ff3_03517929',
  'variables' => 
  array (
    'count_aopers' => 0,
    'user' => 0,
    'curr1' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59566cf3609ff3_03517929')) {function content_59566cf3609ff3_03517929($_smarty_tpl) {?><div class="_topLine"><div class="topLinks"><table class="formatTable" width="100%"><tr><td align="left"><?php echo $_smarty_tpl->getSubTemplate ('links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('elements'=>array(array('index','Главная'),array('news','Новости'),array('cabinet','Кабинет','skip'=>!_uid()),array('admin','Панель управления','count'=>$_smarty_tpl->tpl_vars['count_aopers']->value,'skip'=>($_smarty_tpl->tpl_vars['user']->value['uLevel']<90)))), 0);?>
</td><td align="right"><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('links.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'account','text'=>$_smarty_tpl->tpl_vars['user']->value['aName']), 0);?>
<?php if ($_smarty_tpl->tpl_vars['curr1']->value){?><?php echo $_smarty_tpl->getSubTemplate ('links.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'balance','text'=>'Баланс'), 0);?>
<?php echo _z($_smarty_tpl->tpl_vars['curr1']->value['wBal'],$_smarty_tpl->tpl_vars['curr1']->value['cID'],2);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('links.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'account/login','params'=>'out','text'=>'Выход'), 0);?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['RegMode']>=0){?><?php echo $_smarty_tpl->getSubTemplate ('links.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'account/register','text'=>'Регистрация'), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('links.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>'account/login','text'=>'Вход'), 0);?>
<?php }?></td><td align="right" width="100px"><?php echo $_smarty_tpl->getSubTemplate ('widget/clock/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td></tr></table></div></div><?php }} ?>