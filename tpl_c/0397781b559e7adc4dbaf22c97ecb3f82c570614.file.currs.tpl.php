<?php /* Smarty version Smarty-3.1.8, created on 2017-09-05 21:25:48
         compiled from "tpl/en/balance/admin/currs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140430211759aeec2c838527-93123962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0397781b559e7adc4dbaf22c97ecb3f82c570614' => 
    array (
      0 => 'tpl/en/balance/admin/currs.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140430211759aeec2c838527-93123962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59aeec2c87b171_51821993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aeec2c87b171_51821993')) {function content_59aeec2c87b171_51821993($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Payment systems'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Payment systems','url'=>'*','fields'=>array('cID'=>array('ID'),'cCID'=>array('Code'),'cName'=>array('Name'),'cCurr'=>array('Currency'),'cBal'=>array('Balance'),'cAPI'=>array('API'),'cDisable'=>array('<small>Disabled</small>'),'cCASHIN'=>array('<small>CashIn</small>'),'cCASHOUT'=>array('<small>CashOut</small>'),'cEX'=>array('<small>Exchange</small>'),'cTR'=>array('<small>Transfer</small>'),'cBUY'=>array('<small>Buy</small>'),'cSELL'=>array('<small>Sell</small>'),'cBUY2'=>array('<small>Service</small>'),'cSELL2'=>array('<small>Service</small>'),'cGIVE'=>array('<small>Deposit</small>'),'cTAKE'=>array('<small>Withdrawal</small>'),'cHidden'=>array('<small>Hidden</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Delete')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'balance/admin/curr'),$_smarty_tpl);?>
?add" class="button-green">Create</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>