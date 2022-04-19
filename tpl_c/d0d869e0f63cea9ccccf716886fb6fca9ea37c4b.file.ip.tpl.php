<?php /* Smarty version Smarty-3.1.8, created on 2017-07-08 13:32:40
         compiled from "tpl/ru/account/admin/ip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19028335615960b4c86b7189-37126073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0d869e0f63cea9ccccf716886fb6fca9ea37c4b' => 
    array (
      0 => 'tpl/ru/account/admin/ip.tpl',
      1 => 1498731187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19028335615960b4c86b7189-37126073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5960b4c86fc707_50874374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5960b4c86fc707_50874374')) {function content_5960b4c86fc707_50874374($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'IP Table'), 0);?>
<h2> Статистика для  IP:<?php echo $_GET['ip'];?>
</h2><?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>array('uID'=>array('ID'),'uLogin'=>array('Login'),'aCIP'=>array('IP reg'),'uLIP'=>array('IP auth')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'linkparams'=>"&ip=".($_GET['ip']),'row'=>'*'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>