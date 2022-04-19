{strip}

{include file='depo/_statuses.tpl'}

{$chg=(($el.dState == 1) and ($el.pCompndMax > 0) and ($el.pCompndMin < $el.pCompndMax))}
{$modbuttons=[] scope='global'}
{if $chg}
	{$modbuttons['chg']='Change reinvestment rate' scope='global'}
{/if}

{$add=$el.pEnAdd}
{$sub=(($el.pClComis < 100) and ($el.dNPer >= $el.pMPer))}
{$modform=[] scope='global'}
{if ($el.dState == 1) and ($add or $sub)}
	{$modform=[
		1=>'',
		'Sum'=>
			[
				'$',
				'Amount to change!!',
				[
					'sum_empty'=>'Enter sum',
					'sum_wrong'=>'Incorrect sum',
					'low_balance'=>'Insufficient funds',
					'cant_add'=>'Unable to reinest',
					'cant_sub'=>'Unable to withdraw',
					'plan_not_found'=>'No matching plan is available'
				],
				'comment'=>" <i><small>{$el.cCurr}</small></i>",
				'default'=>0
			]
	] scope='global'}
	{if $add}
		{$modbuttons['add']='Reinvest' scope='global'} 
	{/if}
	{if $sub}
		{$modbuttons['sub']='Withdraw' scope='global'}
	{/if}
{/if}
{if $el.dState == 1}
	{$modbuttons['chp']='Change plan' scope='global'}
	{$modbuttons['cls']='Close' scope='global'}
{/if}

{include file='edit.tpl'
	title=valueIf($from_admin, 'Deposit')
	fields=[
		'dID'=>[],
		'duID'=>[],
		'dcID'=>[],
		'dState'=>
			[
				'X', 
				'State',
				0,
				"<b>{$ststrs[$el.dState]}</b>"
			],
		'dCTS'=>
			[
				'X',
				'Created'
			],
		'uLogin'=>
			[
				'X',
				'User',
				'skip'=>!$from_admin
			],
		'Bal'=>
			[
				'U',
				'balance/bal.tpl',
				'skip'=>!$from_admin
			],
		'cName'=>
			[
				'X', 
				'Payment system'
			],
		'dZD'=>
			[
				'X',
				'Sum',
				0,
				_z($el.dZD, $el.dcID, 1)
			],
		'dpID'=>
			[
				'S', 
				'Plan',
				0,
				$plans
			],
		'dN'=>
			[
				'X', 
				'Times charged',
				0,
				"{$el.dNPer} of {$el.pNPer}"
			],
		'dLTS'=>
			[
				'X', 
				'Last charged'
			],
		'dNTS'=>
			[
				'X', 
				'Next accrual'
			],
		'dCompnd'=>
			[
				'X',
				'Reinvestment rate <<Capitalization>>',
				'skip'=>$chg
			],
		'Compnd'=>
			[
				'%',
				'Reinvestment rate <<capitalization>>',
				[
					'compnd_wrong'=>"Incorrect value [$cmin..$cmax]"
				],
				'default'=>$el.dCompnd,
				'skip'=>!$chg
			],
		'dM'=>
			[
				'X', 
				'Pre-term withdrawal',
				0,
				valueIf($el.pClComis >= 100, 'Not available',
					valueIf($el.dNPer >= $el.pMPer, "Available", 
						"Accruals left: {$el.pMPer - $el.dNPer}")
				),
				'skip'=>($el.dState > 1)
			]
	]+$modform
	values=$el
	errors=[
		'oper_disabled'=>'Operation is forbidden'
	]
	btn_text=' '
	btns=$modbuttons
}

{/strip}
