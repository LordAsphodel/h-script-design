<?php /* Smarty version Smarty-3.1.8, created on 2017-07-05 07:01:39
         compiled from "tpl/en/faq/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129160762595c64a3c990f3-70291661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a3b7bdd17711d7f0a0d4a9f6b8003fa7f262ec3' => 
    array (
      0 => 'tpl/en/faq/index.tpl',
      1 => 1498731056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129160762595c64a3c990f3-70291661',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595c64a3cb9ae3_23654877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595c64a3cb9ae3_23654877')) {function content_595c64a3cb9ae3_23654877($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'FAQ'), 0);?>
<h1>FAQ</h1><?php if ($_smarty_tpl->tpl_vars['list']->value){?><table class="formatTable" width="600px"><?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['l']->key;
?><tr><td><div class="question" style="cursor: pointer;"><h2><?php echo $_smarty_tpl->tpl_vars['l']->value['fQuestion'];?>
</h2></div><div style="padding: 10px; background-color: #F3F3F3; display: none;"><small><?php echo $_smarty_tpl->tpl_vars['l']->value['fCat'];?>
</small><br><?php echo $_smarty_tpl->tpl_vars['l']->value['fAnswer'];?>
</div></td></tr><?php } ?></table><?php echo $_smarty_tpl->getSubTemplate ('pl.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><?php }?><script type="text/javascript">$('.question').next().hide();$('.question').click(function(){$(this).next().slideToggle();});</script><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>