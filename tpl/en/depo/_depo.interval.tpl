{strip}

{if $_cfg.Depo_Interval > 0}

	<p class="info">
		{if $nextdepoleft > 0}
			Time until deposit activation - <b>{$nextdepotime}</b><br>
			(nearly after {$nextdepoleft} minutes.)
		{else}
			You deposit will be activated <b>immediately</b>.
		{/if}
	</p>
	
{/if}

{/strip}
