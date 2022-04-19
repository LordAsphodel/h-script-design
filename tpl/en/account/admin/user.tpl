{strip}
{include file='admin/header.tpl' title='User'}

{include file='account/admin/_statuses.tpl'}

{if $el}
	<h2>Пользователь '{$el.aName}'</h2>
	<a href="{_link module='account/admin/user2'}?id={$el.uID}" class="button-gray">Additional settings</a>
	<br><br>
{else}
	<h2>New user</h2>
{/if}

{$txt_login=valueIf($_cfg.Const_NoLogins, 'e-mail', 'login')}
{include file='edit.tpl'
	fields=[
		'uID'=>[],
		'uGroup'=>
			[
				'T', 
				'Group!!',
				'skip'=>!$el
				
			],
		'uLogin'=>
			[
				'T', 
				'Login!!',
				[
					'login_empty'=>'Set login',
					'login_short'=>"Login too short [not less than $MinLogin symbols]",
					'login_wrong'=>'Login can not contain spaces',
					'login_used'=>'Login is used'
				],
				'skip'=>($_cfg.Const_NoLogins)
			],
		'uMail'=>
			[
				'T',
				'E-mail!!',
				[
					'mail_empty'=>'Set e-mail',
					'mail_wrong'=>'Incorrect e-mail',
					'mail_used'=>'E-mail is used'
				]
			],
		'uPass'=>
			[
				'*',
				valueIf(!$el, 'Password!!', 'Password'),
				[
					'pass_empty'=>'Set password',
					'pass_short'=>"Password too short [not less than $MinPass symbols]",
					'pass_wrong'=>'Password does not match format'
				]
			],
		'uPIN'=>
			[
				'*',
				valueIf(!$el, 'PIN-code!!', 'PIN-code'),
				[
					'pin_empty'=>'Set PIN-code',
					'pin_short'=>"PIN-code too short [not less than $MinPass symbols]",
					'pin_wrong'=>'PIN-code does not match format'
				],
				'skip'=>($_cfg.Sec_MinPIN == 0) or !$el
			],
		'uState'=>
			[
				'S',
				'State',
				0,
				$usr_statuses,
				'skip'=>!$el
			],
		'uBTS'=>
			[
				'DT', 
				'Baned until',
				[
					'bdate_empty'=>'Set date'
				],
				'skip'=>!$el
			],
		'uLevel'=>
			[
				'I', 
				'Access level',
				[
					'lvl_wrong'=>'Incorrect value'
				],
				'size'=>3,
				'skip'=>!$el
			],
		'uRef'=>
			[
				'T',
				"Who invited{if $_cfg.Account_RegMode == 2}!!{/if}",
				[
					'ref_empty'=>"Set $txt_login",
					'ref_not_found'=>"$txt_login is not found",
					'ref_is_self'=>'Incorrect value'
				],
				'skip'=>(($_cfg.Account_RegMode == 3) or !$_cfg.Ref_Word or !$el)
			],
		'uBal'=>
			[
				'X',
				'Balance <<all payment systems sum>>',
				0,
				_z($el.uBal, 1),
				'skip'=>!$el
			],
		'Bal'=>
			[
				'U',
				'balance/bal.tpl',
				'skip'=>!$el
			],
		'uLang'=>
			[
				'S',
				'Language',
				0,
				$langs,
				'skip'=>!$el
			],
		'uMode'=>
			[
				'T',
				'Mode',
				'size'=>8,
				'skip'=>!$el
			],
		'uTheme'=>
			[
				'T',
				'Theme',
				'size'=>8,
				'skip'=>!$el
			],
		'Act'=>
			[
				'X',
				'Last activity',
				0,
				"{$el.uLTS} <small>(IP {$el.uLIP} {include file='_country.tpl' ip=$el.uLIP})</small>",
				'skip'=>!$el.uLTS
			]
	]
	values=$el
}

{if $el}
	<br>
	<a href="{_link module='balance/admin/opers'}?user={$el.uLogin}" class="button-green">All user's operations</a>&nbsp;
	<a href="{_link module='message/admin/message'}?add&to={$el.uLogin}" class="button-green">Send a message to the user</a>&nbsp;
	<a href="{_link module='account/admin/user'}?id={$el.uID}&login" class="button-green">Log in as the user</a><br>
{/if}
{include file='admin/footer.tpl'}
{/strip}
