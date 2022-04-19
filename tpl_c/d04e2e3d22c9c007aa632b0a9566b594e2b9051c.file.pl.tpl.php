<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:07:02
         compiled from "tpl/ru/pl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1267254123595740abe79361-55728872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd04e2e3d22c9c007aa632b0a9566b594e2b9051c' => 
    array (
      0 => 'tpl/ru/pl.tpl',
      1 => 1508709649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1267254123595740abe79361-55728872',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595740abea20b3_40854846',
  'variables' => 
  array (
    'pl_params' => 0,
    '_selfLink' => 0,
    'pn' => 0,
    'linkparams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595740abea20b3_40854846')) {function content_595740abea20b3_40854846($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['pl_params']->value['Pages'])>0){?><div class="paginator"><small>&nbsp&nbsp&nbsp&nbsp&nbspСтраница <?php echo $_smarty_tpl->tpl_vars['pl_params']->value['Page'];?>
 из <?php echo $_smarty_tpl->tpl_vars['pl_params']->value['PagesCount'];?>
</small><?php if (count($_smarty_tpl->tpl_vars['pl_params']->value['Pages'])>0){?>&nbsp;&nbsp;&nbsp;<?php }?><?php  $_smarty_tpl->tpl_vars['pn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pn']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pl_params']->value['Pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pn']->key => $_smarty_tpl->tpl_vars['pn']->value){
$_smarty_tpl->tpl_vars['pn']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['pn']->key;
?><a href="<?php echo $_smarty_tpl->tpl_vars['_selfLink']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['pn']->value[1];?>
<?php echo $_smarty_tpl->tpl_vars['linkparams']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['pn']->value[1]==$_smarty_tpl->tpl_vars['pl_params']->value['Page']){?>pgactive<?php }else{ ?>pgbutton<?php }?>"><?php if ($_smarty_tpl->tpl_vars['pn']->value[0]=='&lt;&lt;'){?>Первая<?php }elseif($_smarty_tpl->tpl_vars['pn']->value[0]=='&lt;'){?>Назад<?php }elseif($_smarty_tpl->tpl_vars['pn']->value[0]=='&gt;'){?>Вперед<?php }elseif($_smarty_tpl->tpl_vars['pn']->value[0]=='&gt;&gt;'){?>Последняя<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['pn']->value[0];?>
<?php }?></a>&nbsp<?php } ?></div><?php }?>
<?php }} ?>