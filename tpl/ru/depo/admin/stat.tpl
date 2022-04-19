{strip}
{include file='admin/header.tpl' title='Статистика'}

<h2>Информация</h2>

Пользователей всего: {$users.all}, в т.ч. активных: {$users.active}, в т.ч. со вкладами: {$users.wdepo}<br>
Депозитов всего: {$deps.all}, в т.ч. активных: {$deps.active}<br>
<br>

<table class="FormatTable" border="1">
	<tr>
		<th></th>
		<th colspan="11">Операции</th>
		<th rowspan="2"><small>Активные депозиты</small></th>
		<th colspan="3">Балансы</th>
	</tr>
	<tr>
		<th>Плат.&nbsp;система</th>
		<th><small>Бонус</small></th>
		<th><small>Штраф</small></th>
		<th><small>Пополнение</small></th>
		<th><small>Рефские</small></th>
		<th><small>Вклад</small></th>
		<th><small>в т.ч. с баланса</small></th>
		<th><small>Снятие</small></th>
		<th><small>Начисление</small></th>
		<th><small>Списание</small></th>
		<th><small>Ожидает вывода</small></th>
		<th><small>Вывод</small></th>
		<th><small>Доступно</small></th>
		<th><small>Занято</small></th>
		<th><small>Ожидает</small></th>
	</tr>
{foreach $currs as $cid => $c}
	<tr>
		<td align="right">{$c.cName}&nbsp;<i><small>{$c.cCurr}</small></i></td>
		<td align="right">{_z($stat[$cid].BONUS, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].PENALTY, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].CASHIN, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].REF, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].GIVE, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].GIVE2, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].TAKE, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].CALCIN, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].CALCOUT, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].CASHOUT2, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].CASHOUT, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].DEPO, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].BAL, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].LOCK, $cid, -1)}</td>
		<td align="right">{_z($stat[$cid].OUT, $cid, -1)}</td>
	</tr>
{/foreach}
<tr>
	<td align="right"><b>ИТОГО:</b></td>
	<td align="right"><b>{_z($stat[0].BONUS, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].PENALTY, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].CASHIN, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].REF, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].GIVE, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].GIVE2, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].TAKE, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].CALCIN, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].CALCOUT, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].CASHOUT2, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].CASHOUT, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].DEPO, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].BAL, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].LOCK, 1, -1)}</b></td>
	<td align="right"><b>{_z($stat[0].OUT, 1, -1)}</b></td>
</tr>
</table>
<br>

{include file='edit.tpl'
	title='Параметры отбора'
	fields=[
		'PSys'=>
			[
				'S',
				'Платежная система',
				0,
				[0=>'- все -'] + (array)$clist
			],
		'D1'=>
			[
				'DT',
				'Дата с',
				'default'=>$today
			],
		'D2'=>
			[
				'DT',
				'Дата по'
			]
	]
	btn_text='Показать'
}

{if $res}

	<br>
	<table class="FormatTable" border="1">
		<tr>
			<td>Регистрации</td>
			<td align="right">{$res.REG}</td>
		</tr>
		<tr>
			<td>Бонус</td>
			<td align="right">{_z($res.BONUS, 1)}</td>
		</tr>
		<tr>
			<td>Штраф</td>
			<td align="right">{_z($res.PENALTY, 1)}</td>
		</tr>
		<tr>
			<td>Пополнение</td>
			<td align="right">{_z($res.CASHIN, 1)}</td>
		</tr>
		<tr>
			<td>Рефские</td>
			<td align="right">{_z($res.REF, 1)}</td>
		</tr>
		<tr>
			<td>Вклад</td>
			<td align="right">{_z($res.GIVE, 1)}</td>
		</tr>
		<tr>
			<td>Снятие</td>
			<td align="right">{_z($res.TAKE, 1)}</td>
		</tr>
		<tr>
			<td>Начисление</td>
			<td align="right">{_z($res.CALCIN, 1)}</td>
		</tr>
		<tr>
			<td>Списание</td>
			<td align="right">{_z($res.CALCOUT, 1)}</td>
		</tr>
		<tr>
			<td>Вывод</td>
			<td align="right">{_z($res.CASHOUT, 1)}</td>
		</tr>
		<tr>
			<td>Сделано депозитов</td>
			<td align="right">{_z($res.DEPO, 1)}</td>
		</tr>
		<tr>
			<td>из них активных сейчас</td>
			<td align="right">{_z($res.DEPO2, 1)}</td>
		</tr>
		<tr>
			<td>Заработок системы</td>
			<td align="right">{_z($res.CASHIN - $res.CASHOUT, 1)}</td>
		</tr>
	</table>

{/if}

{include file='admin/footer.tpl'}
{/strip}