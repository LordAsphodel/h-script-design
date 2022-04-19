<!-- Start sidebar menu -->
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
          <li><a class='{if $smarty.server.REQUEST_URI eq "/cabinet"}active{/if}' href="/cabinet"><i class="fa fa-home"></i> <span>My office</span></a></li>
          <li><a class='{if $smarty.server.REQUEST_URI eq "/deposits"}active{/if}' href="/deposits"><i class="fa fa-money"></i> <span>My deposits</span></a></li>
          <li><a class='{if $smarty.server.REQUEST_URI eq "/deposit?add"}active{/if}' href="/deposit?add"><i class="fa fa-handshake-o"></i> <span>Create a deposit</span></a></li>
          <li><a class='{if $smarty.server.REQUEST_URI eq "/operation?add=CASHIN"}active{/if}' href="/operation?add=CASHIN"><i class="fa fa-bank"></i> <span>Recharge balance</span></a></li>
          <li><a  class='{if $smarty.server.REQUEST_URI eq "/operation?add=CASHOUT"}active{/if}' href="/operation?add=CASHOUT"><i class="fa fa-archive"></i> <span>Withdraw funds</span></a></li>
          <li><a  class='{if $smarty.server.REQUEST_URI eq "/balance"}active{/if}' href="/balance"><i class="fa fa-history"></i> <span>Balance information</span></a></li>
          <li><a class='{if $smarty.server.REQUEST_URI eq "/refsys"}active{/if}' href="/refsys"><i class="fa fa-group"></i> <span>My affiliates</span></a></li>
          <li><a class='{if $smarty.server.REQUEST_URI eq "/messages"}active{/if}' href="/messages"><i class="fa fa-envelope"></i> <span>Messages</span></a></li>
          <li><a class='{if $smarty.server.REQUEST_URI eq "/account"}active{/if}' href="/account"><i class="fa fa-cogs"></i> <span>Settings</span></a></li>
          <li><a class='' href="/login?out"><i class="fa fa-sign-out"></i> <span>Log out</span></a></li>
        </ul>
        <div class="clear"></div>
      </div>
    </div>
  </div>
</div>
    <!-- End of sidebar menu -->
