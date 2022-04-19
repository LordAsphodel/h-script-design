{strip}
{$states=[
	0=>'Не активен',
	1=>'Активен',
	2=>'Заблокирован',
	3=>'Отключен'
]}


<div class="box-info full animated fadeInDown">
  <h2 class="text-left"><i class="fa fa-group"></i> Мои рефералы</h2>

	<div id="transactions-table" class="collapse in">
        <div class="table-responsive p-b-20">

			<table class="table table-striped">
				<tr>
					<th>Пользователь</th>
					<th>Дата регистрации</th>
					<th>Вклады</th>
					<th>Рефские</th>
				</tr>
			{foreach from=$refs key=i item=r}
				{if count($refs) > 1}
					<tr>
						<td colspan="4" align="center">Уровень {$i + 1}{if $r.perc}: {$r.perc}%{/if}</td>
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
