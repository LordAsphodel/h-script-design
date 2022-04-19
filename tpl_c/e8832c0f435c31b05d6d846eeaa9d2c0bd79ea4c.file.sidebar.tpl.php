<?php /* Smarty version Smarty-3.1.8, created on 2017-10-23 15:03:08
         compiled from "tpl/en/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46096712959ad128fdea799-50009798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8832c0f435c31b05d6d846eeaa9d2c0bd79ea4c' => 
    array (
      0 => 'tpl/en/sidebar.tpl',
      1 => 1508709645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46096712959ad128fdea799-50009798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad128fe09d20_48263846',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad128fe09d20_48263846')) {function content_59ad128fe09d20_48263846($_smarty_tpl) {?><!-- Start sidebar menu -->
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
          <li><a class='<?php if ($_SERVER['REQUEST_URI']=="/cabinet"){?>active<?php }?>' href="/cabinet"><i class="fa fa-home"></i> <span>My office</span></a></li>
          <li><a class='<?php if ($_SERVER['REQUEST_URI']=="/deposits"){?>active<?php }?>' href="/deposits"><i class="fa fa-money"></i> <span>My deposits</span></a></li>
          <li><a class='<?php if ($_SERVER['REQUEST_URI']=="/deposit?add"){?>active<?php }?>' href="/deposit?add"><i class="fa fa-handshake-o"></i> <span>Create a deposit</span></a></li>
          <li><a class='<?php if ($_SERVER['REQUEST_URI']=="/operation?add=CASHIN"){?>active<?php }?>' href="/operation?add=CASHIN"><i class="fa fa-bank"></i> <span>Recharge balance</span></a></li>
          <li><a  class='<?php if ($_SERVER['REQUEST_URI']=="/operation?add=CASHOUT"){?>active<?php }?>' href="/operation?add=CASHOUT"><i class="fa fa-archive"></i> <span>Withdraw funds</span></a></li>
          <li><a  class='<?php if ($_SERVER['REQUEST_URI']=="/balance"){?>active<?php }?>' href="/balance"><i class="fa fa-history"></i> <span>Balance information</span></a></li>
          <li><a class='<?php if ($_SERVER['REQUEST_URI']=="/refsys"){?>active<?php }?>' href="/refsys"><i class="fa fa-group"></i> <span>My affiliates</span></a></li>
          <li><a class='<?php if ($_SERVER['REQUEST_URI']=="/messages"){?>active<?php }?>' href="/messages"><i class="fa fa-envelope"></i> <span>Messages</span></a></li>
          <li><a class='<?php if ($_SERVER['REQUEST_URI']=="/account"){?>active<?php }?>' href="/account"><i class="fa fa-cogs"></i> <span>Settings</span></a></li>
          <li><a class='' href="/login?out"><i class="fa fa-sign-out"></i> <span>Log out</span></a></li>
        </ul>
        <div class="clear"></div>
      </div>
    </div>
  </div>
</div>
    <!-- End of sidebar menu -->
<?php }} ?>