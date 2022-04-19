<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:11:53
         compiled from "tpl/ru/balance/_pform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16936751645958a6117e0ce5-12148870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7223df9eaec4915b425e0dd356e661b89c8559d' => 
    array (
      0 => 'tpl/ru/balance/_pform.tpl',
      1 => 1508709663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16936751645958a6117e0ce5-12148870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958a6117ff681_48686349',
  'variables' => 
  array (
    'pform' => 0,
    'f' => 0,
    'v' => 0,
    'btn_text' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958a6117ff681_48686349')) {function content_5958a6117ff681_48686349($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['pform']->value['html']){?><br><center><?php echo $_smarty_tpl->tpl_vars['pform']->value['html'];?>
</center><?php }elseif($_smarty_tpl->tpl_vars['pform']->value['url']){?><br><center><form method="<?php if ($_smarty_tpl->tpl_vars['pform']->value['get']){?>get<?php }else{ ?>post<?php }?>" action="<?php echo $_smarty_tpl->tpl_vars['pform']->value['url'];?>
" name="pay_form"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pform']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (($_smarty_tpl->tpl_vars['f']->value!='url')&&($_smarty_tpl->tpl_vars['f']->value!='get')){?><input name="<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" type="hidden"><?php }?><?php } ?><input value="<?php if ($_smarty_tpl->tpl_vars['btn_text']->value){?><?php echo $_smarty_tpl->tpl_vars['btn_text']->value;?>
<?php }else{ ?>Перейти на сайт платежной системы<?php }?>" type="submit" class="button-green"></form><?php if (isset($_GET['pay'])){?><script type="text/javascript">document.pay_form.submit();</script><?php }?></center><?php }?><?php }} ?>