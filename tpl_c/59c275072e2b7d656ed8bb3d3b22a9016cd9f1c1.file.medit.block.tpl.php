<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 23:23:13
         compiled from "tpl/en/medit.block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128111787059ad128a6ef378-15291795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59c275072e2b7d656ed8bb3d3b22a9016cd9f1c1' => 
    array (
      0 => 'tpl/en/medit.block.tpl',
      1 => 1508709644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128111787059ad128a6ef378-15291795',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad128a727bc2_36812351',
  'variables' => 
  array (
    'fields' => 0,
    'v' => 0,
    'f' => 0,
    'values' => 0,
    'row_wrap' => 0,
    'edit_form_name' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad128a727bc2_36812351')) {function content_59ad128a727bc2_36812351($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (is_array($_smarty_tpl->tpl_vars['v']->value)&&!$_smarty_tpl->tpl_vars['v']->value['skip']&&($_smarty_tpl->tpl_vars['v']->value[0]=='Y')){?><script type="text/javascript" src="ckeditor/ckeditor.js"></script><?php break 1?><?php }?><?php } ?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (is_int($_smarty_tpl->tpl_vars['f']->value)){?> 							<tr><th colspan="2" align="center"><hr><a name="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"></a><?php if ($_smarty_tpl->tpl_vars['v']->value){?>- <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 -<?php }?></th></tr><?php }elseif(!(is_array($_smarty_tpl->tpl_vars['v']->value)&&$_smarty_tpl->tpl_vars['v']->value['skip'])){?><?php $_smarty_tpl->tpl_vars['vv'] = new Smarty_variable(_arr_val($_smarty_tpl->tpl_vars['values']->value,$_smarty_tpl->tpl_vars['f']->value), null, 0);?><?php if (is_array($_smarty_tpl->tpl_vars['v']->value)&&$_smarty_tpl->tpl_vars['v']->value[0]){?>				<?php if ($_smarty_tpl->tpl_vars['row_wrap']->value){?><div class="<?php echo $_smarty_tpl->tpl_vars['row_wrap']->value;?>
"><?php echo $_smarty_tpl->getSubTemplate ('medit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('medit.row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php }else{ ?>									<input name="<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['edit_form_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
" value="<?php if (is_array($_smarty_tpl->tpl_vars['v']->value)){?><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?>" type="hidden"><?php }?><?php }?><?php } ?><?php }} ?>