<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:58:24
         compiled from "tpl/ru/edit.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29653701159566cf3802a60-44145956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36dbeb1afe3c6ecfdab85e82e5bdc11384842d3d' => 
    array (
      0 => 'tpl/ru/edit.row.tpl',
      1 => 1508709646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29653701159566cf3802a60-44145956',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59566cf3a15975_68566437',
  'variables' => 
  array (
    'v' => 0,
    'f' => 0,
    'vv' => 0,
    'edit_form_name' => 0,
    'edit_descr_star' => 0,
    'edit_descr_rem' => 0,
    'error_class' => 0,
    'error_text' => 0,
    'n' => 0,
    'cv' => 0,
    'class' => 0,
    'l' => 0,
    'hint' => 0,
    'l_width' => 0,
    'r_width' => 0,
    'iv' => 0,
    'i' => 0,
    'hf' => 0,
    'InputDateFormatLong' => 0,
    'InputDateFormat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59566cf3a15975_68566437')) {function content_59566cf3a15975_68566437($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['v']->value[0]=='U'){?>				<td colspan="2" align="center"><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['v']->value[1], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td><?php }else{ ?>							<?php if (isset_IN($_smarty_tpl->tpl_vars['f']->value)){?><?php $_smarty_tpl->tpl_vars['cv'] = new Smarty_variable(_IN($_smarty_tpl->tpl_vars['f']->value), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['cv'] = new Smarty_variable(firstNotEmpty(array($_smarty_tpl->tpl_vars['vv']->value,$_smarty_tpl->tpl_vars['v']->value['default'])), null, 0);?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('err.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>$_smarty_tpl->tpl_vars['edit_form_name']->value,'errs'=>$_smarty_tpl->tpl_vars['v']->value[2]), 0);?>
<?php if (($_smarty_tpl->tpl_vars['v']->value[0]=='*')&&$_smarty_tpl->tpl_vars['vv']->value&&(strpos($_smarty_tpl->tpl_vars['v']->value[1],'!!')!==false)){?><?php $_smarty_tpl->createLocalArrayVariable('v', null, 0);
$_smarty_tpl->tpl_vars['v']->value[1] = ($_smarty_tpl->tpl_vars['v']->value[1])." <<заполните чтобы сменить>>";?><?php }?><?php $_smarty_tpl->tpl_vars['l'] = new Smarty_variable(str_replace('!!',$_smarty_tpl->tpl_vars['edit_descr_star']->value,str_replace('<<',$_smarty_tpl->tpl_vars['edit_descr_rem']->value,str_replace('>>',')</span>',$_smarty_tpl->tpl_vars['v']->value[1]))), null, 0);?><?php if (strpos($_smarty_tpl->tpl_vars['v']->value[1],'!!')!==false){?><?php $_smarty_tpl->tpl_vars['l'] = new Smarty_variable("<span class=\"descr_req\">".($_smarty_tpl->tpl_vars['l']->value)."</span>", null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['v']->value['text_class']){?><?php $_smarty_tpl->tpl_vars['l'] = new Smarty_variable("<span class=\"".($_smarty_tpl->tpl_vars['v']->value['text_class'])."\">".($_smarty_tpl->tpl_vars['l']->value)."</span>", null, 0);?><?php }?><?php if (!$_smarty_tpl->tpl_vars['v']->value['readonly']&&($_smarty_tpl->tpl_vars['v']->value[0]!='X')){?><?php $_smarty_tpl->tpl_vars['l'] = new Smarty_variable("<label for=\"".($_smarty_tpl->tpl_vars['edit_form_name']->value)."_".($_smarty_tpl->tpl_vars['f']->value)."\">".($_smarty_tpl->tpl_vars['l']->value)."</label>", null, 0);?><?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['v']->value['multiple'],'[]'), null, 0);?><?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(" name=\"".($_smarty_tpl->tpl_vars['f']->value).($_smarty_tpl->tpl_vars['n']->value)."\" id=\"".($_smarty_tpl->tpl_vars['edit_form_name']->value)."_".($_smarty_tpl->tpl_vars['f']->value)."\" ", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(" id=\"".($_smarty_tpl->tpl_vars['edit_form_name']->value)."_".($_smarty_tpl->tpl_vars['f']->value)."\" disabled=\"disabled\" ", null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['hint'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['v']->value['hint'],"placeholder=\"".($_smarty_tpl->tpl_vars['v']->value['hint'])."\" "), null, 0);?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['v']->value['class']," ".($_smarty_tpl->tpl_vars['v']->value['class'])), null, 0);?><?php $_smarty_tpl->tpl_vars['error_class'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['error_class']->value," ".($_smarty_tpl->tpl_vars['error_class']->value)), null, 0);?><?php $_smarty_tpl->tpl_vars['hf'] = new Smarty_variable("<input name=\"".($_smarty_tpl->tpl_vars['f']->value)."\" value=\"".($_smarty_tpl->tpl_vars['cv']->value)."\" type=\"hidden\">", null, 0);?><?php if ($_smarty_tpl->tpl_vars['v']->value[0]=='CC'||$_smarty_tpl->tpl_vars['v']->value[0]=='RR'||$_smarty_tpl->tpl_vars['v']->value[0]=='Y'||$_smarty_tpl->tpl_vars['v']->value[0]=='W'||$_smarty_tpl->tpl_vars['v']->value[0]=='XX'||$_smarty_tpl->tpl_vars['v']->value[0]=='L'){?><td colspan="2" align="center"><?php if ($_smarty_tpl->tpl_vars['v']->value[0]=='CC'){?><?php echo $_smarty_tpl->tpl_vars['error_text']->value;?>
<input<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
value="1"<?php if ($_smarty_tpl->tpl_vars['cv']->value){?> checked="checked"<?php }?> type="checkbox" class="checkbox<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['l']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['v']->value[0]=='RR'){?><?php echo $_smarty_tpl->tpl_vars['error_text']->value;?>
<input<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
value="<?php echo $_smarty_tpl->tpl_vars['v']->value[3];?>
"<?php if ($_smarty_tpl->tpl_vars['cv']->value==$_smarty_tpl->tpl_vars['v']->value[3]){?> checked="checked"<?php }?> type="radio" class="radio<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['l']->value;?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['v']->value[1]){?><?php echo $_smarty_tpl->tpl_vars['l']->value;?>
<br><?php }?><?php echo $_smarty_tpl->tpl_vars['error_text']->value;?>
<?php if ($_smarty_tpl->tpl_vars['v']->value[0]=='Y'){?><textarea<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
cols="80" rows="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['v']->value['size'])===null||$tmp==='' ? 10 : $tmp);?>
" wrap="off" class="wysiwyg<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cv']->value;?>
</textarea><script type="text/javascript">CKEDITOR.replace('<?php echo $_smarty_tpl->tpl_vars['edit_form_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
');</script><?php }elseif($_smarty_tpl->tpl_vars['v']->value[0]=='W'){?><textarea<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
cols="60"<?php if ($_smarty_tpl->tpl_vars['v']->value['size']>0){?> rows="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
"<?php }?> wrap="off" class="text<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cv']->value;?>
</textarea><?php }elseif($_smarty_tpl->tpl_vars['v']->value[0]=='XX'){?><span class="value<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php if (is_array($_smarty_tpl->tpl_vars['v']->value[3])){?><?php echo $_smarty_tpl->tpl_vars['v']->value[3][$_smarty_tpl->tpl_vars['cv']->value];?>
<?php }elseif($_smarty_tpl->tpl_vars['v']->value[3]){?><?php echo $_smarty_tpl->tpl_vars['v']->value[3];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['cv']->value;?>
<?php }?></span><?php }else{ ?><input<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
value="<?php echo $_smarty_tpl->tpl_vars['cv']->value;?>
" size="<?php if ($_smarty_tpl->tpl_vars['v']->value['size']>0){?><?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
<?php }else{ ?>60<?php }?>" type="text" class="string<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
"><?php }?><?php }?><br><?php }else{ ?><td align="right" width="<?php if ($_smarty_tpl->tpl_vars['l_width']->value){?><?php echo $_smarty_tpl->tpl_vars['l_width']->value;?>
<?php }else{ ?>50%<?php }?>"><?php echo $_smarty_tpl->tpl_vars['l']->value;?>
</td><td align="left"<?php if ($_smarty_tpl->tpl_vars['r_width']->value){?> width="<?php echo $_smarty_tpl->tpl_vars['r_width']->value;?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['error_text']->value;?>
<?php if ($_smarty_tpl->tpl_vars['v']->value[0]=='X'){?><span class="value<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php if (is_array($_smarty_tpl->tpl_vars['v']->value[3])){?><?php echo $_smarty_tpl->tpl_vars['v']->value[3][$_smarty_tpl->tpl_vars['cv']->value];?>
<?php }elseif($_smarty_tpl->tpl_vars['v']->value[3]){?><?php echo $_smarty_tpl->tpl_vars['v']->value[3];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['cv']->value;?>
<?php }?></span><?php }elseif($_smarty_tpl->tpl_vars['v']->value[0]=='A'){?><textarea<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
<?php if ($_smarty_tpl->tpl_vars['v']->value['size']>0){?> cols="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
"<?php }?> rows="5" class="text_small"<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
><?php echo $_smarty_tpl->tpl_vars['cv']->value;?>
</textarea><?php }elseif($_smarty_tpl->tpl_vars['v']->value[0]=='E'){?><input<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
value="<?php echo $_smarty_tpl->tpl_vars['cv']->value;?>
" size="<?php if ($_smarty_tpl->tpl_vars['v']->value['size']>0){?><?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
<?php }else{ ?>20<?php }?>"type="file" class="file<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
"><?php }elseif($_smarty_tpl->tpl_vars['v']->value[0]=='C'){?><input<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
value="1"<?php if ($_smarty_tpl->tpl_vars['cv']->value){?> checked="checked"<?php }?> type="checkbox" class="checkbox_small<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
"><?php }elseif($_smarty_tpl->tpl_vars['v']->value[0]=='R'){?><input<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
value="<?php echo $_smarty_tpl->tpl_vars['v']->value[3];?>
"<?php if ($_smarty_tpl->tpl_vars['cv']->value==$_smarty_tpl->tpl_vars['v']->value[3]){?> checked="checked"<?php }?> type="radio" class="radio<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
"><?php }elseif($_smarty_tpl->tpl_vars['v']->value[0]=='S'){?><select<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<?php if ($_smarty_tpl->tpl_vars['v']->value['size']>0){?> size="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['v']->value['multiple']){?> multiple="multiple"<?php }?> class="select<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
"><?php  $_smarty_tpl->tpl_vars['iv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iv']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value[3]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iv']->key => $_smarty_tpl->tpl_vars['iv']->value){
$_smarty_tpl->tpl_vars['iv']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['iv']->key;
?><?php if ($_smarty_tpl->tpl_vars['iv']->value===''){?><optgroup label="&nbsp;<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php }else{ ?><option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"<?php if (($_smarty_tpl->tpl_vars['cv']->value==$_smarty_tpl->tpl_vars['i']->value)||($_smarty_tpl->tpl_vars['v']->value['multiple']&&is_array($_smarty_tpl->tpl_vars['cv']->value)&&in_array($_smarty_tpl->tpl_vars['i']->value,$_smarty_tpl->tpl_vars['cv']->value))){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['iv']->value;?>
</option><?php }?><?php } ?></select><?php }elseif($_smarty_tpl->tpl_vars['v']->value[0]=='I'){?><input<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
value="<?php echo $_smarty_tpl->tpl_vars['cv']->value;?>
" size="<?php if ($_smarty_tpl->tpl_vars['v']->value['size']>0){?><?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
<?php }else{ ?>4<?php }?>"type="text" class="integer<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
"><?php }elseif(in_array($_smarty_tpl->tpl_vars['v']->value[0],array('F','$','%'))){?><input<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
value="<?php echo $_smarty_tpl->tpl_vars['cv']->value;?>
" size="<?php if ($_smarty_tpl->tpl_vars['v']->value['size']>0){?><?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
<?php }else{ ?>10<?php }?>"type="text" class="float<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
"><?php }elseif($_smarty_tpl->tpl_vars['v']->value[0]=='*'){?><input<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
value="<?php echo _IN($_smarty_tpl->tpl_vars['f']->value);?>
" size="<?php if ($_smarty_tpl->tpl_vars['v']->value['size']>0){?><?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
<?php }else{ ?>20<?php }?>"type="password" class="password<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
"><?php }else{ ?><input<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
value="<?php echo $_smarty_tpl->tpl_vars['cv']->value;?>
" size="<?php if ($_smarty_tpl->tpl_vars['v']->value['size']>0){?><?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
<?php }else{ ?>20<?php }?>"type="text" class="string_small<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
"><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['v']->value['readonly']){?><?php echo $_smarty_tpl->tpl_vars['hf']->value;?>
<?php }?><?php if (!$_smarty_tpl->tpl_vars['v']->value['comment']){?><?php if ($_smarty_tpl->tpl_vars['v']->value[0]=='*'){?><?php if ($_smarty_tpl->tpl_vars['vv']->value){?>&nbsp;<small>[задано]</small><?php }?><?php }elseif($_smarty_tpl->tpl_vars['v']->value[0]=='DT'){?><?php $_smarty_tpl->createLocalArrayVariable('v', null, 0);
$_smarty_tpl->tpl_vars['v']->value['comment'] = $_smarty_tpl->tpl_vars['InputDateFormatLong']->value;?><?php }elseif($_smarty_tpl->tpl_vars['v']->value[0]=='D'){?><?php $_smarty_tpl->createLocalArrayVariable('v', null, 0);
$_smarty_tpl->tpl_vars['v']->value['comment'] = $_smarty_tpl->tpl_vars['InputDateFormat']->value;?><?php }?><?php }?><?php if (substr($_smarty_tpl->tpl_vars['v']->value['comment'],0,1)==' '){?><?php echo $_smarty_tpl->tpl_vars['v']->value['comment'];?>
<?php }elseif($_smarty_tpl->tpl_vars['v']->value['comment']){?>&nbsp;<small>[<?php echo $_smarty_tpl->tpl_vars['v']->value['comment'];?>
]</small><?php }?></td><?php }?><?php }} ?>