{strip}
{include file='admin/header.tpl' title='Page'}

{include file='edit.tpl'
	title='Page'
	title_new='New page'
	fields=[
		'pID'=>[],
		'pHidden'=>
			[
				'C',
				'Hidden'
			],
		'pDirect'=>
			[
				'C',
				'Show only this code <<without "header" and "footer">>'
			],
		'pTopic'=>
			[
				'L', 
				'Topic!!',
				[
					'topic_empty'=>'Set topic'
				], 
				size=>50
			],
		'pText'=>
			[
				'Y', 
				'Content!!', 
				[
					'text_empty'=>'Set content'
				], 
				'size'=>15
			]
	]
	values=$el
}

{include file='admin/footer.tpl'}
{/strip}
