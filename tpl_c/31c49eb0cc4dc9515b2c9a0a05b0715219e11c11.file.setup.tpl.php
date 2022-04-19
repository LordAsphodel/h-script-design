<?php /* Smarty version Smarty-3.1.8, created on 2017-09-29 08:22:01
         compiled from "tpl/ru/cron/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14232704175958a5e69d01d0-37808161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31c49eb0cc4dc9515b2c9a0a05b0715219e11c11' => 
    array (
      0 => 'tpl/ru/cron/admin/setup.tpl',
      1 => 1504512327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14232704175958a5e69d01d0-37808161',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958a5e6a385b0_02329645',
  'variables' => 
  array (
    '_cfg' => 0,
    'cronpath' => 0,
    'cfg' => 0,
    'cronlist' => 0,
    'm' => 0,
    's' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958a5e6a385b0_02329645')) {function content_5958a5e6a385b0_02329645($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Настройки'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Cron_Enabled']){?><p class="info">Планировщик вызывается <b>при открытии каждой страницы</b>,<br>но срабатывает не чаще чем <b>1 раз в минуту</b></p><p class="info">Для того чтобы планировщик вызывался <b>автономно</b>,<br>необходимо прописать его вызов из <b>планировщика хостинга</b>:<br><br><i>wget -q -O /dev/null "<?php echo fullURL(moduleToLink('cron'));?>
" > /dev/null</i><br><i>curl "<?php echo fullURL(moduleToLink('cron'));?>
"</i><br><br>или (в зависимости от настроек сервера) возможны варианты:<br><br><i>/usr/bin/fetch -q -O /dev/null "<?php echo fullURL(moduleToLink('cron'));?>
" > /dev/null</i><br><i>/usr/bin/php -q <?php echo $_smarty_tpl->tpl_vars['cronpath']->value;?>
 /dev/null</i><br><i>/usr/local/bin/php -q $HOME/cron.php /dev/null</i></p><a href="<?php echo fullURL(moduleToLink('cron'));?>
" target="_blank" class="button-green">Вызвать вручную</a><br><br><?php }?><?php $_smarty_tpl->tpl_vars['f'] = new Smarty_variable(array('Enabled'=>array('C','Включен'),'ByHost'=>array('C','Вызывается автономно')), null, 0);?><?php if ($_smarty_tpl->tpl_vars['cfg']->value['Enabled']&&$_smarty_tpl->tpl_vars['cronlist']->value){?><?php $_smarty_tpl->createLocalArrayVariable('f', null, 0);
$_smarty_tpl->tpl_vars['f']->value[] = 'Последние вызовы';?><?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cronlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['m']->value = $_smarty_tpl->tpl_vars['s']->key;
?><?php $_smarty_tpl->createLocalArrayVariable('f', null, 0);
$_smarty_tpl->tpl_vars['f']->value[$_smarty_tpl->tpl_vars['m']->value] = array('X',"Модуль ".($_smarty_tpl->tpl_vars['m']->value),'comment'=>valueIf($_smarty_tpl->tpl_vars['s']->value<1440,($_smarty_tpl->tpl_vars['s']->value)." мин. назад"));?><?php } ?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>$_smarty_tpl->tpl_vars['f']->value), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>