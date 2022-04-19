{strip}
{include file='admin/header.tpl' title='IP Table'}

	<h2> IP statistics <br> and  number of logins and registrations</h2>
	<small><< just one of IPs is not shown>></small>

	{include file='list.tpl'

	url='*'
	fields=[
		'ip'=>['IP'],
		'auth'=>['auth'],
    	'reg'=>['reg'],
    	'sum'=>['sum']
	]
	values=$list
	row='*'

}



{include file='admin/footer.tpl'}
{/strip}
