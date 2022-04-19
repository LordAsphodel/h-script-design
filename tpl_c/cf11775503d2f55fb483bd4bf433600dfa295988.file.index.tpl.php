<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 11:45:10
         compiled from "tpl/en/depo/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67276420559822bdd0c8082-95692308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf11775503d2f55fb483bd4bf433600dfa295988' => 
    array (
      0 => 'tpl/en/depo/index.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67276420559822bdd0c8082-95692308',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59822bdd0eeb61_37114688',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59822bdd0eeb61_37114688')) {function content_59822bdd0eeb61_37114688($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'My deposits'), 0);?>
<div class="page-heading animateed fadeInDown"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>My deposits</h1></div><div class="clear"></div></div><?php echo $_smarty_tpl->getSubTemplate ('depo/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="box-info full animated fadeInDown"><h2 class="text-left"><i class="fa fa-history"></i> My deposits</h2><div id="transactions-table" class="collapse in"><div class="table-responsive p-b-20"><?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php echo $_smarty_tpl->getSubTemplate ('mlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','table_class'=>'table table-striped','fields'=>array('dID'=>array('<small>ID</small>'),'dCTS'=>array('<small>Start date</small>'),'cName'=>array('<small>Payment system</small>'),'dZD'=>array('<small>Sum</small>'),'pName'=>array('<small>Plan</small>'),'dLTS'=>array('<small>Last charged</small>'),'dN'=>array('<small>Times charged</small>'),'dZP'=>array('<small>Total charged</small>'),'dNTS'=>array('<small>Next accrual</small>'),'dState'=>array('<small>State</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<?php }else{ ?><table class="table table-striped"><thead><tr><th><small>ID</small></th><th><small>Start date</small></th><th><small>Payment system</small></th><th><small>Sum</small></th><th><small>Plan</small></th><th><small>Last charged</small></th><th><small>Times charged</small></th><th><small>Total charged</small></th><th><small>Next accrual</small></th><th><small>State</small></th></tr></thead><tbody><tr><td colspan="4">You have no deposits</td></tr></tbody></table><?php }?></div></div></div><div class="box-info full animated fadeInDown"><h2 class="text-left"> <a href="<?php echo tplModuleToLink(array('module'=>'depo/depo'),$_smarty_tpl);?>
?add" class="button-green"><i class="fa fa-money"></i>&nbsp; Create a deposit</a></h2></div><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>