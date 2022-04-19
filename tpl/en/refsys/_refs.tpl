{strip}
{$states=[
	0=>'Not active',
	1=>'Active',
	2=>'Banned',
	3=>'Blocked'
]}


<div class="box-info full animated fadeInDown">
  <h2 class="text-left"><i class="fa fa-group"></i> Your referrals</h2>

	<div id="transactions-table" class="collapse in">
        <div class="table-responsive p-b-20">

			<table class="table table-striped">
				<tr>
					<th>User</th>
					<th>Registration date</th>
					<th>Deposits</th>
					<th>Referral bonus</th>
				</tr>
			{foreach from=$refs key=i item=r}
				{if count($refs) > 1}
					<tr>
						<td colspan="4" align="center">Level {$i + 1}{if $r.perc}: {$r.perc}%{/if}</td>
					</tr>
				{/if}
				{foreach from=$r.users key=j item=u}
					<tr>
						<td>{include file='_usericon.tpl' user=$u} {$u.uLogin}</td>
						<td>{$u.aCTS}</td>
						<td>{_z($u.ZDepo, 1)}</td>
						<td>{_z($u.ZRef, 1)}</td>
					</tr>
				{/foreach}
			{/foreach}
			</table>
		</div>
	</div>
</div>

{/strip}
