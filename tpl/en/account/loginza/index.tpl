{strip}
{include file='header.tpl' title='Profiles'}

<h1>Profiles</h1>

{if $logins}

	{include file='list.tpl' 
		title='Allocated'
		fields=[
			'Icon'=>[''],
			'url'=>['Account'],
			'Action'=>['']
		]
		values=$logins
		row='*'
	}
	
{/if}

<p class="info">
	You can allocate other your profiles.<br>
	This will help our site to recognize<br>
	that it is <strong>surely you</strong> but not several different users
</p>

<h2>Add profile</h2>
<script src="//loginza.ru/js/widget.js" type="text/javascript"></script>
<iframe src="//loginza.ru/api/widget?overlay=loginza&token_url={$loginza_url}" 
style="width: 400px; height: 180px;" scrolling="no" frameborder="no"></iframe>

{include file='footer.tpl'}
{/strip}
