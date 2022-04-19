{strip}
{include file='admin/header.tpl' title='Настройки'}

{if $curr1}
	<p class="info">
		{if $_cfg.Const_IntCurr}
			Скрипт работает в режиме "Единая внутренняя валюта ({$curr1.cCurrID})".<br>
			Это означает, что все операции в системе будут выполняться только в этой валюте,<br>
			все средства, пополненные с внешних платежных систем будут автоматически<br>
			сконвертированы во внутреннюю валюту по нижеуказанному курсу
		{else}
			Настроена всего одна платежная система и скрипт принимает ее за единственную
		{/if}
	</p>
{/if}

{include file='edit.tpl' 
	values=$cfg
	fields=[
		'RegBonus'=>['$', 'Registration bonus <<internal currency units>>'],
		'LockWallets'=>['C', 'Forbid to change payment settings'],
		1=>'Rates (internal currency units)',
		'RateUSD'=>['$', '1 USD ='],
		'RateEUR'=>['$', '1 EUR ='],
		'RateRUB'=>['$', '1 RUB ='],
		'UpdateRates'=>['C', 'Refresh rates automatically <<from cbr.ru site>>', 'comment'=>$lastupdate],
		'RateBTC'=>['$', '1 BTC ='],
		'Update'=>['C', 'Refresh wallets balances'],
		
		'Recharge',
		'CASHINText'=>['T', 'Text <<available #id#, #user#>>', 'size'=>30],
		'ForcePayer'=>['C', 'Invoice <<fix>> payer number'],

		'Withdrawal',
		'CASHOUTText'=>['T', 'Text <<available #id#, #user#>>', 'size'=>30],
		'NeedPIN'=>['C', 'PIN-code is reqiured <<manual requsts>>'],
		
		'Auto withdrawal',
		'AWDBONUS'=>['C', 'Bonus'],
		'AWDEXIN'=>['C', 'Exchange'],
		'AWDTRIN'=>['C', 'Income <<transfer>>'],
		'AWDSELL'=>['C', 'Sell'],
		'AWDSELL2'=>['C', 'Service'],
		'AWDREF'=>['C', 'Refferal bonus'],
		'AWDTAKE'=>['C', 'Withdrawal'],
		'AWDCALCIN'=>['C', 'Accrual']
	]
}
	
{include file='admin/footer.tpl'}
{/strip}
