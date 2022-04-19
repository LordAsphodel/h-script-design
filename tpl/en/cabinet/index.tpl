{strip}
{include file='headercabinet.tpl' title='Personal office'}

<div class="page-heading animateed fadeInDown">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Personal office</h1>
    </div>
    <div class="clear"></div>
</div>
<!-- End page header -->

<!-- Start info box -->
<div class="row">
    <div class="col-sm-3 col-xs-6">
        <div class="box-info animateed fadeInDown">
            <div class="icon-box">
                <span class="fa-stack">
                    <i class="fa fa-circle fa-stack-2x success"></i>
                    <i class="fa fa-balance-scale fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="text-box">
                <h3 class="js-balance-value">${_z($curr1.wBal, 2)}</h3>
                <p>BALANCE</p>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="col-sm-3 col-xs-6">
        <div class="box-info animateed fadeInDown">
            <div class="icon-box">
                <span class="fa-stack">
                    <i class="fa fa-circle fa-stack-2x danger"></i>
                    <i class="fa fa-suitcase fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="text-box">
                <h3 class="js-contribution-value">${_z($ondeposits, 2)}</h3>
                <p>ACTIVE DEPOSITES</p>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="col-sm-3 col-xs-6">
        <div class="box-info animateed fadeInDown">
            <div class="icon-box">
                <span class="fa-stack">
                    <i class="fa fa-circle fa-stack-2x info"></i>
                    <i class="fa fa-dollar fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="text-box">
                <h3>${_z($allearn, 2)}</h3>
                <p>TOTAL INCOME</p>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="col-sm-3 col-xs-6">
        <div class="box-info animateed fadeInDown">
            <div class="icon-box">
                <span class="fa-stack">
                    <i class="fa fa-circle fa-stack-2x warning"></i>
                    <i class="fa fa-handshake-o fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="text-box">
                <h3>${_z($referalsearn, 2)}</h3>
                <p>REFFERAL INCOME</p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

{*include file='balance/bal.tpl'*}

{include file='balance/_stat.tpl'}

{include file='footercabinet.tpl'}
{/strip}
