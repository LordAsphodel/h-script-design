{strip}

{include file='headercabinet.tpl' title='Balance'}

<div class="page-heading">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Balance information</h1>
    </div>
    <div class="clear"></div>
</div>

{if isset($smarty.get.fail)}

	<h2>Operation is NOT complete!</h2>
	<p class="info">
		The operation was interrupted or an error has occured.<br>
		<a href="{$_selfLink}">Retry</a> operation later.
	</p>

{else}

	{include file='balance/_bal.tpl'}
	<br>
    <div class="box-info full animated fadeInDown">
    <h2 class="text-left"> <i class="fa fa-history"></i> My operations</h2> <br>
	{if $list}
		{include file='balance/_statuses.tpl'}

		{include file='mlist.tpl' 
            url='*'
            table_class='table table-striped'
			fields=[
				'oTS'=>['Date/Complete'],
				'oOper'=>['Operation'],
				'oCID'=>['Payment system'],
				'oSum1'=>['Income'],
				'oSum2'=>['Outcome'],
				'oBatch'=>['Batch-number'],
				'oState'=>['State'],
				'oMemo'=>['Comments']
			]
			values=$list
			row='*'
		}
		        <p align="center"><a href="{_link module='balance/oper'}?add=CASHIN" class="btn btn-primary"><b><u>Recharge</u></b></a>
		        &nbsp;<a href="{_link module='balance/oper'}?add=CASHOUT" class="btn btn-primary"><b><u>Withdraw*</u></b> </a></p>
        *Withdrawal is only available on Sundays according to the <a href="/rules">regulations</a> of the project

	</div>
	
		
	{/if}

{/if}

{include file='footercabinet.tpl'}
{/strip}
