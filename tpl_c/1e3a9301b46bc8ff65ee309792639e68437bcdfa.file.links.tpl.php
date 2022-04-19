<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:08:18
         compiled from "tpl/ru/links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103522885659566cf360bc07-12500125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e3a9301b46bc8ff65ee309792639e68437bcdfa' => 
    array (
      0 => 'tpl/ru/links.tpl',
      1 => 1508709648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103522885659566cf360bc07-12500125',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59566cf362c212_52181452',
  'variables' => 
  array (
    'class' => 0,
    'elements' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59566cf362c212_52181452')) {function content_59566cf362c212_52181452($_smarty_tpl) {?><div<?php if ($_smarty_tpl->tpl_vars['class']->value){?> class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"<?php }?>><?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?><?php if (!$_smarty_tpl->tpl_vars['e']->value['skip']){?><?php echo $_smarty_tpl->getSubTemplate ('links.element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('module'=>$_smarty_tpl->tpl_vars['e']->value[0],'text'=>$_smarty_tpl->tpl_vars['e']->value[1],'text2'=>$_smarty_tpl->tpl_vars['e']->value[2],'text3'=>$_smarty_tpl->tpl_vars['e']->value[3],'count'=>$_smarty_tpl->tpl_vars['e']->value['count'],'params'=>$_smarty_tpl->tpl_vars['e']->value['params']), 0);?>
<?php }?><?php } ?></div><?php }} ?>