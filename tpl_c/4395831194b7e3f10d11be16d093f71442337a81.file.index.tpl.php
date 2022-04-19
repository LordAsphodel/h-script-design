<?php /* Smarty version Smarty-3.1.8, created on 2017-07-27 19:25:01
         compiled from "tpl/en/account/change_pass/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82057724597a13dd7aa492-31126190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4395831194b7e3f10d11be16d093f71442337a81' => 
    array (
      0 => 'tpl/en/account/change_pass/index.tpl',
      1 => 1498731134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82057724597a13dd7aa492-31126190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_597a13dd7dee71_57613183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597a13dd7dee71_57613183')) {function content_597a13dd7dee71_57613183($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Смена пароля'), 0);?>
<h1>Смена пароля</h1><?php if ($_smarty_tpl->tpl_vars['user']->value['uPTS']==1){?><p class="info">You have been given a temporary password.<br>Change it to a more complex</p><?php }elseif(isset($_GET['need_change'])){?><p class="info">You have not changed your password.<br>The security policy of our website requires a change it</p><?php }?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','fields'=>array('Pass0'=>array('*','Old password!!',array('pass0_wrong'=>'wrong password')),'Pass'=>array('*','New password!!',array('pass_empty'=>'input password','pass_short'=>"password is too short [less than ".($_smarty_tpl->tpl_vars['MinPass']->value)."]",'pass_wrong'=>'password does not match the format')),'Pass2'=>array('*','Повторите новый пароль!!',array('pass_not_equal'=>'passwords do not match')),'PIN'=>array('*','Enter the PIN-code! <<to confirm the change>>',array('pin_wrong'=>'wrong code'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinPIN']==0),'size'=>8)),'btn_text'=>'Change','btns'=>valueIf(isset($_GET['need_change']),array('skip'=>'Do not change'))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>