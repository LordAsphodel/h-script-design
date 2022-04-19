<?php /* Smarty version Smarty-3.1.8, created on 2017-10-25 15:00:17
         compiled from "tpl/en/line.main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18069491459566d3c219308-11836122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c3fa159f71ebb6266e981adce85951fd08dd1b5' => 
    array (
      0 => 'tpl/en/line.main.tpl',
      1 => 1508709643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18069491459566d3c219308-11836122',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59566d3c24bb87_57540172',
  'variables' => 
  array (
    'smenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59566d3c24bb87_57540172')) {function content_59566d3c24bb87_57540172($_smarty_tpl) {?><div class="_menuPanel"><?php $_smarty_tpl->tpl_vars['smenu'] = new Smarty_variable(array(100=>array('#',' '),array('#',' '),array('#',' '),array('#',' ')), null, 0);?><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'mainMenu','elements'=>array(array('#',' '),array('#',' '),array('#',' '),array('#',' '),array('#',' '),array('#',' '),array('#',' '))+$_smarty_tpl->tpl_vars['smenu']->value), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'mainMenu','elements'=>array()+$_smarty_tpl->tpl_vars['smenu']->value), 0);?>
<?php }?></div><br>
<?php }} ?>