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
					'sum_empty'=>'enter amount',
					'sum_wrong'=>'Incorrect sum',
					'low_bal1'=>'Insufficient funds',
					'cant_add'=>'Unable to reinvest',
					'cant_sub'=>'Unable to withdraw',
					'plan_not_found'=>'No matching investment plan'
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

{include file='medit.tpl'
	title=valueIf($from_admin, 'Deposit')
	form_class='form-horizontal'
	row_wrap='form-group'
	label_class='col-sm-6 control-label'
	input_class='form-control'
	input_wrap='col-sm-6'
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
		'pName'=>
			[
				'X', 
				'Plan',
				0,
				valueIf($from_admin, "<a href=\"{_link module='depo/admin/plan'}?id={$el.dpID}\" target=\"_blank\">{$el.pName}</a>")
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
				'Reinvestment rate <<capitalization>>',
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
		'oper_disabled'=>'Operation is complete'
	]
	btn_text=' '
	btns=$modbuttons
}
*Reinvestment is only available on Saturdays according to the <a href="/rules">regulations</a> of the project.

{/strip}
