<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:07:44
         compiled from "tpl/ru/captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:641227654596542cedc7f69-30355852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a62403f114e49591697bc52e19760ebfd43e459' => 
    array (
      0 => 'tpl/ru/captcha.tpl',
      1 => 1508709646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '641227654596542cedc7f69-30355852',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_596542cee083c4_74822421',
  'variables' => 
  array (
    'class' => 0,
    'error_class' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596542cee083c4_74822421')) {function content_596542cee083c4_74822421($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('err.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errs'=>array('captcha_wrong'=>'неверный код')), 0);?>
<?php if ($_smarty_tpl->tpl_vars['class']->value){?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable(" ".($_smarty_tpl->tpl_vars['class']->value), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("captcha".($_smarty_tpl->tpl_vars['class']->value).($_smarty_tpl->tpl_vars['error_class']->value), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('captcha/box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>