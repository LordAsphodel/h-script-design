{strip}
{include file='admin/header.tpl' title='Annoouncements'}

{include file='list.tpl' 
	title='Annoouncements'
	url='*'
	fields=[
		'nID'=>['ID'],
		'nTS'=>['Publication date'],
		'nAnnounce'=>['Notice'],
		'nDBegin'=>['Publicate since'],
		'nDEnd'=>['Untill'],
		'nAttn'=>['<small>Important</small>']
	]
	values=$list
	row='*'
	btns=['del'=>'Delete']
}

<a href="{_link module='news/admin/news'}?add" class="button-green">Add</a><br>

{include file='admin/footer.tpl'}
{/strip}
