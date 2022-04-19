<?php /* Smarty version Smarty-3.1.8, created on 2017-09-29 08:21:46
         compiled from "tpl/ru/system/admin/setup_ui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111382292659573fc2c3d047-38826705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42dde83e62d31cec176219094a6b519a22f3a0b0' => 
    array (
      0 => 'tpl/ru/system/admin/setup_ui.tpl',
      1 => 1504512327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111382292659573fc2c3d047-38826705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59573fc2c6d556_86478894',
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59573fc2c6d556_86478894')) {function content_59573fc2c6d556_86478894($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Интерфейс'), 0);?>
<?php ob_start();?><?php echo tplModuleToLink(array('module'=>'udp/intro'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>array('_Langs'=>array('A','Языки интерфейса (имена подпапок в "/tpl/")<br><<одна строка - одно имя>>','size'=>4),'ShowIntro'=>array('S',"Показывать <a href=\"".$_tmp1."\" target=\"_blank\">страницу-приветствие</a> <<Intro>>",0,array(0=>'никогда',1=>'только при первом заходе',2=>'всегда')),'TopPanel'=>array('C','Показывать верхнюю панель'),'LeftPanel'=>array('C','Показывать левую панель'),'RightPanel'=>array('C','Показывать правую панель'),'BottomPanel'=>array('C','Показывать нижнюю панель'),'DefaultTZ'=>array('I','Часовой пояс по умолчанию <<в часах от GMT>>','comment'=>'+4 = Москва','size'=>4),'NumDec'=>array('S','Кол-во знаков после запятой',0,array(0=>'нет (целые цисла)',1=>'1 (.0)',2=>'2 (.00)',3=>'3 (.000)')))), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>