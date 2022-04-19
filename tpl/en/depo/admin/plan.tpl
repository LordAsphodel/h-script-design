{strip}
{include file='admin/header.tpl' title='Plan'}

{include file='edit.tpl'
	title='Plan'
	title_new='New plan'
	fields=[
		'pID'=>[],
		'pHidden'=>
			[
				'C', 
				'Hidden'
			],
		'pNoCalc'=>
			[
				'C', 
				'Don not make accrual'
			],
		'pGroup'=>
			[
				'I', 
				'Plan group number'
			],
		'pName'=>
			[
				'L',
				'Title!!', 
				['name_empty'=>'Set title']
			],
		'pDescr'=>
			[
				'W', 
				'Description'
			],
		'pMin'=>
			[
				'$', 
				'Min sum!! <<including>>', 
				['min_wrong'=>'Set minimal amount [from 0.010]']
			],
		'pMax'=>
			[
				'$', 
				'Max sum!! <<Not including>>', 
				['max_wrong'=>'Set maxima amount [up to 1000000.000]']
			],
		'pBonus'=>
			[
				'%', 
				'Bonus rate'
			],
		'pWDays'=>
			[
				'C', 
				"<a href=\"{_link module='calendar/admin/days'}\" target=\"_blank\">Working days</a> only <<if period is less than a day>>"
			],
        'pPClndr'=>
			[
				'C',
				"Charge rate specidied in the calendar <<if not specified or equal to 0 - get from plan>>"
			],
		'pPerc'=>
			[
				'%', 
				'Accrual rate', 
				['perc_wrong'=>'Set rate']
			],
		'pPer'=>
			[
				'I', 
				'Accrual period!! <<hours>>', 
				['period_wrong'=>'set period']
			],
		'pNPer'=>
			[
				'I', 
				'Quantity of periods <<0 - infinite period>>'
			],
		'pReturn'=>
			[
				'%', 
				'Return rate at the end of the period',
				['perc2_wrong'=>'Set rate'],
				'default'=>100
			],
		1=>'Reinvestment',
		'pCompndMin'=>
			[
				'%', 
				'Min rate',
				['compndmin_wrong' => 'Incorrect value']
			],
		'pCompndMax'=>
			[
				'%', 
				'Max rate <<0 - forbidden>>',
				['compndmax_wrong' => 'Incorrect value']
			],
		'Add to deposit',
		'pEnAdd'=>
			[
				'C', 
				'Allow'
			],
		'pMinAdd'=>
			[
				'$', 
				'Min amount <<including>>'
			],
		'Withdrawal',
		'pClComis'=>
			[
				'%', 
				'Comission rate <<100 - forbidden>>',
				['clcomis_wrong' => 'Incorrect value'],
				'default'=>100
			],
		'pMPer'=>
			[
				'I', 
				'Period quantity when withdrawal is not possible'
			],
		'pClPer'=>
			[
				'I', 
				'Period quantity when there is no withdrawal fee'
			],
		'Limits',
		'pGroupReq'=>
			[
				'I', 
				'Available only after making a deposit using a plan from the group<br><<0 - do not use>>'
			],
		'pMaxCount'=>
			[
				'I', 
				'Maximum quantity of deposits using this plan <<0 - not limited>>'
			],
		'Special refferal system',
		'pDPerc'=>
			[
				'A', 
				'From deposit<br><<Values level by level>>'
			],
		'pPPerc'=>
			[
				'A', 
				'From accrual<br><<Values level by level>>'
			]
	]
	values=$el
}

{include file='admin/footer.tpl'}
{/strip}
