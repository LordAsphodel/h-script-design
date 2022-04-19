<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 00:11:08
         compiled from "tpl/ru/message/support.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15249070625957572c409620-17205356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ec14cb947a96426e070d048520be944726416d9' => 
    array (
      0 => 'tpl/ru/message/support.tpl',
      1 => 1508709667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15249070625957572c409620-17205356',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5957572c423f66_50115111',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957572c423f66_50115111')) {function content_5957572c423f66_50115111($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('headerpage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Поддержка'), 0);?>
<section class="page"><div class="container"><div class="row"><div class="col-xs-12"><a href="/news" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i> Новости</a><a href="/rules" class="page__btn page__btn_r hidden-xs">Правила <i class="fa fa-arrow-circle-o-right"></i></a><a href="/news" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a><a href="/rules" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a><h2><b>Запрос</b> в поддержку</h2></div><div class="col-md-6 col-md-offset-3"><?php if (isset($_GET['done'])){?><h2>Ваш запрос в поддержку успешно отправлен!</h2><p class="info">Служба поддержки ответит Вам в соответствии с <a href="/rules">правилами</a> проекта.</p><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('message/support.box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></div></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>