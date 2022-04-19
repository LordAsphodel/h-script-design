{strip}
{include file='headercabinet.tpl' title='My deposits'}

<div class="page-heading animateed fadeInDown">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>My deposits</h1>
    </div>
    <div class="clear"></div>
</div>

{include file='depo/_statuses.tpl'}

<div class="box-info full animated fadeInDown">
	<h2 class="text-left"><i class="fa fa-history"></i> My deposits</h2>
		<div id="transactions-table" class="collapse in">
			<div class="table-responsive p-b-20">

{if $list}

	{include file='mlist.tpl' 
		url='*'
		table_class='table table-striped'
		fields=[
			'dID'=>['<small>ID</small>'],
			'dCTS'=>['<small>Start date</small>'],
			'cName'=>['<small>Payment system</small>'],
			'dZD'=>['<small>Sum</small>'],
			'pName'=>['<small>Plan</small>'],
			'dLTS'=>['<small>Last charged</small>'],
			'dN'=>['<small>Times charged</small>'],
			'dZP'=>['<small>Total charged</small>'],
			'dNTS'=>['<small>Next accrual</small>'],
			'dState'=>['<small>State</small>']
		]
		values=$list
		row='*'
	}

{else}
		<table class="table table-striped">
            <thead>
            	<tr>
					<th><small>ID</small></th>
          			<th><small>Start date</small></th>
          			<th><small>Payment system</small></th>
    				<th><small>Sum</small></th>
    				<th><small>Plan</small></th>
    				<th><small>Last charged</small></th>
    				<th><small>Times charged</small></th>
    				<th><small>Total charged</small></th>
    				<th><small>Next accrual</small></th>
    				<th><small>State</small></th>
    			</tr>
            </thead>
            <tbody>
            	<tr><td colspan="4">You have no deposits</td></tr>
            </tbody>
        </table>

{/if}

		</div>
	</div>
</div>
	
<div class="box-info full animated fadeInDown">
	<h2 class="text-left"> <a href="{_link module='depo/depo'}?add" class="button-green"><i class="fa fa-money"></i>&nbsp; Create a deposit</a></h2>
</div>

{include file='footercabinet.tpl'}
{/strip}
