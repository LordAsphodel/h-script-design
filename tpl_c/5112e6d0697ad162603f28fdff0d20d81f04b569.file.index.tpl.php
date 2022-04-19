<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:07:02
         compiled from "tpl/ru/news/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:261933050595757220f71b2-76813636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5112e6d0697ad162603f28fdff0d20d81f04b569' => 
    array (
      0 => 'tpl/ru/news/index.tpl',
      1 => 1508709668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261933050595757220f71b2-76813636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5957572211f990_95683195',
  'variables' => 
  array (
    'list' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957572211f990_95683195')) {function content_5957572211f990_95683195($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headerpage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Новости'), 0);?>
<section class="page"><div class="container"><div class="row"><div class="col-xs-12"><a href="/about" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i> О нас</a><a href="/support" class="page__btn page__btn_r hidden-xs">Контакты <i class="fa fa-arrow-circle-o-right"></i></a><a href="/about" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a><a href="/support" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a><h2><b>Новости</b> проекта</h2></div><?php if ($_smarty_tpl->tpl_vars['list']->value){?><div class="col-xs-12"><?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['l']->key;
?><div class="news"><h3><a href="<?php echo tplModuleToLink(array('module'=>'news/show','chpu'=>array($_smarty_tpl->tpl_vars['l']->value['nID'],$_smarty_tpl->tpl_vars['l']->value['nTopic'])),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['nTopic'];?>
</a></h3><small><?php echo $_smarty_tpl->tpl_vars['l']->value['nTS'];?>
</small><p><b><?php echo nl2br($_smarty_tpl->tpl_vars['l']->value['nAnnounce']);?>
</b></p></div><?php } ?><?php echo $_smarty_tpl->getSubTemplate ('pl.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }?></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>