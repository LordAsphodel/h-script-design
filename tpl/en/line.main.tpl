{strip}
<div class="_menuPanel">
{$smenu=[
	100=>['#', ' '],
	['#', ' '],
	['#', ' '],
	['#', ' ']
]}
{if _uid()}
	{include file='menu.tpl' 
		class='mainMenu' 
		elements=[
			['#', ' '],
			['#', ' '],
			['#', ' '],
			['#', ' '],
			['#', ' '],
			['#', ' '],
			['#', ' ']
		]+$smenu
	}
{else}
	{include file='menu.tpl' 
		class='mainMenu' 
		elements=[
		]+$smenu
	}
{/if}
</div>
<br>
{/strip}
