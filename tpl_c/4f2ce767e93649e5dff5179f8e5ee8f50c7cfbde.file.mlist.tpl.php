<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:12:05
         compiled from "tpl/ru/mlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21171433359ad098c68ec13-03651045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f2ce767e93649e5dff5179f8e5ee8f50c7cfbde' => 
    array (
      0 => 'tpl/ru/mlist.tpl',
      1 => 1508709649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21171433359ad098c68ec13-03651045',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad098c70f035_04062987',
  'variables' => 
  array (
    'title' => 0,
    'values' => 0,
    'btns' => 0,
    'form' => 0,
    'list_form_name' => 0,
    'url' => 0,
    '_selfLink' => 0,
    'table_class' => 0,
    'fields' => 0,
    'f' => 0,
    'pl_params' => 0,
    'z' => 0,
    'v' => 0,
    'zn' => 0,
    'row_class' => 0,
    'id' => 0,
    'l' => 0,
    'row' => 0,
    'linkparams' => 0,
    'btn_wrapp' => 0,
    'include_code' => 0,
    'btn_class' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad098c70f035_04062987')) {function content_59ad098c70f035_04062987($_smarty_tpl) {?><script type="text/javascript" src="js/lists.js"></script><?php if ($_smarty_tpl->tpl_vars['title']->value){?><h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2><?php }?><?php if (count($_smarty_tpl->tpl_vars['values']->value)){?><?php if (is_array($_smarty_tpl->tpl_vars['btns']->value)){?><?php $_smarty_tpl->tpl_vars['list_form_name'] = new Smarty_variable(getFormName($_smarty_tpl->tpl_vars['form']->value), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('_info'=>getInfoData($_smarty_tpl->tpl_vars['list_form_name']->value)), 0);?>
<form method="post"<?php if ($_smarty_tpl->tpl_vars['url']->value){?> action="<?php if ($_smarty_tpl->tpl_vars['url']->value=='*'){?><?php echo $_smarty_tpl->tpl_vars['_selfLink']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php }?>"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['list_form_name']->value;?>
"><?php }?><table class="<?php if ($_smarty_tpl->tpl_vars['table_class']->value){?><?php echo $_smarty_tpl->tpl_vars['table_class']->value;?>
<?php }else{ ?>list<?php }?>"><thead><tr><?php if (is_array($_smarty_tpl->tpl_vars['btns']->value)){?><th><input type="checkbox" id="swall" onclick="setchkbox('swall','b')" title="???????????????? ??????"></th><?php }?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['v']->key;
?><th><?php if ($_smarty_tpl->tpl_vars['pl_params']->value['Orders'][$_smarty_tpl->tpl_vars['f']->value]){?><?php if (textLeft($_smarty_tpl->tpl_vars['pl_params']->value['Order'],-1)==$_smarty_tpl->tpl_vars['f']->value){?><?php $_smarty_tpl->tpl_vars['z'] = new Smarty_variable(1+textRight($_smarty_tpl->tpl_vars['pl_params']->value['Order'],1), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['z'] = new Smarty_variable('', null, 0);?><?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['_selfLink']->value;?>
?sort=<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
<?php echo $_smarty_tpl->tpl_vars['z']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
</a><?php echo $_smarty_tpl->tpl_vars['zn']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
<?php }?></th><?php } ?></tr></thead><?php if ($_smarty_tpl->tpl_vars['row_class']->value){?><?php $_smarty_tpl->tpl_vars['row_class'] = new Smarty_variable(($_smarty_tpl->tpl_vars['row_class']->value)." ", null, 0);?><?php }?><?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['l']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['list']['iteration']++;
?><tr class="<?php echo $_smarty_tpl->tpl_vars['row_class']->value;?>
<?php if ($_smarty_tpl->tpl_vars['id']->value==$_GET['id']){?>marked<?php }elseif(($_smarty_tpl->getVariable('smarty')->value['foreach']['list']['iteration']%2)){?>odd<?php }else{ ?>even<?php }?>"<?php if ($_smarty_tpl->tpl_vars['l']->value['_Marked']){?> style="font-weight: bold;"<?php }?>><?php if (is_array($_smarty_tpl->tpl_vars['btns']->value)){?><td><input name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="b<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['list']['iteration'];?>
" type="checkbox"></td><?php }?><?php if ($_smarty_tpl->tpl_vars['row']->value=='*'){?><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['tpl_filename']->value).".row.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }elseif($_smarty_tpl->tpl_vars['row']->value){?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['row']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['v']->key;
?><td><?php echo $_smarty_tpl->tpl_vars['l']->value[$_smarty_tpl->tpl_vars['f']->value];?>
</td><?php } ?><?php }?></tr><?php } ?></table><?php echo $_smarty_tpl->getSubTemplate ('pl.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('linkparams'=>$_smarty_tpl->tpl_vars['linkparams']->value), 0);?>
<?php if (is_array($_smarty_tpl->tpl_vars['btns']->value)){?><?php echo tplFormSecurity(array('form'=>$_smarty_tpl->tpl_vars['list_form_name']->value),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['btn_wrapp']->value){?><div class="<?php echo $_smarty_tpl->tpl_vars['btn_wrapp']->value;?>
"><?php }?>????????????????????: <?php echo $_smarty_tpl->tpl_vars['include_code']->value;?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['btns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['v']->key;
?>&nbsp;<input name="<?php echo $_smarty_tpl->tpl_vars['list_form_name']->value;?>
_btn<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" onClick="return confirm('?????????????????????? ???????????????? \'<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
\'');" type="submit" class="<?php if ($_smarty_tpl->tpl_vars['btn_class']->value){?><?php echo $_smarty_tpl->tpl_vars['btn_class']->value;?>
<?php }?>"><?php } ?><?php if ($_smarty_tpl->tpl_vars['btn_wrapp']->value){?></div><?php }?></form><?php }?><?php }else{ ?>- ?????? ?????????????? -<br><?php }?><br><?php }} ?>