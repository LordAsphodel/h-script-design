<?php /* Smarty version Smarty-3.1.8, created on 2017-09-05 23:39:40
         compiled from "tpl/en/balance/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12310387559822bdbda9160-26200742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76975abd919927dd076b46c9cd1ccdf8c414d446' => 
    array (
      0 => 'tpl/en/balance/index.tpl',
      1 => 1504643271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12310387559822bdbda9160-26200742',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59822bdbe4c9b9_10836330',
  'variables' => 
  array (
    '_selfLink' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59822bdbe4c9b9_10836330')) {function content_59822bdbe4c9b9_10836330($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Balance'), 0);?>
<div class="page-heading"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Balance information</h1></div><div class="clear"></div></div><?php if (isset($_GET['fail'])){?><h2>Operation is NOT complete!</h2><p class="info">The operation was interrupted or an error has occured.<br><a href="<?php echo $_smarty_tpl->tpl_vars['_selfLink']->value;?>
">Retry</a> operation later.</p><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('balance/_bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><div class="box-info full animated fadeInDown"><h2 class="text-left"> <i class="fa fa-history"></i> My operations</h2> <br><?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php echo $_smarty_tpl->getSubTemplate ('balance/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('mlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','table_class'=>'table table-striped','fields'=>array('oTS'=>array('Date/Complete'),'oOper'=>array('Operation'),'oCID'=>array('Payment system'),'oSum1'=>array('Income'),'oSum2'=>array('Outcome'),'oBatch'=>array('Batch-number'),'oState'=>array('State'),'oMemo'=>array('Comments')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<p align="center"><a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=CASHIN" class="btn btn-primary"><b><u>Recharge</u></b></a>&nbsp;<a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=CASHOUT" class="btn btn-primary"><b><u>Withdraw*</u></b> </a></p>*Withdrawal is only available on Sundays according to the <a href="/rules">regulations</a> of the project</div><?php }?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>