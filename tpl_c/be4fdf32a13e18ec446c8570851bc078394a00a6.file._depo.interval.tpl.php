<?php /* Smarty version Smarty-3.1.8, created on 2017-07-02 13:25:37
         compiled from "tpl/ru/depo/_depo.interval.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9445323285958ca21f38c57-23774014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be4fdf32a13e18ec446c8570851bc078394a00a6' => 
    array (
      0 => 'tpl/ru/depo/_depo.interval.tpl',
      1 => 1498731101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9445323285958ca21f38c57-23774014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_cfg' => 0,
    'nextdepoleft' => 0,
    'nextdepotime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958ca220414c6_14486508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958ca220414c6_14486508')) {function content_5958ca220414c6_14486508($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Depo_Interval']>0){?><p class="info"><?php if ($_smarty_tpl->tpl_vars['nextdepoleft']->value>0){?>Расчетное время активации вклада - <b><?php echo $_smarty_tpl->tpl_vars['nextdepotime']->value;?>
</b><br>(примерно через <?php echo $_smarty_tpl->tpl_vars['nextdepoleft']->value;?>
 мин.)<?php }else{ ?>Ваш вклад будет <b>сразу же</b> активирован<?php }?></p><?php }?><?php }} ?>