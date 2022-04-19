{strip}
{include file='admin/header.tpl' title='Payment systems'}

{include file='list.tpl' 
	title='Payment systems'
	url='*'
	fields=[
		'cID'=>['ID'],
		'cCID'=>['Code'],
		'cName'=>['Name'],
		'cCurr'=>['Currency'],
		'cBal'=>['Balance'],
		'cAPI'=>['API'],
		'cDisable'=>['<small>Disabled</small>'],
		'cCASHIN'=>['<small>CashIn</small>'],
		'cCASHOUT'=>['<small>CashOut</small>'],
		'cEX'=>['<small>Exchange</small>'],
		'cTR'=>['<small>Transfer</small>'],
		'cBUY'=>['<small>Buy</small>'],
		'cSELL'=>['<small>Sell</small>'],
		'cBUY2'=>['<small>Service</small>'],
		'cSELL2'=>['<small>Service</small>'],
		'cGIVE'=>['<small>Deposit</small>'],
		'cTAKE'=>['<small>Withdrawal</small>'],
		'cHidden'=>['<small>Hidden</small>']
	]
	values=$list
	row='*'
	btns=['del'=>'Delete']
}

<a href="{_link module='balance/admin/curr'}?add" class="button-green">Create</a><br>

{include file='admin/footer.tpl'}
{/strip}
