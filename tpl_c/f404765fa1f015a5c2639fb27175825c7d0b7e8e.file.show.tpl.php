<?php /* Smarty version Smarty-3.1.8, created on 2017-11-15 23:05:40
         compiled from "tpl/ru/news/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2389594095959e6b10184e5-09823294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f404765fa1f015a5c2639fb27175825c7d0b7e8e' => 
    array (
      0 => 'tpl/ru/news/show.tpl',
      1 => 1508709668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2389594095959e6b10184e5-09823294',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5959e6b1030e45_27990667',
  'variables' => 
  array (
    'el' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959e6b1030e45_27990667')) {function content_5959e6b1030e45_27990667($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headerpage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Новость'), 0);?>
<section class="page"><div class="container"><div class="row"><div class="col-xs-12"><a href="/about" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i> О нас</a><a href="/support" class="page__btn page__btn_r hidden-xs">Контакты <i class="fa fa-arrow-circle-o-right"></i></a><a href="/about" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a><a href="/support" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a><h2><b>Новость</h2></div><div class="col-xs-12"><div class="news"><h3><?php echo $_smarty_tpl->tpl_vars['el']->value['nTopic'];?>
</h3><small><?php echo $_smarty_tpl->tpl_vars['el']->value['nTS'];?>
</small><p><b><?php echo $_smarty_tpl->tpl_vars['el']->value['nText'];?>
</b></p></div></div></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>