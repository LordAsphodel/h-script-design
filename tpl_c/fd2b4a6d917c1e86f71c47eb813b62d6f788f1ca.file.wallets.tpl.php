<?php /* Smarty version Smarty-3.1.8, created on 2017-09-05 23:42:26
         compiled from "tpl/en/balance/wallets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152283775059822bde6ccb82-18832705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd2b4a6d917c1e86f71c47eb813b62d6f788f1ca' => 
    array (
      0 => 'tpl/en/balance/wallets.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152283775059822bde6ccb82-18832705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59822bde6fdbf3_95081741',
  'variables' => 
  array (
    'wfields' => 0,
    '_cfg' => 0,
    'defcurr' => 0,
    'user' => 0,
    'showbutton' => 0,
    'wdata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59822bde6fdbf3_95081741')) {function content_59822bde6fdbf3_95081741($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Payment settings'), 0);?>
<div class="page-heading"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Payment settings</h1></div><div class="clear"></div></div><div class="settings-box animated fadeInDown"><div class="settings-nav clearfix"><a href="/account" class=""><i class="fa fa-cogs"></i> Security settings</a><a href="/balance/wallets" class="active"><i class="fa fa-money"></i> Payment settings</a></div><div class="settings-content clearfix"><div class="col-xs-12"><h2><i class="fa fa-money"></i>Payment settings</h2><div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div><?php if (!$_smarty_tpl->tpl_vars['wfields']->value){?><p class="info">Payment systems are disabled.</p><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr']){?><?php $_smarty_tpl->tpl_vars['wfields'] = new Smarty_variable(array('DefCurr'=>array('S','Default payment system!!',array('psys_wrong'=>'Set payment system'),array(0=>'- select -')+(array)$_smarty_tpl->tpl_vars['defcurr']->value,'default'=>$_smarty_tpl->tpl_vars['user']->value['aDefCurr']))+$_smarty_tpl->tpl_vars['wfields']->value, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['showbutton']->value&&($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinPIN']>0)){?><?php $_smarty_tpl->createLocalArrayVariable('wfields', null, 0);
$_smarty_tpl->tpl_vars['wfields']->value[] = '';?><?php $_smarty_tpl->createLocalArrayVariable('wfields', null, 0);
$_smarty_tpl->tpl_vars['wfields']->value['PIN'] = array('*','Enter PIN-code!! <<to confirm changes>>',array('pin_wrong'=>'Incorrect code'),'size'=>8);?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'/balance/wallets','form_class'=>'form-horizontal','row_wrap'=>'settings-form-group form-group','label_class'=>'col-sm-6 control-label','input_class'=>'form-control','input_wrap'=>'col-sm-6','btn_class'=>'btn btn-primary col-sm-12','btn_wrapp'=>'col-sm-6 col-sm-offset-6','fields'=>$_smarty_tpl->tpl_vars['wfields']->value,'values'=>$_smarty_tpl->tpl_vars['wdata']->value,'btn_text'=>valueIf(!$_smarty_tpl->tpl_vars['showbutton']->value,' ')), 0);?>
<?php }?></div></div></div><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>