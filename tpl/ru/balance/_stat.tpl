{strip}

<div class="box-info full animated fadeInDown">
  <h2 class="text-left"><i class="fa fa-history"></i> Информация по балансу</h2>

	<div id="transactions-table" class="collapse in">
        <div class="table-responsive p-b-20">
            <table class="table table-striped">
                <thead>
                	<tr>
  						      <th>Плат. система</th>
              			<th>Рефские</th>
              			<th>Введено</th>
        						<th>На депозитах</th>
        						<th>Начислено</th>
        						<th>Выведено</th>
        					</tr>
                </thead>
                <tbody id="transactions-table-body">
                {if $stats}
                	{foreach from=$stats key=i item=c}
					<tr>
						<td>{$c.cName} <i><small>{$c.cCurr}</small></i></td>
						<td>{_z($c.ZREF, $c.cID, -1)}</td>
						<td>{_z($c.ZIN, $c.cID, -1)}</td>
						<td>{_z($c.ZINDEPO, $c.cID, -1)}</td>
						<td>{_z($c.ZCALCIN, $c.cID, -1)}</td>
						<td>{_z($c.ZOUT, $c.cID, -1)}</td>
					</tr>
					{/foreach}
				{else}
                  <tr>
                  	<td colspan="4">Список транзакций пуст</td>
                  </tr>
                 {/if}            	
                </tbody>
        	</table>
            
    	</div>
	</div>
</div>

{/strip}