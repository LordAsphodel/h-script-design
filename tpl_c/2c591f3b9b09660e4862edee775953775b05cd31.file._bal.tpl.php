<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:12:05
         compiled from "tpl/ru/balance/_bal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2129726059573f6b2d0fb6-66820030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c591f3b9b09660e4862edee775953775b05cd31' => 
    array (
      0 => 'tpl/ru/balance/_bal.tpl',
      1 => 1508709662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2129726059573f6b2d0fb6-66820030',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59573f6b2e5a80_08988850',
  'variables' => 
  array (
    'curr1' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59573f6b2e5a80_08988850')) {function content_59573f6b2e5a80_08988850($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['curr1']->value){?><h3> На Вашем счете <?php echo _z($_smarty_tpl->tpl_vars['curr1']->value['wBal'],$_smarty_tpl->tpl_vars['curr1']->value['cID'],2);?>
 </h3><?php }elseif($_smarty_tpl->tpl_vars['user']->value['uBal']>0){?><?php echo $_smarty_tpl->getSubTemplate ('balance/bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><h3> На Вашем счете <b>нет средств</b> </h3><?php }?>
<?php }} ?>