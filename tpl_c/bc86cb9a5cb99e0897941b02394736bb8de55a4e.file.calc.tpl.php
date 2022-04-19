<?php /* Smarty version Smarty-3.1.8, created on 2017-07-01 11:01:58
         compiled from "tpl/ru/depo/calc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1527880404595756f61dd218-77522895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc86cb9a5cb99e0897941b02394736bb8de55a4e' => 
    array (
      0 => 'tpl/ru/depo/calc.tpl',
      1 => 1498731098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1527880404595756f61dd218-77522895',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595756f620dda6_23828594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595756f620dda6_23828594')) {function content_595756f620dda6_23828594($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Калькулятор'), 0);?>
<h1>Калькулятор инвестора</h1><?php echo $_smarty_tpl->getSubTemplate ('depo/calc.box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><?php echo $_smarty_tpl->getSubTemplate ('depo/calc.result.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>