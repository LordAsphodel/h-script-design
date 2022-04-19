{strip}
{if count($pl_params.Pages) > 0}
	<div class="paginator">
		<small>&nbsp&nbsp&nbsp&nbsp&nbspPage {$pl_params.Page} of {$pl_params.PagesCount}</small>
		{if count($pl_params.Pages) > 0}&nbsp;&nbsp;&nbsp;{/if}
		{foreach from=$pl_params.Pages key=i item=pn}
			<a href="{$_selfLink}?page={$pn[1]}{$linkparams}" class="{if $pn[1] == $pl_params.Page}pgactive{else}pgbutton{/if}">
				{if $pn[0] == '&lt;&lt;'}
					The first
				{elseif $pn[0] == '&lt;'}
					Backward
				{elseif $pn[0] == '&gt;'}
					Forward
				{elseif $pn[0] == '&gt;&gt;'}
					The last
				{else}
					{$pn[0]}
				{/if}
			</a>&nbsp
		{/foreach}
	</div>
{/if}
{/strip}
