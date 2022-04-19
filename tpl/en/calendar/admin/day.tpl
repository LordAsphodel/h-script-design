{strip}
{include file='admin/header.tpl' title='Day'}

{include file='calendar/admin/_statuses.tpl'}

{include file='edit.tpl'
	title='Day'
	title_new='New day'
	fields=[
		'cID'=>[],
		'cTS'=>
			[
				'D', 
				'Date!!',
				[
					'date_empty'=>'Set date',
					'date_exist'=>'Date already exists'
				], 
				'default'=>$today
			],
		'cType'=>
			[
				'S',
				'Type!!',
				[
					'type_empty'=>'Set type'
				],
				[0=>'- Select type -'] + $d_types
			],
		'cPerc'=>
			[
				'%',
				'Percent',
				['perc_wrong'=>'Set percent']
			]
	]
	values=$el
}

{include file='admin/footer.tpl'}
{/strip}
