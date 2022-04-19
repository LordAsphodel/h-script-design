{strip}
<td>
	{$l.dID}
</td>
<td class="nowrap">
	<small>{$l.dCTS}</small>
</td>
<td>
	{$l.cName}
</td>
<td align="nowrap">
	{_z($l.dZD, $l.dcID, -1)}
</td>
<td>
	<a href="{_link module='depo/depo'}?id={$l.dID}">{$l.pName}</a>
</td>
<td class="nowrap">
	<small>{$l.dLTS}</small>
</td>
<td>
	{$l.dNPer} of {$l.pNPer}
</td>
<td align="nowrap">
	{_z($l.dZP, $l.dcID, -1)}
</td>
<td class="nowrap">
	<small>{$l.dNTS}</small>
</td>
<td>
	<a href="{_link module='depo/depo'}?id={$l.dID}">{$ststrs[$l.dState]}</a>
</td>
{/strip}
