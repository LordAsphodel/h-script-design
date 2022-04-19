<?php /* Smarty version Smarty-3.1.8, created on 2017-11-15 00:48:32
         compiled from "tpl/ru/line.main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11755271859566cf366c617-39437007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd44d4d75fdc192560f5982f849e45e3da6acce12' => 
    array (
      0 => 'tpl/ru/line.main.tpl',
      1 => 1508709648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11755271859566cf366c617-39437007',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59566cf369f703_92703193',
  'variables' => 
  array (
    'smenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59566cf369f703_92703193')) {function content_59566cf369f703_92703193($_smarty_tpl) {?><div class="_menuPanel"><?php $_smarty_tpl->tpl_vars['smenu'] = new Smarty_variable(array(100=>array('#',' '),array('#',' '),array('#',' '),array('#',' ')), null, 0);?><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'mainMenu','elements'=>array(array('#',' '),array('#',' '),array('#',' '),array('#',' '),array('#',' '),array('#',' '),array('#',' '))+$_smarty_tpl->tpl_vars['smenu']->value), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'mainMenu','elements'=>array()+$_smarty_tpl->tpl_vars['smenu']->value), 0);?>
<?php }?></div><br>
<?php }} ?>