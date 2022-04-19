<?php /* Smarty version Smarty-3.1.8, created on 2017-09-05 23:00:02
         compiled from "tpl/en/balance/_bal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24269154759799b50863171-45105328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ffda890e3664ef18935ab86239633b03aac7b1a' => 
    array (
      0 => 'tpl/en/balance/_bal.tpl',
      1 => 1504641600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24269154759799b50863171-45105328',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59799b508750d7_48367466',
  'variables' => 
  array (
    'curr1' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59799b508750d7_48367466')) {function content_59799b508750d7_48367466($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['curr1']->value){?><h3>Your balance is <?php echo _z($_smarty_tpl->tpl_vars['curr1']->value['wBal'],$_smarty_tpl->tpl_vars['curr1']->value['cID'],2);?>
</h3><?php }elseif($_smarty_tpl->tpl_vars['user']->value['uBal']>0){?><?php echo $_smarty_tpl->getSubTemplate ('balance/bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><h3>Your balance <b>is empty</b></h3><?php }?>
<?php }} ?>