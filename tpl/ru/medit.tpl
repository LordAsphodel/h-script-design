{strip}

{include file='medit.begin.tpl'}

{if $fields_wrap}
	<div class="{$fields_wrap}">
		{include file='medit.block.tpl'}
	</div>
{else}

	{include file='medit.block.tpl'}

{/if}

{include file='medit.end.tpl'}

{/strip}