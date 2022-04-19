<?php /* Smarty version Smarty-3.1.8, created on 2017-07-01 11:01:58
         compiled from "tpl/ru/depo/calc.box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2051363277595756f62187f9-72180134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '696a733a629332a0ca56d43e4907773b76afe660' => 
    array (
      0 => 'tpl/ru/depo/calc.box.tpl',
      1 => 1498731097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2051363277595756f62187f9-72180134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'calc_pselect' => 0,
    'calc_compnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595756f6228a43_05111928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595756f6228a43_05111928')) {function content_595756f6228a43_05111928($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'calc','fields'=>array('sum'=>array('$','Сумма вклада','default'=>10),'plan'=>array('S','План',0,$_smarty_tpl->tpl_vars['calc_pselect']->value,'skip'=>false),'cmpd'=>array('S','Реинвестирование',0,$_smarty_tpl->tpl_vars['calc_compnd']->value,'skip'=>!$_smarty_tpl->tpl_vars['calc_compnd']->value)),'on_submit'=>'recalc(); return false;','btn_text'=>'Расчет'), 0);?>
<?php }} ?>