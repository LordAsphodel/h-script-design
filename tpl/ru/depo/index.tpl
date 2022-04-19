{strip}
{include file='headercabinet.tpl' title='Мои депозиты'}

<div class="page-heading animateed fadeInDown">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Мои депозиты</h1>
    </div>
    <div class="clear"></div>
</div>

{include file='depo/_statuses.tpl'}

<div class="box-info full animated fadeInDown">
	<h2 class="text-left"><i class="fa fa-history"></i> Мои депозиты</h2>
		<div id="transactions-table" class="collapse in">
			<div class="table-responsive p-b-20">

{if $list}

	{include file='mlist.tpl' 
		url='*'
		table_class='table table-striped'
		fields=[
			'dID'=>['<small>ID</small>'],
			'dCTS'=>['<small>Дата начала</small>'],
			'cName'=>['<small>Плат.система</small>'],
			'dZD'=>['<small>Сумма</small>'],
			'pName'=>['<small>План</small>'],
			'dLTS'=>['<small>Посл.начисление</small>'],
			'dN'=>['<small>Начислений</small>'],
			'dZP'=>['<small>Начислено</small>'],
			'dNTS'=>['<small>След.начисление</small>'],
			'dState'=>['<small>Статус</small>']
		]
		values=$list
		row='*'
	}

{else}
		<table class="table table-striped">
            <thead>
            	<tr>
					<th><small>ID</small></th>
          			<th><small>Дата начала</small></th>
          			<th><small>Плат.система</small></th>
    				<th><small>Сумма</small></th>
    				<th><small>План</small></th>
    				<th><small>Посл.начисление</small></th>
    				<th><small>Начислений</small></th>
    				<th><small>Начислено</small></th>
    				<th><small>След.начисление</small></th>
    				<th><small>Статус</small></th>
    			</tr>
            </thead>
            <tbody>
            	<tr><td colspan="4">У вас нет депозитов</td></tr>
            </tbody>
        </table>

{/if}

		</div>
	</div>
</div>
	
<div class="box-info full animated fadeInDown">
	<h2 class="text-left"> <a href="{_link module='depo/depo'}?add" class="button-green"><i class="fa fa-money"></i>&nbsp; Сделать вклад</a></h2>
</div>

{include file='footercabinet.tpl'}
{/strip}
