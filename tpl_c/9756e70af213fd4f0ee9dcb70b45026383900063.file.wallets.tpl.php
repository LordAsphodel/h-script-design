<?php /* Smarty version Smarty-3.1.8, created on 2017-10-29 18:46:06
         compiled from "tpl/ru/balance/wallets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8098053115958d37324ef72-16396856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9756e70af213fd4f0ee9dcb70b45026383900063' => 
    array (
      0 => 'tpl/ru/balance/wallets.tpl',
      1 => 1508709662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8098053115958d37324ef72-16396856',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958d373283073_99388679',
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
<?php if ($_valid && !is_callable('content_5958d373283073_99388679')) {function content_5958d373283073_99388679($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Платежные реквизиты'), 0);?>
<div class="page-heading"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Платежные реквизиты</h1></div><div class="clear"></div></div><div class="settings-box animated fadeInDown"><div class="settings-nav clearfix"><a href="/account" class=""><i class="fa fa-cogs"></i> Безопасность</a><a href="/balance/wallets" class="active"><i class="fa fa-money"></i> Мои реквизиты</a></div><div class="settings-content clearfix"><div class="col-xs-12"><h2><i class="fa fa-money"></i> Мои реквизиты</h2><div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div><?php if (!$_smarty_tpl->tpl_vars['wfields']->value){?><p class="info">Платежные системы не подключены</p><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr']){?><?php $_smarty_tpl->tpl_vars['wfields'] = new Smarty_variable(array('DefCurr'=>array('S','Платежная система по умолчанию!!',array('psys_wrong'=>'укажите плат.систему'),array(0=>'- выберите -')+(array)$_smarty_tpl->tpl_vars['defcurr']->value,'default'=>$_smarty_tpl->tpl_vars['user']->value['aDefCurr']))+$_smarty_tpl->tpl_vars['wfields']->value, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['showbutton']->value&&($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinPIN']>0)){?><?php $_smarty_tpl->createLocalArrayVariable('wfields', null, 0);
$_smarty_tpl->tpl_vars['wfields']->value[] = '';?><?php $_smarty_tpl->createLocalArrayVariable('wfields', null, 0);
$_smarty_tpl->tpl_vars['wfields']->value['PIN'] = array('*','Введите PIN-код!! <<чтобы подтвердить изменения>>',array('pin_wrong'=>'неверный код'),'size'=>8);?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'/balance/wallets','form_class'=>'form-horizontal','row_wrap'=>'settings-form-group form-group','label_class'=>'col-sm-6 control-label','input_class'=>'form-control','input_wrap'=>'col-sm-6','btn_class'=>'btn btn-primary col-sm-12','btn_wrapp'=>'col-sm-6 col-sm-offset-6','fields'=>$_smarty_tpl->tpl_vars['wfields']->value,'values'=>$_smarty_tpl->tpl_vars['wdata']->value,'btn_text'=>valueIf(!$_smarty_tpl->tpl_vars['showbutton']->value,' ')), 0);?>
<?php }?></div></div></div><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>