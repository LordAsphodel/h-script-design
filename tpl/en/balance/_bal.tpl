{strip}
{if $curr1}
	<h3>Your balance is {_z($curr1.wBal, $curr1.cID, 2)}</h3>
{elseif $user.uBal > 0}
	{include file='balance/bal.tpl'}
{else}
	<h3>Your balance <b>is empty</b></h3>
{/if}
{/strip}
