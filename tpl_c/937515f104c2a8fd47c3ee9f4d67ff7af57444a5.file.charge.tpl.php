<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 16:36:13
         compiled from "tpl/ru/depo/admin/charge.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1069723169595cfe4d247922-47825314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '937515f104c2a8fd47c3ee9f4d67ff7af57444a5' => 
    array (
      0 => 'tpl/ru/depo/admin/charge.tpl',
      1 => 1508709689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1069723169595cfe4d247922-47825314',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595cfe4d2cffd0_86655040',
  'variables' => 
  array (
    '_cfg' => 0,
    'cdate' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595cfe4d2cffd0_86655040')) {function content_595cfe4d2cffd0_86655040($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Начисление'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Depo_ChargeMode']==2){?><p class="info">Произойдет <b>однократное</b> начисление процентов<br>на <b><?php echo $_smarty_tpl->tpl_vars['cdate']->value;?>
</b> по всем вкладам, имеющим отмеченные планы</p><?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Ручное начисление','url'=>'*','fields'=>array('pID'=>array('ID'),'pHidden'=>array('Невид.'),'pName'=>array('Наменование'),'pMin'=>array('Мин.'),'pMax'=>array('Макс.'),'pDays'=>array('Длит.'),'pPerc'=>array('<small>Процент</small>'),'cnt'=>array('<small>Вкладов</small>')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Начислить')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'balance/admin/opers'),$_smarty_tpl);?>
" class="button-green">Операции</a><br><?php }elseif($_smarty_tpl->tpl_vars['_cfg']->value['Depo_ChargeMode']==1){?><p class="info">Начисление происходит <a href="<?php echo tplModuleToLink(array('module'=>'depo/admin/setup'),$_smarty_tpl);?>
">автоматически</a></p><?php }else{ ?><p class="info">Начисление <a href="<?php echo tplModuleToLink(array('module'=>'depo/admin/setup'),$_smarty_tpl);?>
">отключено</a></p><?php }?><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>