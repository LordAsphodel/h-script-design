<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:07:51
         compiled from "tpl/ru/cabinet/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59371073459573f6b27ce13-13566053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c83ee16cf65c988b7c9f3b5e27e5862c269ac824' => 
    array (
      0 => 'tpl/ru/cabinet/index.tpl',
      1 => 1508709663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59371073459573f6b27ce13-13566053',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59573f6b2b1ae5_35570281',
  'variables' => 
  array (
    'curr1' => 0,
    'ondeposits' => 0,
    'allearn' => 0,
    'referalsearn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59573f6b2b1ae5_35570281')) {function content_59573f6b2b1ae5_35570281($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Кабинет'), 0);?>
<div class="page-heading animateed fadeInDown"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Мой кабинет</h1></div><div class="clear"></div></div><!-- End page header --><!-- Start info box --><div class="row"><div class="col-sm-3 col-xs-6"><div class="box-info animateed fadeInDown"><div class="icon-box"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x success"></i><i class="fa fa-balance-scale fa-stack-1x fa-inverse"></i></span></div><div class="text-box"><h3 class="js-balance-value">$<?php echo _z($_smarty_tpl->tpl_vars['curr1']->value['wBal'],2);?>
</h3><p>БАЛАНС</p></div><div class="clear"></div></div></div><div class="col-sm-3 col-xs-6"><div class="box-info animateed fadeInDown"><div class="icon-box"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x danger"></i><i class="fa fa-suitcase fa-stack-1x fa-inverse"></i></span></div><div class="text-box"><h3 class="js-contribution-value">$<?php echo _z($_smarty_tpl->tpl_vars['ondeposits']->value,2);?>
</h3><p>АКТИВНЫЕ ДЕПОЗИТЫ</p></div><div class="clear"></div></div></div><div class="col-sm-3 col-xs-6"><div class="box-info animateed fadeInDown"><div class="icon-box"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x info"></i><i class="fa fa-dollar fa-stack-1x fa-inverse"></i></span></div><div class="text-box"><h3>$<?php echo _z($_smarty_tpl->tpl_vars['allearn']->value,2);?>
</h3><p>ДОХОД ОБЩИЙ</p></div><div class="clear"></div></div></div><div class="col-sm-3 col-xs-6"><div class="box-info animateed fadeInDown"><div class="icon-box"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x warning"></i><i class="fa fa-handshake-o fa-stack-1x fa-inverse"></i></span></div><div class="text-box"><h3>$<?php echo _z($_smarty_tpl->tpl_vars['referalsearn']->value,2);?>
</h3><p>ДОХОД ПО ПАРТНЁРАМ</p></div><div class="clear"></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate ('balance/_stat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>