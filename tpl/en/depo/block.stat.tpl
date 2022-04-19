{strip}

Working for {$stat.worked} days<br>
Total members {$stat.users}<br>
Users online {$stat.usersonline}<br>
Funds recieved ${$stat.zin|string_format:"%.2f"}<br>
Funds paid ${$stat.zout|string_format:"%.2f"}<br>
including refferal bonuses ${$stat.zref|string_format:"%.2f"}<br>
Reinvested ${$stat.zreinv|string_format:"%.2f"}<br>
Active deposits {$stat.deps}<br>
deposits finished {$stat.depsclosed}<br>
{if $stat.lastuser}
	New user ({$stat.lastuser.uLogin})<br>
{/if}
{if $stat.lastinop}
	New deposit ${$stat.lastinop.oSum|string_format:"%.2f"} ({$stat.lastinop.uLogin})<br>
{*	New deposit {_z($stat.lastinop.oSum, $stat.lastinop.ocID, 2)} ({$stat.lastinop.uLogin})<br>*}
{/if}
{if $stat.lastoutop}
	Last payout ${$stat.lastoutop.oSum|string_format:"%.2f"} ({$stat.lastoutop.uLogin})<br>
{/if}

{/strip}
