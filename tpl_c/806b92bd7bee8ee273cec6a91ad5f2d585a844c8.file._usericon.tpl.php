<?php /* Smarty version Smarty-3.1.8, created on 2017-10-25 23:09:06
         compiled from "tpl/en/_usericon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1840713783595c64a34730a6-90940068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '806b92bd7bee8ee273cec6a91ad5f2d585a844c8' => 
    array (
      0 => 'tpl/en/_usericon.tpl',
      1 => 1508709645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1840713783595c64a34730a6-90940068',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595c64a347a685_58354690',
  'variables' => 
  array (
    '_cfg' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595c64a347a685_58354690')) {function content_595c64a347a685_58354690($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_UseAvatar']){?><img src="https://www.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['user']->value['uMail']);?>
?s=50"><?php }?><?php }} ?>