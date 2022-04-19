<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 23:23:24
         compiled from "tpl/en/news/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1497956302595c64a7d5ae73-84195169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b02e75e3af6993985764d6b20712f211fe4101f0' => 
    array (
      0 => 'tpl/en/news/show.tpl',
      1 => 1508709658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1497956302595c64a7d5ae73-84195169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595c64a7d74992_28956750',
  'variables' => 
  array (
    'el' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595c64a7d74992_28956750')) {function content_595c64a7d74992_28956750($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headerpage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Annoncement'), 0);?>
<section class="page"><div class="container"><div class="row"><div class="col-xs-12"><a href="/about" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i> About us</a><a href="/support" class="page__btn page__btn_r hidden-xs">Contact us <i class="fa fa-arrow-circle-o-right"></i></a><a href="/about" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a><a href="/support" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a><h2><b>Annoncement</h2></div><div class="col-xs-12"><div class="news"><h3><?php echo $_smarty_tpl->tpl_vars['el']->value['nTopic'];?>
</h3><small><?php echo $_smarty_tpl->tpl_vars['el']->value['nTS'];?>
</small><p><b><?php echo $_smarty_tpl->tpl_vars['el']->value['nText'];?>
</b></p></div></div></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>