<?php /* Smarty version Smarty-3.1.8, created on 2017-11-15 00:48:32
         compiled from "tpl/ru/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176665203059566cf35b1064-75338422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0692f56266bd24c2dd3cd092d079a9040f52441' => 
    array (
      0 => 'tpl/ru/header.tpl',
      1 => 1508709647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176665203059566cf35b1064-75338422',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59566cf35d1d63_73673937',
  'variables' => 
  array (
    'title' => 0,
    '_cfg' => 0,
    'root_url' => 0,
    'img_path' => 0,
    'short' => 0,
    'tpl_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59566cf35d1d63_73673937')) {function content_59566cf35d1d63_73673937($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head><meta http-equiv="content-type" content="text/html; charset=utf-8" /><title><?php if ($_smarty_tpl->tpl_vars['title']->value){?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 | <?php }?><?php echo $_smarty_tpl->tpl_vars['_cfg']->value['Sys_SiteName'];?>
</title><base href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
" /><link rel="shortcut icon" href="favicon.ico"><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
main.css"><script type="text/javascript" src="js/jquery.js"></script></head><body><center><?php if (!$_smarty_tpl->tpl_vars['short']->value){?><?php echo $_smarty_tpl->getSubTemplate ('line.top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="_body"><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['UI_TopPanel']){?><?php echo $_smarty_tpl->getSubTemplate ('panel.top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><table class="formatTable" width="100%"><tr><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['UI_LeftPanel']){?><td class="_panel"><?php echo $_smarty_tpl->getSubTemplate ('panel.left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td><?php }?><td align="center" valign="top"><?php echo $_smarty_tpl->getSubTemplate ('line.main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('_info'=>$_smarty_tpl->tpl_vars['tpl_info']->value), 0);?>
<div class="_content"><?php }?><?php }} ?>