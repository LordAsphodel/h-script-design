{strip}
{include file='header.tpl' title='Last investors'}

<h1>Last investors</h1>

{$imgs=[
	1=>'lr_small.png',
	2=>'pm_small.png'
]}

{if $list}
	<table class="FormatTable" border="1">
		<tr>
			<th>User</th>
			<th>Sum</th>
			<th>Batch</th>
		</tr>
		{foreach from=$list key=i item=r}
			{if $r.oSum > 0}
				<tr>
					<td>{include file='_usericon.tpl' user=$r} {$r.uLogin}</td>
					<td align="right"><img src="images/{$imgs[$r.ocID]}"> {_z($r.oSum, $r.ocID)}</td>
					<td>{$r.oBatch}</td>
				</tr>
			{/if}
		{/foreach}
	</table>
{/if}
<br>

{include file='footer.tpl'}
{/strip}
