<?php /* Smarty version Smarty-3.1.8, created on 2017-07-01 11:02:25
         compiled from "tpl/ru/review/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11845291859575711c9d163-14563380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b010b2d2779d9274244771fde7d2733477428b34' => 
    array (
      0 => 'tpl/ru/review/index.tpl',
      1 => 1498731118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11845291859575711c9d163-14563380',
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
  'unifunc' => 'content_59575711cd9233_30039702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59575711cd9233_30039702')) {function content_59575711cd9233_30039702($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Отзывы'), 0);?>
<h1>Отзывы</h1><h3>Всего отзывов - <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</h3><?php if (isset($_GET['awating'])){?><h2>Ваш отзыв успешно добавлен!</h2><p class="info">Администратор проверит его в ближайшее время</p><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['list']->value){?><table class="formatTable" width="600px"><?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
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
<br><?php }else{ ?>- Нет записей -<?php }?><?php if (_uid()){?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Оставьте свой отзыв','fields'=>array('Text'=>array('W',valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Review_Mode'],'Текст <<проверяется>>','Текст'),array('text_empty'=>'укажите текст'),'size'=>5)),'btn_text'=>'Добавить'), 0);?>
<?php }?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>