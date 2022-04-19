<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:07:44
         compiled from "tpl/ru/captcha/default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1521338845596542cee11358-61611010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea8f5622b231ca3909e70f7ef55a07c6f7578c0e' => 
    array (
      0 => 'tpl/ru/captcha/default/index.tpl',
      1 => 1508709688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1521338845596542cee11358-61611010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_596542cee1d217_30631662',
  'variables' => 
  array (
    '__Capt' => 0,
    'form' => 0,
    'star' => 0,
    'error_text' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596542cee1d217_30631662')) {function content_596542cee1d217_30631662($_smarty_tpl) {?><table class="formatTable"><tr><td align="right"><?php echo $_smarty_tpl->tpl_vars['__Capt']->value;?>
</td><td><label for="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
_capt"><span class="descr_req">Код с картинки<?php echo $_smarty_tpl->tpl_vars['star']->value;?>
</span></label><br><?php echo $_smarty_tpl->tpl_vars['error_text']->value;?>
<input name="__Capt" id="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
_capt" type="text" size="8" class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"></td></tr></table><?php }} ?>