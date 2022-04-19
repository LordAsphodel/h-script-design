<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 11:45:17
         compiled from "tpl/en/balance/_oper.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61513221159ad129dbce6a1-25234089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b826090a0c0e810c7c63eb0b085c65d16c8c38e7' => 
    array (
      0 => 'tpl/en/balance/_oper.js.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61513221159ad129dbce6a1-25234089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oper' => 0,
    'use_sum2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad129dbe0920_67372557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad129dbe0920_67372557')) {function content_59ad129dbe0920_67372557($_smarty_tpl) {?><?php if (in_array($_smarty_tpl->tpl_vars['oper']->value,array('CASHIN','CASHOUT','EX','TR','SELL'))){?><script type="text/javascript">function showComis(){$('#csum').html('');<?php if ($_smarty_tpl->tpl_vars['use_sum2']->value){?>$('#sum2').html('');<?php }?>$.ajax({type: 'POST',url: 'ajax',data: 'module=balance&do=getsum'+'&oper='+$('#add_Oper').val()+'&cid='+$('#add_PSys').val()+'&sum='+$('#add_Sum').val()<?php if ($_smarty_tpl->tpl_vars['oper']->value=='EX'){?>+'&cid2='+$('#add_PSys2').val()<?php }?>,success:function(ex){ex=eval(ex);$('#ccurr').html(ex[0]);$('#csum').html(ex[1]);<?php if ($_smarty_tpl->tpl_vars['use_sum2']->value){?>$('#sum2').html(ex[2]);<?php }?>}});}tid=0;tf=function(){clearTimeout(tid);tid=setTimeout(function(){ showComis(); }, 200);};$('#add_PSys').change(tf);$('#add_Sum').keypress(tf);<?php if ($_smarty_tpl->tpl_vars['oper']->value=='EX'){?>$('#add_PSys2').change(tf);<?php }?>showComis();</script><?php }?><?php }} ?>