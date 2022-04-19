{strip}
{include file='admin/header.tpl' title='Confirmation'}

{include file='edit.tpl' 
	values=$cfg
	fields=[
		'Captcha'=>['S', '"Captcha" protection', 0, [0=>'нет', 1=>'авто', 2=>'всегда']]
	]
}
	
{include file='admin/footer.tpl'}
{/strip}
