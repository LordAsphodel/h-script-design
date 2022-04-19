<?php /* Smarty version Smarty-3.1.8, created on 2022-04-20 00:19:57
         compiled from "tpl/ru\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29252625f277dead9c7-86620354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a190903f29a605e489b16fe23e1d082aefa609d' => 
    array (
      0 => 'tpl/ru\\menu.tpl',
      1 => 1505759650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29252625f277dead9c7-86620354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'elements' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_625f277dee4288_95434533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_625f277dee4288_95434533')) {function content_625f277dee4288_95434533($_smarty_tpl) {?><ul class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?><?php if (!$_smarty_tpl->tpl_vars['e']->value['skip']){?><?php echo $_smarty_tpl->getSubTemplate ('menu.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>$_smarty_tpl->tpl_vars['e']->value[0],'text'=>$_smarty_tpl->tpl_vars['e']->value[1],'text2'=>$_smarty_tpl->tpl_vars['e']->value[2],'text3'=>$_smarty_tpl->tpl_vars['e']->value[3],'count'=>$_smarty_tpl->tpl_vars['e']->value['count'],'submenu'=>$_smarty_tpl->tpl_vars['e']->value['submenu'],'params'=>$_smarty_tpl->tpl_vars['e']->value['params']), 0);?>
<?php }?><?php } ?></ul><?php }} ?>