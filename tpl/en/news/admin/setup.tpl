{strip}
{include file='admin/header.tpl' title='Settings'}

{include file='edit.tpl'
	values=$cfg
	fields=[
		'ShowCount'=>['I', 'News per page'],
		'InBlock'=>['I', 'News per block']
	]
}

{include file='admin/footer.tpl'}
{/strip}
