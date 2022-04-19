{strip}

{include file='edit.tpl'
	fields=[
		'oID'=>[],
		'oState'=>
			[
				'X',
				'State:&nbsp&nbsp',
				0,
				"<b>{$op_statuses[$el.oState]}</b>"
			],
		'oCTS'=>
			[
				'X',
				'Date:&nbsp&nbsp'
			],
		'uLogin'=>
			[
				'X',
				'User:&nbsp&nbsp',
				0,
				"<a href=\"{_link module='account/admin/user'}?id={$el.uID}\">{$el.uLogin}</a>",
				'skip'=>!$from_admin
			],
		'Login2'=>
			[
				'X',
				valueIf($el.oOper == 'TR', 'Recipient:&nbsp&nbsp', 'Sender:&nbsp&nbsp'),
				0,
				valueIf($from_admin, "<a href=\"{_link module='account/admin/user'}?id={$el.oParams.uid2}\">{$el.oParams.user}</a>", $el.oParams.user),
				'skip'=>!$el.oParams.uid2
			],
		'PSys'=>
			[
				'X',
				'Payment system:&nbsp&nbsp',
				0,
				valueIf($from_admin, "<a href=\"{_link module='balance/admin/curr'}?id={$el.ocID}\">{$el.cName}</a>", $el.cName)
			],
		'PayTo'=>
			[
				'X',
				'payment details:&nbsp&nbsp',
				0,
				$smarty.get.payto,
				'skip'=>!$smarty.get.payto
			],
		'oSum'=>
			[
				'X',
				'Sum:&nbsp&nbsp',
				0,
				_z($el.oSum, $el.ocID, 1)
			],
		'oComis'=>
			[
				'X',
				'Comission:&nbsp&nbsp',
				0,
				_z($el.oComis, $el.ocID, 1),
				'skip'=>($el.oComis == 0)
			],
		'Sum'=>
			[
				'X',
				$op_sums[$el.oOper],
				0,
				_z($el.oSum - $el.oComis, $el.ocID, 1),
				'skip'=>($el.oComis == 0)
			],
		'PSys2'=>
			[
				'X',
				valueIf($el.oOper == 'EX', 'To payment system:&nbsp&nbsp', 'From payment system:&nbsp&nbsp'),
				0,
				$el.oParams.psys,
				'skip'=>!$el.oParams.cid2
			],
		'Sum2'=>
			[
				'X',
				'Amount to receive:&nbsp&nbsp',
				0,
				_z($el.oParams.sum2, exValue($el.ocID, $el.oParams.cid2), 1),
				'skip'=>!$el.oParams.sum2
			],
		'Acc'=>
			[
				'X',
				valueIf($el.oOper == 'CASHOUT', 'Recipient account:&nbsp&nbsp', 'Sender account:&nbsp&nbsp'),
				0,
				$el.oParams2.acc,
				'skip'=>!in_array($el.oOper, array('CASHIN', 'CASHOUT')) or !$el.oParams2.acc
			],
		'oBatch'=>
			[
				'X',
				'Batch-number:&nbsp&nbsp',
				'skip'=>!$el.oBatch
			],
		'oMemo'=>
			[
				'X',
				'Comment:&nbsp&nbsp',
				'skip'=>!$el.oMemo,
				0,
				valueIf(!$from_admin and ($el.oMemo[0] == '~'), 'Error', $el.oMemo)
			],
		'oTS'=>
			[
				'X',
				'Edited:&nbsp&nbsp',
				'skip'=>!$el.oTS
			],
		'oNTS'=>
			[
				'X',
				'Complete:&nbsp&nbsp',
				'skip'=>!$el.oNTS
			]
	] + (array)$afields
	values=$el
	btn_text=$bt
	btns=$b
}

{if $afields}

	<br>
	<p class="info">
		Current payment system does not have <a href="{_link module='balance/admin/curr'}?id={$el.ocID}"> API settings</a> set<br>
		You can complete this operation specifying settings above.<br>
		It is safe as specified data is not saved anywhere.
	</p>
	
{/if}

{if $el.oOper == 'CASHIN'}

	{if !isset($smarty.get.payto)}
		{include file='balance/_pform.tpl' btn_text='Pay using merchant'}
	{/if}

	{if $pvalues.acc}

		{if $el.oState <= 1}
		
			<br>
			<p class="info">
				{if $pform}In the case of impossibility to pay using site,<br>{/if}
				you can pay using specified payment data manually <br>
				and then enter this payment details in the form below
			</p>
			
		{/if}
		
		<h2>Our payment data<br>(to pay manually using {$el.cName})</h2>
		
		<table class="formatTable">
		{foreach from=$pfields key=f item=v}
		{if $pvalues[$f]}
			<tr>
				<td align="right">
					{$v[0] = str_replace('*', ' <span class="descr_rem">(not necessarily)</span>', $v[0])}
					{if $f === 'acc'}
						Счет получателя <span class="descr_rem">({$v[0]})</span>
					{else}
						{$v[0]}
					{/if}
				</td>
				<td>
					<span class="uline">{$pvalues[$f]}</span>
				</td>
			</tr>
		{/if}
		{/foreach}
			<tr>
				<td align="right">
					Сумма
				</td>
				<td>
					<span class="uline">{_z($el.oSum, $el.ocID, 1)}</span>
				</td>
			</tr>
		</table>
		
	{/if}
	
	{if isset($pvalues.acc) or ($from_admin and ($el.oState <= 2))}
	
		{include file='balance/_oper.data.tpl' oComis=0}
		
	{/if}
	
{elseif ($el.oOper == 'CASHOUT') and ($from_admin and ($el.oState <= 2))}

	{include file='balance/_oper.data.tpl' oComis=$el.oComis}

{/if}
	
{/strip}
