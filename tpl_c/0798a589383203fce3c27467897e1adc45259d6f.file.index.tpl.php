<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 11:51:20
         compiled from "tpl/ru/account/change_pass/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1781409742596b031f955ab4-01933460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0798a589383203fce3c27467897e1adc45259d6f' => 
    array (
      0 => 'tpl/ru/account/change_pass/index.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1781409742596b031f955ab4-01933460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_596b031f98a364_83071739',
  'variables' => 
  array (
    'user' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596b031f98a364_83071739')) {function content_596b031f98a364_83071739($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Смена пароля'), 0);?>
<div class="page-heading animateed fadeInDown"><div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;"><h1>Смена пароля</h1></div><div class="clear"></div></div><div class="box-info full animated fadeInDown"><div class="settings-content clearfix"><div class="col-xs-12"><h2><i class="fa fa-lock"></i> Смена пароля</h2><div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div><?php if ($_smarty_tpl->tpl_vars['user']->value['uPTS']==1){?><p class="info">Вам был выдан временный пароль.<br>Смените его на более сложный</p><?php }elseif(isset($_GET['need_change'])){?><p class="info">Вы давно не меняли пароль.<br>Политика безопасности нашего сайта требует сменить его</p><?php }?><?php echo $_smarty_tpl->getSubTemplate ('medit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','form_class'=>'form-horizontal','row_wrap'=>'settings-form-group form-group','label_class'=>'col-sm-3 control-label','input_class'=>'form-control','input_wrap'=>'col-sm-6','btn_class'=>'btn btn-primary col-sm-12','btn_wrapp'=>'col-sm-6 col-sm-offset-3','fields'=>array('Pass0'=>array('*','Старый пароль!!',array('pass0_wrong'=>'неверный пароль')),'Pass'=>array('*','Новый пароль!!',array('pass_empty'=>'укажите пароль','pass_short'=>"пароль слишком короткий [не менее ".($_smarty_tpl->tpl_vars['MinPass']->value)."]",'pass_wrong'=>'пароль не соответствует формату')),'Pass2'=>array('*','Повторите новый пароль!!',array('pass_not_equal'=>'пароли не совпадают')),'PIN'=>array('*','Введите PIN-код!! <<чтобы подтвердить смену>>',array('pin_wrong'=>'неверный код'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinPIN']==0),'size'=>8)),'btn_text'=>'Сменить','btns'=>valueIf(isset($_GET['need_change']),array('skip'=>'Не менять'))), 0);?>
</div></div></div><?php echo $_smarty_tpl->getSubTemplate ('footercabinet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>