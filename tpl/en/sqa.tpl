{strip}

{include file='edit.tpl'
	form='sqa'
	fields=
	[
		'uID' => $uid,
		'SQuestion'=>
			[
				'X', 
				'',
				0,
				$squest
			],
		'SAnswer'=>
			[
				'T', 
				'Checking answer',
				[
					'answer_wrong'=>'Incorrect answer'
				],
				'size'=>40
			]
	]
	btn_text='Next'
}

{/strip}
