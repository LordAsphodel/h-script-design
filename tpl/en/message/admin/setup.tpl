{strip}
{include file='admin/header.tpl' title='Settings'}

{include file='edit.tpl'
	values=$cfg
	fields=[
		'Mode'=>['S', 'Mode', '', [0=>'Only support', 1=>'Support and incoming', 2=>'All']],
		'NoMail'=>['C', 'Do not send notifications to E-mail'],
		'ShowCount'=>['I', 'Messages per page'],
		1=>'Support',
		'Captcha'=>['S', '"Captcha" protection', 0, [0=>'нет', 1=>'авто', 2=>'всегда']],
		'_Cats'=>['A', 'Messages type<br><<one line equal one type>>', 'size'=>20]
	]
}

{include file='admin/footer.tpl'}
{/strip}
