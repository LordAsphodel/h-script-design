<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 23:23:23
         compiled from "tpl/en/edit.block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208283625559566d008a7ff8-54741711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01135d26e95c7df37b4e6dcdd15fa0d7c1ed1e59' => 
    array (
      0 => 'tpl/en/edit.block.tpl',
      1 => 1508709642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208283625559566d008a7ff8-54741711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59566d008f6177_01131975',
  'variables' => 
  array (
    'fields' => 0,
    'v' => 0,
    'table_class' => 0,
    'f' => 0,
    'values' => 0,
    'edit_form_name' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59566d008f6177_01131975')) {function content_59566d008f6177_01131975($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (is_array($_smarty_tpl->tpl_vars['v']->value)&&!$_smarty_tpl->tpl_vars['v']->value['skip']&&($_smarty_tpl->tpl_vars['v']->value[0]=='Y')){?><script type="text/javascript" src="ckeditor/ckeditor.js"></script><?php break 1?><?php }?><?php } ?><fieldset><table class="<?php if ($_smarty_tpl->tpl_vars['table_class']->value){?><?php echo $_smarty_tpl->tpl_vars['table_class']->value;?>
<?php }else{ ?>formatTable<?php }?>"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (is_int($_smarty_tpl->tpl_vars['f']->value)){?> 							<tr><th colspan="2" align="center"><hr><a name="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"></a><?php if ($_smarty_tpl->tpl_vars['v']->value){?>- <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 -<?php }?></th></tr><?php }elseif(!(is_array($_smarty_tpl->tpl_vars['v']->value)&&$_smarty_tpl->tpl_vars['v']->value['skip'])){?><?php $_smarty_tpl->tpl_vars['vv'] = new Smarty_variable(_arr_val($_smarty_tpl->tpl_vars['values']->value,$_smarty_tpl->tpl_vars['f']->value), null, 0);?><?php if (is_array($_smarty_tpl->tpl_vars['v']->value)&&$_smarty_tpl->tpl_vars['v']->value[0]){?>				<tr<?php if ($_smarty_tpl->tpl_vars['v']->value['row_class']){?> class="<?php echo $_smarty_tpl->tpl_vars['v']->value['row_class'];?>
"<?php }?>><?php echo $_smarty_tpl->getSubTemplate ('edit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</tr><?php }else{ ?>									<input name="<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['edit_form_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
" value="<?php if (is_array($_smarty_tpl->tpl_vars['v']->value)){?><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?>" type="hidden"><?php }?><?php }?><?php } ?></table></fieldset><?php }} ?>