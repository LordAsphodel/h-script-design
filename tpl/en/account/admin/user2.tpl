{strip}
{include file='admin/header.tpl' title='User'}

<h2>User '{$el.aName}'</h2>
<a href="{_link module='account/admin/user'}?id={$el.uID}" class="button-gray">Basic settings</a>
<br><br>

{$txt_login=valueIf($_cfg.Const_NoLogins, 'E-mail', 'Login')}
{include file='edit.tpl'
	fields=[
		'auID'=>[],
		'uLogin'=>
			[
				'X', 
				$txt_login
			],
		'C'=>
			[
				'X',
				'Registration',
				0,
				"{$el.aCTS} <small>(IP {$el.aCIP} {include file='_country.tpl' ip=$el.aCIP})</small>",
				'skip'=>!$el.aCTS
			],
		'aName'=>
			[
				'T',
				'Name!!',
				[
					'name_empty'=>'Set name'
				]
			],
		'aTZ'=>
			[
				'T',
				'Time zone!! <<relatively GMT>>',
				[
					'tz_wrong'=>'Incorrect zone [H:M]'
				],
				'comment'=>'+4:00 = Moscow',
				'size'=>6
			],
		'aBD'=>
			[
				'D',
				'Date of birth'
			],
		'aCountry'=>
			[
				'T',
				'Country'
			],
		'aCity'=>
			[
				'T',
				'City'
			],
		'aTel'=>
			[
				'T',
				'Phone number'
			],
		'aNoMail'=>
			[
				'C',
				'Do not recieve E-mail notifications',
				'skip'=>$_cfg.Msg_NoMail
			],
		50=>'Special refferal system',
		'aPerc'=>
			[
				'A', 
				'From recharge<br><<level by level value>>'
			],
		'aDPerc'=>
			[
				'A', 
				'From deposit<br><<level by level value>>'
			],
		'aPPerc'=>
			[
				'A', 
				'From accrual<br><<level by level value>>'
			],
		99=>'Security',
		'aGA'=>['T', 'Google Authenticator'],
		'aIPSec'=>
			[
				'S',
				'IP-address change check',
				0,
				[
					0=>'- default -', 
					1=>'x.0.0.0', 
					2=>'x.x.0.0', 
					3=>'x.x.x.0', 
					4=>'x.x.x.x'
				]
			],
		'aSessIP'=>['C', 'Bound session to IP-address'],
		'aSessUniq'=>['C', 'Forbid parallel sessions'],
		'aTimeOut'=>['I', 'Auto log out after N minutes <<0 - default>>'],
		'aSQuestion'=>
			[
				'T',
				'Checking answer!!',
				[
					'secq_empty'=>'Set question',
					'secq_short'=>"Question is too short [not less than {$_cfg.Sec_MinSQA} symbols]"
				],
				'skip'=>($_cfg.Sec_MinSQA == 0),
				'size'=>40
			],
		'aSAnswer'=>
			[
				'*',
				'Checking answer <<fill in to change>>',
				[
					'seca_empty'=>'Set answer',
					'seca_short'=>"Answer is too short [not less than {$_cfg.Sec_MinSQA} symbols]",
					'seqa_equal_secq'=>'Answer can not be equal to th equestion'
				],
				'skip'=>($_cfg.Sec_MinSQA == 0),
				'size'=>40
			]
	]
	values=$el
}

{if $wfields}

	<br>
	{$wfields = [
		'auID'=>[],
		'DefCurr'=>[
			'S',
			'Default payment system!!',
			[
				'psys_wrong'=>'Set payment system'
			],
			[0=>'- select one -'] + (array)$defcurr,
			'default'=>$el['aDefCurr']
		]
	]+$wfields}

	{include file='edit.tpl'
		form='wallets'
		title='Payment settings'
		fields=$wfields
		values=$wdata
	}
	
{/if}
	
{include file='admin/footer.tpl'}
{/strip}
