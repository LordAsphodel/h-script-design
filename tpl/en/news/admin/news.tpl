{strip}
{include file='admin/header.tpl' title='Announcement'}

{include file='edit.tpl'
	title='Announcement'
	title_new='New announcement'
	fields=[
		'nID'=>[],
		'nTS'=>
			[
				'DT', 
				'Publication date!!',
				[
					'date_empty'=>'Set date'
				], 
				'default'=>$today
			],
		'nTopic'=>
			[
				'L', 
				'Topic!!',
				[
					'topic_empty'=>'Set topic'
				], 
				size=>50
			],
		'nAttn'=>
			[
				'CC', 
				'Important'
			],
		'nAnnounce'=>
			[
				'W',
				'Notice!!',
				[
					'ann_empty'=>'Set notice'
				], 
				'size'=>5
			],
		'nText'=>
			[
				'Y', 
				'Full text!!', 
				[
					'text_empty'=>'Set announcement text'
				], 
				'size'=>15
			],
		'nDBegin'=>
			[
				'D', 
				'Show since'
			],
		'nDEnd'=>
			[
				'D', 
				'Until'
			]
	]
	values=$el
}

{include file='admin/footer.tpl'}
{/strip}
