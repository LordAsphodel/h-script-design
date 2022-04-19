<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 18:46:47
         compiled from "tpl/ru/depo/admin/depo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8834432405960b2e2351a68-31828411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f988f676e3ce7840d973cdfe89d33e789e9165' => 
    array (
      0 => 'tpl/ru/depo/admin/depo.tpl',
      1 => 1508709689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8834432405960b2e2351a68-31828411',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5960b2e239e768_90761186',
  'variables' => 
  array (
    'el' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5960b2e239e768_90761186')) {function content_5960b2e239e768_90761186($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Депозит'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['el']->value){?><?php echo $_smarty_tpl->getSubTemplate ('depo/_depo.admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('from_admin'=>true), 0);?>
<?php }else{ ?><?php if ($_GET['user']){?><?php echo $_smarty_tpl->getSubTemplate ('depo/_depo.new.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('from_admin'=>true), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'new','title'=>'Новый депозит','fields'=>array('Login'=>array('T','Пользователь!!',array('user_empty'=>'пользователь не найден'),'default'=>$_GET['user'])),'btn_text'=>'Далее'), 0);?>
<?php }?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>