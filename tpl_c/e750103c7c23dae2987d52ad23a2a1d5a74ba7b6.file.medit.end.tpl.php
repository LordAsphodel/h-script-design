<?php /* Smarty version Smarty-3.1.8, created on 2022-04-20 00:21:56
         compiled from "tpl/ru\medit.end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5042625f27f42fb952-76351904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e750103c7c23dae2987d52ad23a2a1d5a74ba7b6' => 
    array (
      0 => 'tpl/ru\\medit.end.tpl',
      1 => 1510939449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5042625f27f42fb952-76351904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit_form_name' => 0,
    'captcha' => 0,
    '__Capt' => 0,
    'edit_descr_star' => 0,
    'errors' => 0,
    'error_text' => 0,
    'tpl_errors' => 0,
    'e' => 0,
    'lost_err' => 0,
    'row_wrap' => 0,
    'btn_wrapp' => 0,
    'btn_text' => 0,
    'edit_is_new' => 0,
    'btn_class' => 0,
    'btns' => 0,
    'f' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_625f27f43bc334_97562658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_625f27f43bc334_97562658')) {function content_625f27f43bc334_97562658($_smarty_tpl) {?><?php echo tplFormSecurity(array('form'=>$_smarty_tpl->tpl_vars['edit_form_name']->value,'captcha'=>$_smarty_tpl->tpl_vars['captcha']->value),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['__Capt']->value){?><?php echo $_smarty_tpl->getSubTemplate ('captcha.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>$_smarty_tpl->tpl_vars['edit_form_name']->value,'star'=>$_smarty_tpl->tpl_vars['edit_descr_star']->value), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['errors']->value){?><?php echo $_smarty_tpl->getSubTemplate ('err.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>$_smarty_tpl->tpl_vars['edit_form_name']->value,'errs'=>$_smarty_tpl->tpl_vars['errors']->value), 0);?>
<?php echo $_smarty_tpl->tpl_vars['error_text']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value[$_smarty_tpl->tpl_vars['edit_form_name']->value]){?><?php $_smarty_tpl->tpl_vars['lost_err'] = new Smarty_variable('', null, 0);?><?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tpl_errors']->value[$_smarty_tpl->tpl_vars['edit_form_name']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['e']->key;
?><?php if ($_smarty_tpl->tpl_vars['e']->value){?><?php $_smarty_tpl->tpl_vars['lost_err'] = new Smarty_variable(($_smarty_tpl->tpl_vars['lost_err']->value).($_smarty_tpl->tpl_vars['e']->value)."<br>", null, 0);?><?php }?><?php } ?><?php if ($_smarty_tpl->tpl_vars['lost_err']->value){?><span class="err"><?php echo $_smarty_tpl->tpl_vars['lost_err']->value;?>
</span><?php }?><?php }?><br><?php if ($_smarty_tpl->tpl_vars['row_wrap']->value){?>							<div class="<?php echo $_smarty_tpl->tpl_vars['row_wrap']->value;?>
"><?php }?><?php if ($_smarty_tpl->tpl_vars['btn_wrapp']->value){?><div class="<?php echo $_smarty_tpl->tpl_vars['btn_wrapp']->value;?>
"><?php }?><?php if ($_smarty_tpl->tpl_vars['btn_text']->value!==' '){?><input name="<?php echo $_smarty_tpl->tpl_vars['edit_form_name']->value;?>
_btn" value="<?php if ($_smarty_tpl->tpl_vars['btn_text']->value){?><?php echo $_smarty_tpl->tpl_vars['btn_text']->value;?>
<?php }elseif(!$_smarty_tpl->tpl_vars['edit_is_new']->value){?>Сохранить<?php }else{ ?>Создать<?php }?>" type="submit" <?php if ($_smarty_tpl->tpl_vars['btn_class']->value){?> class="<?php echo $_smarty_tpl->tpl_vars['btn_class']->value;?>
"<?php }?>><?php }?><?php if (is_array($_smarty_tpl->tpl_vars['btns']->value)){?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['btns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['v']->key;
?><input name="<?php echo $_smarty_tpl->tpl_vars['edit_form_name']->value;?>
_btn<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
" onClick="return confirm('Подтвердите операцию \'<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
\'');" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['btn_class']->value){?>class="<?php echo $_smarty_tpl->tpl_vars['btn_class']->value;?>
"<?php }?>><?php } ?><?php }?><?php if ($_smarty_tpl->tpl_vars['btn_wrapp']->value){?></div><?php }?><?php if ($_smarty_tpl->tpl_vars['row_wrap']->value){?></div><?php }?></form><?php }} ?>