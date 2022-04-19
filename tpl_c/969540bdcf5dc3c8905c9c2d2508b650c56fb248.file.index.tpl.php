<?php /* Smarty version Smarty-3.1.8, created on 2022-04-20 00:19:57
         compiled from "tpl/ru\widget\clock\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2262625f277de02e04-54696044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '969540bdcf5dc3c8905c9c2d2508b650c56fb248' => 
    array (
      0 => 'tpl/ru\\widget\\clock\\index.tpl',
      1 => 1505759650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2262625f277de02e04-54696044',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_auth' => 0,
    'clock_H' => 0,
    'clock_M' => 0,
    'clock_S' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_625f277de348a9_20872596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_625f277de348a9_20872596')) {function content_625f277de348a9_20872596($_smarty_tpl) {?><?php if (_uid()&&($_smarty_tpl->tpl_vars['_auth']->value<90)){?><a href="<?php echo tplModuleToLink(array('module'=>'account'),$_smarty_tpl);?>
" onClick="return upd_tz();" title="Синхронизировать"><span id="clock"></span></a><?php }else{ ?><span id="clock"></span> <small>GMT</small><?php }?><script type="text/javascript">function upd_tz(){var d=new Date();document.cookie='tz='+escape(d.getTimezoneOffset())+"; path=/";return true;}<?php if (!_uid()&&!isset($_COOKIE['active'])){?>upd_tz();<?php }?>obj_clock=document.getElementById("clock");time_h=<?php echo $_smarty_tpl->tpl_vars['clock_H']->value;?>
;time_m=<?php echo $_smarty_tpl->tpl_vars['clock_M']->value;?>
;time_s=<?php echo $_smarty_tpl->tpl_vars['clock_S']->value;?>
;function dig2(d){return ((d<10)?"0":"")+d;}function wr_clock(){obj_clock.innerHTML=dig2(time_h)+':'+dig2(time_m)+':'+dig2(time_s);time_s++;if (time_s>=60){time_s=0;time_m++;if (time_m>=60){time_m=0;time_h++;if (time_h>=24){time_h=0;}}}}wr_clock();setInterval("wr_clock();",1000);</script><?php }} ?>