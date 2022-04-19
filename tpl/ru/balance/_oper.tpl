{strip}

{include file='edit.tpl'
	fields=[
		'oID'=>[],
		'oState'=>
			[
				'X',
				'Статус:&nbsp&nbsp',
				0,
				"<b>{$op_statuses[$el.oState]}</b>"
			],
		'oCTS'=>
			[
				'X',
				'Дата:&nbsp&nbsp'
			],
		'uLogin'=>
			[
				'X',
				'Пользователь:&nbsp&nbsp',
				0,
				"<a href=\"{_link module='account/admin/user'}?id={$el.uID}\">{$el.uLogin}</a>",
				'skip'=>!$from_admin
			],
		'Login2'=>
			[
				'X',
				valueIf($el.oOper == 'TR', 'Получатель:&nbsp&nbsp', 'Отправитель:&nbsp&nbsp'),
				0,
				valueIf($from_admin, "<a href=\"{_link module='account/admin/user'}?id={$el.oParams.uid2}\">{$el.oParams.user}</a>", $el.oParams.user),
				'skip'=>!$el.oParams.uid2
			],
		'PSys'=>
			[
				'X',
				'Платежная система:&nbsp&nbsp',
				0,
				valueIf($from_admin, "<a href=\"{_link module='balance/admin/curr'}?id={$el.ocID}\">{$el.cName}</a>", $el.cName)
			],
		'PayTo'=>
			[
				'X',
				'Реквизиты для оплаты:&nbsp&nbsp',
				0,
				$smarty.get.payto,
				'skip'=>!$smarty.get.payto
			],
		'oSum'=>
			[
				'X',
				'Сумма:&nbsp&nbsp',
				0,
				_z($el.oSum, $el.ocID, 1)
			],
		'oComis'=>
			[
				'X',
				'Комиссия:&nbsp&nbsp',
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
				valueIf($el.oOper == 'EX', 'На плат. систему:&nbsp&nbsp', 'С плат. системы:&nbsp&nbsp'),
				0,
				$el.oParams.psys,
				'skip'=>!$el.oParams.cid2
			],
		'Sum2'=>
			[
				'X',
				'Сумма к получению:&nbsp&nbsp',
				0,
				_z($el.oParams.sum2, exValue($el.ocID, $el.oParams.cid2), 1),
				'skip'=>!$el.oParams.sum2
			],
		'Acc'=>
			[
				'X',
				valueIf($el.oOper == 'CASHOUT', 'Счет получателя:&nbsp&nbsp', 'Счет отправителя:&nbsp&nbsp'),
				0,
				$el.oParams2.acc,
				'skip'=>!in_array($el.oOper, array('CASHIN', 'CASHOUT')) or !$el.oParams2.acc
			],
		'oBatch'=>
			[
				'X',
				'Batch-номер:&nbsp&nbsp',
				'skip'=>!$el.oBatch
			],
		'oMemo'=>
			[
				'X',
				'Примечание:&nbsp&nbsp',
				'skip'=>!$el.oMemo,
				0,
				valueIf(!$from_admin and ($el.oMemo[0] == '~'), 'Ошибка', $el.oMemo)
			],
		'oTS'=>
			[
				'X',
				'Изменено:&nbsp&nbsp',
				'skip'=>!$el.oTS
			],
		'oNTS'=>
			[
				'X',
				'Отработано:&nbsp&nbsp',
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
		Для данной платежной системы не прописаны <a href="{_link module='balance/admin/curr'}?id={$el.ocID}">параметры API</a><br>
		Вы можете выполнить эту операцию, указав параметры выше.<br>
		Это безопасно, т.к. введенные данные нигде не сохраняются
	</p>
	
{/if}

{if $el.oOper == 'CASHIN'}

	{if !isset($smarty.get.payto)}
		{include file='balance/_pform.tpl' btn_text='Оплатить через мерчант'}
	{/if}

	{if $pvalues.acc}

		{if $el.oState <= 1}
		
			<br>
			<p class="info">
				{if $pform}В случае невозможности оплатить напрямую через сайт,<br>{/if}
				Вы можете совершить оплату по указанным реквизитам вручную,<br>
				а затем указать данные этого платежа в форме ниже
			</p>
			
		{/if}
		
		<h2>Наши платежные реквизиты<br>(для оплаты вручную через {$el.cName})</h2>
		
		<table class="formatTable">
		{foreach from=$pfields key=f item=v}
		{if $pvalues[$f]}
			<tr>
				<td align="right">
					{$v[0] = str_replace('*', ' <span class="descr_rem">(не обязательно)</span>', $v[0])}
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
