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
		'RegBonus'=>['$', 'Сумма бонуса за регистрацию <<в ед. внутренней валюты>>'],
		'LockWallets'=>['C', 'Запретить изменять платежные реквизиты'],
		1=>'Курсы (в ед. внутренней вылюты)',
		'RateUSD'=>['$', '1 USD ='],
		'RateEUR'=>['$', '1 EUR ='],
		'RateRUB'=>['$', '1 RUB ='],
		'UpdateRates'=>['C', 'Обновлять курсы автоматически <<с сайта cbr.ru>>', 'comment'=>$lastupdate],
		'RateBTC'=>['$', '1 BTC ='],
		'Update'=>['C', 'Обновлять балансы кошельков'],
		
		'Пополнение',
		'CASHINText'=>['T', 'Текст <<доступны #id#, #user#>>', 'size'=>30],
		'ForcePayer'=>['C', 'Выставлять <<фиксировать>> номер плательщика'],

		'Вывод',
		'CASHOUTText'=>['T', 'Текст <<доступны #id#, #user#>>', 'size'=>30],
		'NeedPIN'=>['C', 'Требовать ввода PIN-кода <<при заявках вручную>>'],
		
		'Автоматический вывод',
		'AWDBONUS'=>['C', 'Бонус'],
		'AWDEXIN'=>['C', 'Обмен'],
		'AWDTRIN'=>['C', 'Приход <<Перевод>>'],
		'AWDSELL'=>['C', 'Продажа'],
		'AWDSELL2'=>['C', 'Оказание услуги'],
		'AWDREF'=>['C', 'Рефские'],
		'AWDTAKE'=>['C', 'Снятие'],
		'AWDCALCIN'=>['C', 'Начисление']
	]
}
	
{include file='admin/footer.tpl'}
{/strip}