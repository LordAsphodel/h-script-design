{strip}
{if $curr1}
	<h3> На Вашем счете {_z($curr1.wBal, $curr1.cID, 2)} </h3>
{elseif $user.uBal > 0}
	{include file='balance/bal.tpl'}
{else}
	<h3> На Вашем счете <b>нет средств</b> </h3>
{/if}
{/strip}
