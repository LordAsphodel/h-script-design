<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 23:23:13
         compiled from "tpl/en/message/support.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1456165358595c64a1644177-55620702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2529b1f18255bc30e03c8b2ea6ff3d26da375177' => 
    array (
      0 => 'tpl/en/message/support.tpl',
      1 => 1508709657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1456165358595c64a1644177-55620702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595c64a169dd81_82565875',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595c64a169dd81_82565875')) {function content_595c64a169dd81_82565875($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headerpage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Contact us'), 0);?>
<section class="page"><div class="container"><div class="row"><div class="col-xs-12"><a href="/news" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i> Announcements</a><a href="/rules" class="page__btn page__btn_r hidden-xs">Regulations <i class="fa fa-arrow-circle-o-right"></i></a><a href="/news" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a><a href="/rules" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a><h2><b>Support</b> request</h2></div><div class="col-md-6 col-md-offset-3"><?php if (isset($_GET['done'])){?><h2>Your support request has been successfully sent!</h2><p class="info">Support will reply acoording to the <a href="/rules">regulations</a> of the project.</p><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('message/support.box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></div></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>