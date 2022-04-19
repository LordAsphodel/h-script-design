{strip}
<td>
	{$l.uID}
</td>
<td>
	{$l.uGroup}
</td>
<td>
	<a href="{_link module='account/admin/user'}?id={$l.uID}">{$l.uLogin}</a>
</td>
<td>
	<a href="{_link module='account/admin/user2'}?id={$l.uID}">{$l.aName}</a>
</td>
<td>
	<a href="{_link module='account/admin/user'}?id={$l.uID}">{$l.uMail}</a>
</td>
<td>
	{$usr_statuses[$l.uState]}
</td>
<td>
	{$l.uLevel}
</td>
<td>
	<a href="{_link module='account/admin/user'}?id={$l.uRef}">{$l.RefLogin}</a>
</td>
<td align="right">
	{_z($l.uBal, 1, -1)}
</td>
{/strip}