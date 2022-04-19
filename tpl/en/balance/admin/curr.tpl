{strip}
{include file='admin/header.tpl' title='Internal payment system'}

{if $el}

	<h2>{if $el.cCID == '*'}Internal payment system{else}Payment system [{$el.cCID}]{/if}</h2>

	{if isset($smarty.get.testapi)}

		<h2>Тест API</h2>
		<p class="info">
			{if $res.result == 'OK'}
				Wallet balance: <b>{_z($res.sum, $el.cID, -1)}</b> {$el.cCurr}.<br>
				Test passed successfully!
			{else}
				Error <b>{$res.result}</b>
			{/if}
		</p>
		
	{/if}

	{if $sfields}
		{$sfields = [1=>'SCI <small>(cashin)</small>'] + $sfields}
	{/if}
	{if $afields}
		{$afields = [2=>'API <small>(cashout)</small>'] + $afields}
	{/if}
	{$params=[
		77=>'Live balance',
		'cBal' => ['X', 'Last value'],
		'cBalMin' => ['$', 'Warn if balance is less than Х'],
		5=>'Cahin',
		'cCASHINMode'=>['S', 'Mode', 0, [0=>'Disabled', 1=>'Manual', 2=>'Merchant', 3=>'Manual and merchant']],
		'cCASHINMin'=>
			[
				'$',
				'Min sum'
			],
		'cCASHINMax'=>
			[
				'$',
				'Max sum <<0 - default>>'
			],
		'cCASHINInt'=>
			[
				'C',
				'Only integer sums',
				'default'=>0
			],
		'cCASHINComis'=>
			[
				'%',
				'Comission rate'
			],
		'cCASHINComisMin'=>
			[
				'$',
				'Min comission'
			],
		'cCASHINComisMax'=>
			[
				'$',
				'Max comission <<0 - none>>'
			],
		6=>'Withdrawal',
		'cCASHOUTMode'=>['S', 'Mode', 0, [0=>'Disabled', 1=>'Manual', 2=>'Instant']],
		'cCASHOUTMin'=>
			[
				'$',
				'Min sum'
			],
		'cCASHOUTMax'=>
			[
				'$',
				'Max sum <<0 - default>>'
			],
		'cCASHOUTInt'=>
			[
				'C',
				'Only integer',
				'default'=>0
			],
		'cCASHOUTComis'=>
			[
				'%',
				'Comission rate'
			],
		'cCASHOUTComisMin'=>
			[
				'$',
				'Min comission'
			],
		'cCASHOUTComisMax'=>
			[
				'$',
				'Max comission <<0 - none>>'
			],
		'cCASHOUTLimitPer'=>
			[
				'I',
				'limit period <<hours, 0 - none>>'
			],
		'cCASHOUTLimit'=>
			[
				'$',
				'Limit'
			],
		7=>'Exchange',
		'cEXMode'=>['S', 'Режим', 0, [0=>'отключен', 1=>'ручной', 2=>'мгновенно']],
		'cEXOut'=>
			[
				'%',
				'Корр. <<в процентах к курсу>> при обмене НА внут. валюту'
			],
		'cEXIn'=>
			[
				'%',
				'Корр. <<в процентах к курсу>> при обмене С внут. валюты'
			],
		'cEXMin'=>
			[
				'$',
				'Мин. сумма'
			],
		'cEXMax'=>
			[
				'$',
				'Макс. сумма <<0 - по умолчанию>>'
			],
		'cEXInt'=>
			[
				'C',
				'Только целыми суммами',
				'default'=>0
			],
		'cEXComis'=>
			[
				'%',
				'Процент комиссии'
			],
		'cEXComisMin'=>
			[
				'$',
				'Мин. сумма комиссии'
			],
		'cEXComisMax'=>
			[
				'$',
				'Макс. сумма комиссии <<0 - нет>>'
			],
		8=>'Перевод',
		'cTRMode'=>['S', 'Режим', 0, [0=>'отключен', 1=>'ручной', 2=>'мгновенно']],
		'cTRMin'=>
			[
				'$',
				'Мин. сумма'
			],
		'cTRMax'=>
			[
				'$',
				'Макс. сумма <<0 - по умолчанию>>'
			],
		'cTRInt'=>
			[
				'C',
				'Только целыми суммами',
				'default'=>0
			],
		'cTRComis'=>
			[
				'%',
				'Процент комиссии'
			],
		'cTRComisMin'=>
			[
				'$',
				'Мин. сумма комиссии'
			],
		'cTRComisMax'=>
			[
				'$',
				'Макс. сумма комиссии <<0 - нет>>'
			],
		'Покупка',
		'cBUYMode'=>['S', 'Режим', 0, [0=>'отключена', 1=>'ручной', 2=>'мгновенно']],
		'Продажа',
		'cSELLMode'=>['S', 'Режим', 0, [0=>'отключена', 1=>'ручной', 2=>'мгновенно']],
		'Услуга',
		'cBUY2Mode'=>['S', 'Режим', 0, [0=>'отключена', 1=>'ручной', 2=>'мгновенно']],
		'Оказание услуги',
		'cSELL2Mode'=>['S', 'Режим', 0, [0=>'отключено', 1=>'ручной', 2=>'мгновенно']],
		'Вклад',
		'cGIVEMode'=>['S', 'Режим', 0, [0=>'отключен', 1=>'ручной', 2=>'мгновенно']],
		'Снятие',
		'cTAKEMode'=>['S', 'Режим', 0, [0=>'отключено', 1=>'ручной', 2=>'мгновенно']]
	]}
	{include file='edit.tpl'
		fields=[
			'cID'=>[],
			'cCID'=>[],
			'cDisabled'=>
				[
					'C',
					'Отключена',
					'default'=>1
				],
			'cHidden'=>
				[
					'C',
					'Скрыта',
					'default'=>1
				],
			'cMTS'=>
				[
					'X',
					'Исправлено',
					'skip'=>!$el.cMTS
				],
			99=>'Вид',
			'cName'=>
				[
					'T',
					'Наименование',
					'size'=>30,
					'comment'=>$cName
				],
			'cCurr'=>
				[
					'T',
					'Валюта',
					'comment'=>$el.cCurrID
				],
			'cNumDec'=>
				[
					'I', 
					'Кол-во знаков после запятой (0-6) <<0 - по умолчанию>>'
				]
		] + 
		(array)$pfields + 
		(array)$sfields +
		(array)$afields +
		$params
		values=$el
	}
	
{else}

	{include file='edit.tpl'
		form='add'
		title='New payment system'
		fields=[
			'PSys'=>
				[
					'S', 
					'', 
					[
						'psys_not_selected'=>'Choose payment system'
					],
					[0=>'- select -'] + (array)$cids
				]
		]
		btn_text='Add'
	}
	
{/if}

{include file='admin/footer.tpl'}
{/strip}
