{strip}

<h2>
	Payment data through {$el.cName},<br>
	made manually.
	{if !$from_admin and ($el.oOper == 'CASHIN')} и<br> payer essential{/if}
</h2>

{$s1 = valueIf($el.cCID == 'BTCE', 'BTC-E code', 'Batch-number!! <<operations/transactions>>')}
{$s2 = valueIf($el.cCID == 'BTCE', 'Enter code', 'Enter operation number')}
{$s3 = valueIf($el.cCID == 'BTCE', 'Code is already used', 'The number is used')}

{$ro = !$from_admin and ($el.oState > 1)}
{include file='edit.tpl'
	form='data'
	fields=[
		'oID'=>$el.oID,
		'date'=>
			[
				'D',
				'Date!!',
				[
					'data_date_wrong'=>'Incorrect date'
				],
				'default'=>$today,
				'readonly'=>$ro
			],
		'sum'=>
			[
				'X',
				'Sum',
				0,
				_z($el.oSum - $oComis, $el.ocID, 1)
			],
		'batch'=>
			[
				'T',
				$s1,
				[
					'data_batch_wrong'=>$s2,
					'batch_exists'=>$s3
				],
				'default'=>$defaultbatch,
				'readonly'=>$ro
			],
		'memo'=>
			[
				'A',
				'Coments',
				'readonly'=>$ro
			]
	] + (array)$dfields
	values=$el.oParams2
	btn_text=valueIf($ro, ' ', valueIf($el.oParams2.batch, 'Change', 'Create'))
	hide_cancel=true
}
		
{/strip}
