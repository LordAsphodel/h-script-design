<?php /* Smarty version Smarty-3.1.8, created on 2017-10-22 22:07:51
         compiled from "tpl/ru/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9041479735958c751901bd1-97964032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74f27bfc13a94c518fb00baad095a339ee0c880f' => 
    array (
      0 => 'tpl/ru/sidebar.tpl',
      1 => 1508709649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9041479735958c751901bd1-97964032',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5958c751903632_55583121',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5958c751903632_55583121')) {function content_5958c751903632_55583121($_smarty_tpl) {?><!-- Start sidebar menu -->
<div class="left side-menu">
  <div class="header sidebar rows">
    <span id="js-toggle" class="toggle">
      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
    </span>
  </div>
  <div class="body rows scroll-y animatesd fadeInLeftBig">
    <div class="sidebar-inner slimscroller">
      <div id="sidebar-menu" class="small-menu">
        <ul>
          <li><a class='<?php if ($_SERVER['REQUEST_URI']=="/cabinet"){?>active<?php }?>' href="/cabinet"><i class="fa fa-home"></i> <span>Мой кабинет</span></a></li>
          <li><a class='<?php if ($_SERVER['REQUEST_URI']=="/deposits"){?>active<?php }?>' href="/deposits"><i class="fa fa-money"></i> <span>Мои депозиты</span></a></li>
          <li><a class='<?php if ($_SERVER['REQUEST_URI']=="/deposit?add"){?>active<?php }?>' href="/deposit?add"><i class="fa fa-handshake-o"></i> <span>Создать депозит</span></a></li>
          <li><a class='<?php if ($_SERVER['REQUEST_URI']=="/operation?add=CASHIN"){?>active<?php }?>' href="/operation?add=CASHIN"><i class="fa fa-bank"></i> <span>Пополнить баланс</span></a></li>
          <li><a  class='<?php if ($_SERVER['REQUEST_URI']=="/operation?add=CASHOUT"){?>active<?php }?>' href="/operation?add=CASHOUT"><i class="fa fa-archive"></i> <span>Вывести средства</span></a></li>
          <li><a  class='<?php if ($_SERVER['REQUEST_URI']=="/balance"){?>active<?php }?>' href="/balance"><i class="fa fa-history"></i> <span>Информация о балансе</span></a></li>
          <li><a class='<?php if ($_SERVER['REQUEST_URI']=="/refsys"){?>active<?php }?>' href="/refsys"><i class="fa fa-group"></i> <span>Мои рефералы</span></a></li>
          <li><a class='<?php if ($_SERVER['REQUEST_URI']=="/messages"){?>active<?php }?>' href="/messages"><i class="fa fa-envelope"></i> <span>Сообщения</span></a></li>
          <li><a class='<?php if ($_SERVER['REQUEST_URI']=="/account"){?>active<?php }?>' href="/account"><i class="fa fa-cogs"></i> <span>Настройки</span></a></li>
          <li><a class='' href="/login?out"><i class="fa fa-sign-out"></i> <span>Выйти</span></a></li>
        </ul>
        <div class="clear"></div>
      </div>
    </div>
  </div>
</div>
    <!-- End of sidebar menu -->
<?php }} ?>