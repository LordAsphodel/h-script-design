{strip}
{include file='admin/header.tpl' title='Accrual'}

{if $_cfg.Depo_ChargeMode == 2}

	<p class="info">
		All deposits using selected plans will be charged <b>once</b> on the next date: <b>{$cdate}</b>.
	</p>

	{include file='list.tpl' 
		title='Manual accrual'
		url='*'
		fields=[
			'pID'=>['ID'],
			'pHidden'=>['Hidden'],
			'pName'=>['Title'],
			'pMin'=>['Min'],
			'pMax'=>['Max'],
			'pDays'=>['Days'],
			'pPerc'=>['<small>Rate</small>'],
			'cnt'=>['<small>Deposits</small>']
		]
		values=$list
		row='*'
		btns=['del'=>'Make accrual']
	}

	<a href="{_link module='balance/admin/opers'}" class="button-green">Operations</a><br>
	
{elseif $_cfg.Depo_ChargeMode == 1}
	
	<p class="info">
		Deposits are charged <a href="{_link module='depo/admin/setup'}">automatically</a>
	</p>
	
{else}

	<p class="info">
		Accrual <a href="{_link module='depo/admin/setup'}">is disabled</a>
	</p>

{/if}

{include file='admin/footer.tpl'}
{/strip}
