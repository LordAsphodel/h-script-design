<?php /* Smarty version Smarty-3.1.8, created on 2017-07-01 11:01:58
         compiled from "tpl/ru/depo/calc.result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1394782332595756f623e106-55710482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '702b80813b179f8a5e4d36a540ea9ca130c18943' => 
    array (
      0 => 'tpl/ru/depo/calc.result.tpl',
      1 => 1498731098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1394782332595756f623e106-55710482',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'calc_plans' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_595756f6248fe3_80276901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595756f6248fe3_80276901')) {function content_595756f6248fe3_80276901($_smarty_tpl) {?><table class="FormatTable" border="1"><tr><th colspan="2">Инвестиционный план '<span id="plan">?</span>'</th></tr><tr><td>Бонус</td><td align="right" width="60px"><span id="bonus">?</span>%</td></tr><tr><td>Начисление</td><td align="right"><span id="profit">?</span>%</td></tr><tr><td>Кол-во начислений</td><td align="right"><span id="period">?</span></td></tr><tr><td>Длительность, дней</td><td align="right"><span id="days">?</span></td></tr><tr><td>Реинвестирование</td><td align="right"><span id="cmpd">?</span>%</td></tr><tr><td>Общая сумма начисленных процентов</td><td align="right"><span id="prib">?</span></td></tr><tr><td>Возврат депозита</td><td align="right"><span id="return">?</span>%</td></tr><tr><td>Всего после окончания депозита</td><td align="right"><b><span id="prib2">?</span></b></td></tr></table><script>function round2(z){z = (1*z).toFixed(2);return 1*z;}function recalc(){var sum=round2(document.forms['calc']['sum'].value.replace(',', '.'));if (sum<=0) sum=0;var prib=0;var cmpd=document.forms['calc']['cmpd'];if (cmpd==undefined){cmpd=0;}else{cmpd=cmpd.value;}document.getElementById('cmpd').innerHTML=cmpd;var days=document.forms['calc']['days'];if (days==undefined){days=0;}else{days=days.value;}var plans=[<?php echo $_smarty_tpl->tpl_vars['calc_plans']->value;?>
];var pn='?';var pd='?';var ip='?';var db='?';var dr='?';var dd='?';var p=document.forms['calc']['plan'];if (p==undefined){for (var p in plans)if ((sum>=plans[p][1]) & (sum<plans[p][2])){pn=plans[p][0];pd=plans[p][3];ip=plans[p][4];db=plans[p][5];dr=plans[p][6];dd=plans[p][7];break;}}else{p=p.value;pn=plans[p][0];pd=plans[p][3];ip=plans[p][4];db=plans[p][5];dr=plans[p][6];dd=plans[p][7];}if (pn!='?'){if (ip == 0){ip = days;dd = days;}sum=round2(sum+db*sum/100);zcomp=0;for (i=0; i<ip; i++){profit=round2(pd*sum/100);csum=round2(cmpd*profit/100);zcomp=zcomp+csum;prib=prib+profit-csum;sum=sum+csum;}sum=round2(dr*(sum-zcomp)/100);}document.getElementById('plan').innerHTML=pn;document.getElementById('bonus').innerHTML=db;document.getElementById('profit').innerHTML=pd;document.getElementById('period').innerHTML=ip;document.getElementById('days').innerHTML=dd;document.getElementById('prib').innerHTML=round2(prib+zcomp);document.getElementById('return').innerHTML=dr;document.getElementById('prib2').innerHTML=round2(sum+prib+zcomp);}recalc();</script><?php }} ?>