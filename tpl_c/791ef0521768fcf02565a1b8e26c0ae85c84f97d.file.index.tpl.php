<?php /* Smarty version Smarty-3.1.8, created on 2017-07-27 19:25:57
         compiled from "tpl/en/tickets/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47585368597a1415a98e63-98128009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '791ef0521768fcf02565a1b8e26c0ae85c84f97d' => 
    array (
      0 => 'tpl/en/tickets/index.tpl',
      1 => 1498731075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47585368597a1415a98e63-98128009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_597a1415ab6410_30354856',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597a1415ab6410_30354856')) {function content_597a1415ab6410_30354856($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Support'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('tickets/_states.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Tickets','fields'=>array('tLTS'=>array('Date'),'tTopic'=>array('Subject'),'tState'=>array('Status'),'cnt'=>array('Answers')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'tickets/newticket'),$_smarty_tpl);?>
" class="button-green">Create</a><br><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>