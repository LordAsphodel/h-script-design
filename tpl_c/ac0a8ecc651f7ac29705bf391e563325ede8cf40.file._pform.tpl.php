<?php /* Smarty version Smarty-3.1.8, created on 2017-09-05 01:15:16
         compiled from "tpl/en/balance/_pform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150354613259add074e11947-70723939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac0a8ecc651f7ac29705bf391e563325ede8cf40' => 
    array (
      0 => 'tpl/en/balance/_pform.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150354613259add074e11947-70723939',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pform' => 0,
    'f' => 0,
    'v' => 0,
    'btn_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59add074e45c16_22991495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59add074e45c16_22991495')) {function content_59add074e45c16_22991495($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['pform']->value['html']){?><br><center><?php echo $_smarty_tpl->tpl_vars['pform']->value['html'];?>
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