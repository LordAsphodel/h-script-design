<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 11:46:52
         compiled from "tpl/en/depo/depo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166195832459ad12fc1c86f7-55117801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8db3b791f8cd22d4236d80c96031a3cfe749cff5' => 
    array (
      0 => 'tpl/en/depo/depo.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166195832459ad12fc1c86f7-55117801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'el' => 0,
    'plani' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad12fc1efec9_48185200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad12fc1efec9_48185200')) {function content_59ad12fc1efec9_48185200($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Create a deposit'), 0);?>
<div class="page-heading animateed fadeInDown"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Create a deposit</h1></div><div class="clear"></div></div><?php if ($_smarty_tpl->tpl_vars['el']->value){?><div class="box-info full animated fadeInDown"><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-right: 1px solid #eee; padding-top: 10px;"><div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div><?php echo $_smarty_tpl->getSubTemplate ('depo/_depo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php }else{ ?><div class="row"><?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plani']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?><div class="col-sm-6 col-xs-12 col-md-6 col-lg-4"><div class="box-info crypto-box-rate box-rate full animated fadeInDown"><div class="rate-ic"><div style="background-image: url(/assets/img/crypto.png); background-position: -117px 9px;"></div></div><div class="rate-title" style="background: #5cb85c;"><?php echo $_smarty_tpl->tpl_vars['p']->value['pName'];?>
</div><form class="rate-cform" method="post" name="new"><input name="Login" id="new_Login" value="" type="hidden"><input name="PSys" id="new_PSys" value="3" type="hidden"><div class="rate-cont rate-top-15"><div class="cr-title">From <span><?php echo _z($_smarty_tpl->tpl_vars['p']->value['pMin'],2);?>
 $</span></div><div class="cr-title">Up to <span><?php echo _z($_smarty_tpl->tpl_vars['p']->value['pMax'],2);?>
 $</span></div><div class="rate-divider"></div><div class="row"><div class="col-md-4 col-sm-4 col-xs-4 col-xs-offset-2"><div class="sm-bl"><?php echo $_smarty_tpl->tpl_vars['p']->value['pPerc'];?>
%</div><div class="sm-gr">a day</div></div><div class="col-md-4 col-sm-4 col-xs-4"><div class="sm-bl">Infinite</div><div class="sm-gr">period</div></div></div><div class="rate-divider"></div><br><br><div class="lg-title"><input placeholder="0.00$" name="Sum" type="text" value="<?php echo _z($_smarty_tpl->tpl_vars['p']->value['pMin']);?>
"></div></div><div class="rate-form"><div class="r-form-group"><input type="hidden" name="Plan" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['pID'];?>
"><button type="submit" name="new_btn" class="f-element f-button">Invest</button></div></div></form></div></div><?php } ?></div></div></div><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>