{strip}
{include file='admin/header.tpl' title='Pages'}

{include file='list.tpl' 
	title='User-defined pages'
	url='*'
	fields=[
		'pID'=>['ID'],
		'pTopic'=>['name'],
		'pHidden'=>['Hidden'],
		'URL'=>['Link']
	]
	values=$list
	row='*'
	btns=['del'=>'Delete']
}

<a href="{_link module='custom/admin/page'}?add" class="button-green">Add</a><br>

{include file='admin/footer.tpl'}
{/strip}
