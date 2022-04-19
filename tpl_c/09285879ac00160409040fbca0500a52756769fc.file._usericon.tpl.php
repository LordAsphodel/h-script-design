<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 23:40:43
         compiled from "tpl/ru/_usericon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21380187325957421ab405f1-71458894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09285879ac00160409040fbca0500a52756769fc' => 
    array (
      0 => 'tpl/ru/_usericon.tpl',
      1 => 1508709650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21380187325957421ab405f1-71458894',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5957421ab46238_68018630',
  'variables' => 
  array (
    '_cfg' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957421ab46238_68018630')) {function content_5957421ab46238_68018630($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_UseAvatar']){?><img src="https://www.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['user']->value['uMail']);?>
?s=50"><?php }?><?php }} ?>