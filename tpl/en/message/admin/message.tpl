{strip}
{include file='admin/header.tpl' title='Message'}

{if $el.mID}

	{include file='edit.tpl'
		title='Message'
		fields=[
			'uLogin'=>
				[
					'T',
					'Sender',
					'skip'=>!$el.uLogin,
					'readonly'=>true
				],
			'mMail'=>
				[
					'T',
					'Sender E-mail',
					'skip'=>!$el.mMail,
					'readonly'=>true
				],
			'To1'=>
				[
					'T',
					'Recipient',
					'default'=>$el.mTo,
					'skip'=>($el.mToCnt != 1),
					'readonly'=>true
				],
			'mTo'=>
				[
					'A', 
					'Recipients<br><<* - to all>>', 
					'size'=>30,
					'skip'=>($el.mToCnt == 1),
					'readonly'=>true
				],
			'mAttn'=>
				[
					'CC', 
					'Important',
					'readonly'=>true
				],
			'mTopic'=>
				[
					'L', 
					'Topic',
					'size'=>50,
					'readonly'=>true
				],
			'mText'=>
				[
					'W', 
					'Text', 
					'size'=>15,
					'readonly'=>true
				]
		]
		values=$el
		btn_text=' '
	}

	{if $el.mToCnt == 1}
		<a href="{_link module='message/admin/message'}?add&re={$el.mID}" class="button-green">Reply</a><br>
	{/if}
	
{else}

	{include file='edit.tpl'
		title='New message'
		fields=[
			'Re'=>[],
			'uLogin'=>
				[
					'T',
					'Sender',
					[
						'user_not_found'=>'User is not found'
					],
					'default'=>valueIf(!$el.mMail, exValue($user.uLogin, $smarty.get.from))
				],
			'mMail'=>
				[
					'T',
					'Sender E-mail',
					[
						'mail_wrong'=>'Incorrect E-mail'
					]
				],
			'mTo'=>
				[
					'A',
					'Recipients!!<br><<One line is equal to one recipient<br>To send via E-mail set prefix "mailto:">>', 
					[
						'to_empty'=>'Set recipients',
						'to_wrong'=>"Recipients are not found: [$wrusrs]"
					], 
					'size'=>30,
					'default'=>$smarty.get.to,
					'comment'=>$el.mLang
				],
			'mAttn'=>
				[
					'CC', 
					'Important'
				],
			'Feed'=>
				[
					'CC', 
					'Mailing List'
				],
			'mTopic'=>
				[
					'L', 
					'Topic!!',
					[
						'topic_empty'=>'Set topic'
					], 
					'size'=>50
				],
			'mText'=>
				[
					'Y', 
					'Text!!', 
					[
						'text_empty'=>'Set text'
					], 
					'size'=>15
				]
		]
		values=$el
		btn_text=' '
		btns=['send'=>'Send']
	}

{/if}

{include file='admin/footer.tpl'}
{/strip}
