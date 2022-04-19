{strip}
{include file='admin/header.tpl' title='Statistics'}

<h2>Information</h2>

Total users: {$users.all}, including active: {$users.active}, including users with deposits: {$users.wdepo}<br>
Total deposits: {$deps.all}, including active: {$deps.active}<br>
<br>

<table class="FormatTable" border="1">
	<tr>
		<th></th>
		<th colspan="11">Operations</th>
		<th rowspan="2"><small>Active deposits</small></th>
		<th colspan="3">Balances</th>
	</tr>
	<tr>
		<th>Payment&nbsp;system</th>
		<th><small>Bonus</small></th>
		<th><small>Penalty</small></th>
		<th><small>Recharge</small></th>
		<th><small>Refferal bonus</small></th>
		<th><small>Deposit</small></th>
		<th><small>including from balance</small></th>
		<th><small>Withdrawal</small></th>
		<th><small>Accrual</small></th>
		<th><small>Retirement</small></th>
		<th><small>Waitng for withdrawal</small></th>
		<th><small>Withdrawal</small></th>
		<th><small>Available</small></th>
		<th><small>Held</small></th>
		<th><small>Awaiting</small></th>
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
	title='Filter settings'
	fields=[
		'PSys'=>
			[
				'S',
				'Payment system',
				0,
				[0=>'- all -'] + (array)$clist
			],
		'D1'=>
			[
				'DT',
				'From date',
				'default'=>$today
			],
		'D2'=>
			[
				'DT',
				'Till date'
			]
	]
	btn_text='Filter'
}

{if $res}

	<br>
	<table class="FormatTable" border="1">
		<tr>
			<td>Registrations</td>
			<td align="right">{$res.REG}</td>
		</tr>
		<tr>
			<td>Bonus</td>
			<td align="right">{_z($res.BONUS, 1)}</td>
		</tr>
		<tr>
			<td>Penalty</td>
			<td align="right">{_z($res.PENALTY, 1)}</td>
		</tr>
		<tr>
			<td>Recharges</td>
			<td align="right">{_z($res.CASHIN, 1)}</td>
		</tr>
		<tr>
			<td>Refferal bonus</td>
			<td align="right">{_z($res.REF, 1)}</td>
		</tr>
		<tr>
			<td>Deposit</td>
			<td align="right">{_z($res.GIVE, 1)}</td>
		</tr>
		<tr>
			<td>Withdrawal</td>
			<td align="right">{_z($res.TAKE, 1)}</td>
		</tr>
		<tr>
			<td>Accrual</td>
			<td align="right">{_z($res.CALCIN, 1)}</td>
		</tr>
		<tr>
			<td>Retirement</td>
			<td align="right">{_z($res.CALCOUT, 1)}</td>
		</tr>
		<tr>
			<td>Withdrawal</td>
			<td align="right">{_z($res.CASHOUT, 1)}</td>
		</tr>
		<tr>
			<td>Deposits made</td>
			<td align="right">{_z($res.DEPO, 1)}</td>
		</tr>
		<tr>
			<td>including active</td>
			<td align="right">{_z($res.DEPO2, 1)}</td>
		</tr>
		<tr>
			<td>System profit</td>
			<td align="right">{_z($res.CASHIN - $res.CASHOUT, 1)}</td>
		</tr>
	</table>

{/if}

{include file='admin/footer.tpl'}
{/strip}
