<?php /* Smarty version Smarty-3.1.8, created on 2017-07-05 07:01:38
         compiled from "tpl/en/review/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:988485087595c64a29b3934-97389277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6f01cb756aed6013786d93ac19c3d9af4e5ef16' => 
    array (
      0 => 'tpl/en/review/index.tpl',
      1 => 1498731070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '988485087595c64a29b3934-97389277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'list' => 0,
    'l' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595c64a29f18c5_69043348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595c64a29f18c5_69043348')) {function content_595c64a29f18c5_69043348($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Reviews'), 0);?>
<h1>Reviews</h1><h3>Total reviews - <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</h3><?php if (isset($_GET['awating'])){?><h2>Your review has successfully added!</h2><p class="info">The administrator will check it in the near future</p><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['list']->value){?><table class="formatTable" width="600px"><?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['l']->key;
?><tr><td><?php echo $_smarty_tpl->getSubTemplate ('_usericon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('user'=>$_smarty_tpl->tpl_vars['l']->value), 0);?>
<h2><?php echo $_smarty_tpl->tpl_vars['l']->value['uLogin'];?>
</h2><small><?php echo $_smarty_tpl->tpl_vars['l']->value['oTS'];?>
</small><div style="padding: 10px; background-color: #F3F3F3;"><?php echo nl2br($_smarty_tpl->tpl_vars['l']->value['oText']);?>
</div></td></tr><?php } ?></table><?php echo $_smarty_tpl->getSubTemplate ('pl.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><?php }else{ ?>- No records -<?php }?><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Leave your own review','fields'=>array('Text'=>array('W',valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Review_Mode'],'Text <<moderated>>','Text'),array('text_empty'=>'input text'),'size'=>5)),'btn_text'=>'Add'), 0);?>
<?php }?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>