<?php /* Smarty version Smarty-3.1.8, created on 2017-11-15 00:48:32
         compiled from "tpl/ru/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84321237459566cf36a1547-40875052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '146b706a9f9eb0b718b8ab8b9fa76a90071681f5' => 
    array (
      0 => 'tpl/ru/menu.tpl',
      1 => 1508709649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84321237459566cf36a1547-40875052',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59566cf36be2f9_55321764',
  'variables' => 
  array (
    'class' => 0,
    'elements' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59566cf36be2f9_55321764')) {function content_59566cf36be2f9_55321764($_smarty_tpl) {?><ul class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?><?php if (!$_smarty_tpl->tpl_vars['e']->value['skip']){?><?php echo $_smarty_tpl->getSubTemplate ('menu.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>$_smarty_tpl->tpl_vars['e']->value[0],'text'=>$_smarty_tpl->tpl_vars['e']->value[1],'text2'=>$_smarty_tpl->tpl_vars['e']->value[2],'text3'=>$_smarty_tpl->tpl_vars['e']->value[3],'count'=>$_smarty_tpl->tpl_vars['e']->value['count'],'submenu'=>$_smarty_tpl->tpl_vars['e']->value['submenu'],'params'=>$_smarty_tpl->tpl_vars['e']->value['params']), 0);?>
<?php }?><?php } ?></ul><?php }} ?>