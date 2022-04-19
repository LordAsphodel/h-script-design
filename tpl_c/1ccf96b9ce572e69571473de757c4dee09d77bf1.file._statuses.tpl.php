<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 11:45:10
         compiled from "tpl/en/depo/_statuses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113972839359822bdd0fa672-65363754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ccf96b9ce572e69571473de757c4dee09d77bf1' => 
    array (
      0 => 'tpl/en/depo/_statuses.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113972839359822bdd0fa672-65363754',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59822bdd103023_20111158',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59822bdd103023_20111158')) {function content_59822bdd103023_20111158($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['ststrs'] = new Smarty_variable(array(0=>'Canceled',1=>'Active',2=>'Finished',3=>'Closed'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['ststrs'] = clone $_smarty_tpl->tpl_vars['ststrs']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['ststrs'] = clone $_smarty_tpl->tpl_vars['ststrs'];?>
<?php }} ?>