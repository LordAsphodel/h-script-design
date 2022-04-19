<?php /* Smarty version Smarty-3.1.8, created on 2017-10-10 10:48:31
         compiled from "tpl/ru/system/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66384581659dc7b4f35b6c8-28042290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9217bf7cd092e017d8b2a36ff7dbebad20980f29' => 
    array (
      0 => 'tpl/ru/system/index.tpl',
      1 => 1504512327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66384581659dc7b4f35b6c8-28042290',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59dc7b4f3bea24_67822266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dc7b4f3bea24_67822266')) {function content_59dc7b4f3bea24_67822266($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Interface'), 0);?>
<h1>Select interface</h1><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>array('lang'=>array('S','Language',0,array('en'=>'English','ru'=>'Русский'),'default'=>$_SESSION['_lang'])),'btn_text'=>'Select'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>