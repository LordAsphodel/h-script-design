{strip}
{include file='headercabinet.tpl' title='Create a deposit'}

<div class="page-heading animateed fadeInDown">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Create a deposit</h1>
    </div>
    <div class="clear"></div>
</div>

{if $el}

<div class="box-info full animated fadeInDown">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-right: 1px solid #eee; padding-top: 10px;">
		<div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div>

	{include file='depo/_depo.tpl'}

	</div>
</div>

{else}


<div class="row">
	
{foreach from=$plani item=p}

		<div class="col-sm-6 col-xs-12 col-md-6 col-lg-4">
		    <div class="box-info crypto-box-rate box-rate full animated fadeInDown">
		      <div class="rate-ic">
		        <div style="background-image: url(/assets/img/crypto.png); background-position: -117px 9px;"></div>
		      </div>
		      <div class="rate-title" style="background: #5cb85c;">
		        {$p.pName}
		      </div>
		      
		      <form class="rate-cform" method="post" name="new">
				<input name="Login" id="new_Login" value="" type="hidden">									
		      	<input name="PSys" id="new_PSys" value="3" type="hidden">
			    <div class="rate-cont rate-top-15">
			      <div class="cr-title">
			        From <span>{_z($p.pMin, 2)} $</span>          
			      </div>
			      <div class="cr-title">
			        Up to <span>{_z($p.pMax, 2)} $</span>          
			      </div>
			      <div class="rate-divider"></div>
			      <div class="row">
			        <div class="col-md-4 col-sm-4 col-xs-4 col-xs-offset-2">
			            <div class="sm-bl">
			              {$p.pPerc}%
			            </div>
			            <div class="sm-gr">a day</div>
			        </div>
			        <div class="col-md-4 col-sm-4 col-xs-4">
			            <div class="sm-bl">
			              Infinite
			            </div>
			            <div class="sm-gr">period</div>
			        </div>
			      </div>
			      <div class="rate-divider"></div>
			      <br><br>
			      <div class="lg-title">
			        <input placeholder="0.00$" name="Sum" type="text" value="{_z($p.pMin)}">
			      </div>
			    </div>
			    <div class="rate-form">
			      <div class="r-form-group">
			        <input type="hidden" name="Plan" value="{$p.pID}">
			        <button type="submit" name="new_btn" class="f-element f-button">Invest</button>
			      </div>
			    </div>
			   </form>
		    </div>
		</div>

{/foreach}

</div>


	{*include file='depo/_depo.interval.tpl'*}
	{*include file='depo/_depo.new.tpl'*}

	</div>
</div>
		
{/if}


{include file='footercabinet.tpl'}
{/strip}
