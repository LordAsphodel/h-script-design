{strip}
{include file='headercabinet.tpl' title='Operation'}

{include file='balance/_statuses.tpl'}

{if $el}

	<h1>{$op_names[$el.oOper]}</h1>
	{if isset($smarty.get.check)}
	
		<p class="info">
			Witing for payment confirmation...
		</p>
	
	{else}
	
		{if ($el.oState <= 1)}
		
			{$opc = (($el.oOper != 'CASHIN') or $dfields)}
			{if $opc}
				<p class="info">
					Operation is NOT confirmed by you!
				</p>
			{/if}
		
		{elseif $el.oState == 2}
		
			<p class="info">
				Operation will be processed by administration soon.
			</p>
		
		{/if}
		
		{$b = []}
		{if $el.oState <= 2}
			{$b['cancel'] = 'Cancel'}
		{/if}
		{if $el.oState >= 5}
			{$b['del'] = 'Delete'}
		{/if}
		{include file='balance/_oper.tpl' bt=valueIf($opc, 'Confirm', ' ') b=$b
			errors=[
				'oper_not_found'=>'Incorrect operation state',
				'oper_disabled'=>'Operation is disabled',
				'low_bal1'=>'Insufficient funds',
				'data_date_wrong'=>'Incorrect operation date',
				'data_sum_wrong'=>'Incorrect sum',
				'data_batch_wrong'=>'Operation batch-number is incorrect',
				'batch_exists'=>'Operation with such a batch-number already exists'
			]
		}
	
	{/if}
	
{else}

	{$oper = $smarty.get.add}
	{if $oper == 'CASHIN'}

<div class="page-heading animateed fadeInDown">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Recharge balance</h1>
    </div>
    <div class="clear"></div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="box-info full animated fadeInDown">
			<h2 class="text-left"><i class="fa fa-info"></i> Recharge balance</h2>

			<div id="cab-payment-info" class="col-md-12 dep_ col-lg-12 col-sm-12 col-xs-12 collapse in">
				<h3 class="box-title">SELECT PAYMENT SYSTEM</h3>
				<form method="post" name="add">
					<input name="Oper" id="add_Oper" value="CASHIN" type="hidden">
					<div class="row" id="pay_list" name="pay_system">

						{foreach from=$currs item=p}

						{if $p.cHidden == 1}{continue}{/if}
						
						<div class="col-lg-4 col-sm-4 col-xs-12 waves-effect waves-light">
							<div class="panel panel-pay">
								<div class="panel-heading">
									<div class="radio radio-info">
										<input type="radio" name="PSys" id="{$p.cID}" value="{$p.cID}" checked="">
										<label for="{$p.cID}"><img class="img-responsive" src="assets/img/{$p.cName}.png"></label>
									</div>
								</div>
							</div>
						</div>

						{/foreach}

					</div>

					<div id="cash" class="row">
						<div class="col-lg-8 col-sm-8 col-sm-8 col-xs-12 p-b-10">
							<div class="input-group bootstrap-touchspin">
								<span id="reinvest-currency" class="input-group-addon bootstrap-touchspin-prefix">$</span>
								<input type="text" name="Sum" id="start-refill-amount" class="input-lg form-control" placeholder="Enter sum"/>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-b-10">
							<input type="hidden" name="action" value="start_refill">
							<button type="submit" name="add_btn" id="start-refill-button" class="btn btn-primary btn-lg pull-left waves-effect waves-light col-lg-12 col-sm-12 col-xs-12">Recharge</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>	

		{*}
		{if $_cfg.Depo_AutoDepo}
			{include file='depo/_depo.interval.tpl'}
		{/if}
		{include file='edit.tpl'
			form='add'
			fields=[
				'Oper'=>$oper,
				'PSys'=>['S', 'From payment system!!', ['psys_empty'=>'Payment system is not set'], valueIf(count((array)$clist) > 1, [0=>'- select -'], []) + (array)$clist, 'default'=>$user.aDefCurr],
				'Sum'=>['$', 'sum!!', ['sum_wrong'=>'Incorrect sum'], 'comment'=>' <i><span id="ccurr"></span></i>'],
				'Comis'=>['X', 'Comission', 'comment'=>' <i><span id="csum"></span></i>'],
				'Sum2'=>['X', 'Your balance is recharged for', 'comment'=>' <i><span id="sum2"></span></i>'],
				'Plan'=>['S', 'План', ['plan_wrong'=>'Incorrect plan'], [0=>'- авто -'] + (array)$plans, 'skip'=>(count($plans) <= 1)],
				'Compnd'=>['%',	'Reinvestment rate <<capitalization>>', ['compnd_wrong'=>"Incorrect value [$cmin..$cmax]", 'compnd_wrong1'=>"Plan does not support such sums '$cplan'"], 'skip'=>!$pcmax]
			]
			errors=[
				'oper_disabled'=>'Operation is disabled'
			]
		}
		{*}
	
	{elseif $oper == 'CASHOUT'}

<div class="page-heading animateed fadeInDown">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Funds withdrawal</h1>
    </div>
    <div class="clear"></div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="box-info full animated fadeInDown">
			<h2 class="text-left"><i class="fa fa-money"></i> Funds withdrawal</h2>

			<div id="cab-payment-info" class="col-md-12 dep_ col-lg-12 col-sm-12 col-xs-12 collapse in">
				<h3 class="box-title">SELECT PAYMENT SYSTEM</h3>
				<form method="post" name="add">
					<input name="Oper" id="add_Oper" value="CASHOUT" type="hidden">
					<div class="row" id="pay_list" name="pay_system">

						{foreach from=$currs item=p}

						{if $p.cHidden == 1}{continue}{/if}
						
						<div class="col-lg-4 col-sm-4 col-xs-12 waves-effect waves-light">
							<div class="panel panel-pay">
								<div class="panel-heading">
									<div class="radio radio-info">
										<input type="radio" name="PSys" id="{$p.cID}" value="{$p.cID}" checked="">
										<label for="{$p.cID}"><img class="img-responsive" src="assets/img/{$p.cName}.png"></label>
									</div>
								</div>
							</div>
						</div>

						{/foreach}

					</div>

					<div id="cash" class="row">
						<div class="col-lg-8 col-sm-8 col-sm-8 col-xs-12 p-b-10">
							<div class="input-group bootstrap-touchspin">
								<span id="reinvest-currency" class="input-group-addon bootstrap-touchspin-prefix">$</span>
								<input type="text" name="Sum" id="start-refill-amount" class="input-lg form-control" placeholder="Enter sum"/>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-b-10">
							<input type="hidden" name="action" value="start_refill">
							<button type="submit" name="add_btn" id="start-refill-button" class="btn btn-primary btn-lg pull-left waves-effect waves-light col-lg-12 col-sm-12 col-xs-12">Withdraw</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	
		{*}
		{$s = valueIf($_cfg.Const_IntCurr, 'Sum!! <<internal currency units>>', 'Sum!!')}
		{include file='edit.tpl'
			form='add'
			fields=[
				'Oper'=>$oper,
				'PSys'=>['S', 'To payment system!!', ['psys_empty'=>'Payment system is not set'], valueIf(count((array)$clist) > 1, [0=>'- select -'], []) + (array)$clist, 'default'=>$user.aDefCurr],
				'Sum'=>['$', $s, ['sum_wrong'=>'Incorrect sum', 'limit_exceeded'=>'Limit is exceeded'], 'comment'=>valueIf($_cfg.Const_IntCurr, " <b>{$icurr}</b>", ' <i><span id="ccurr"></span></i>')],
				'Comis'=>['X', 'Comission', 'comment'=>' <i><span id="csum"></span></i>'],
				'Sum2'=>['X', 'Your account will be charged', 'comment'=>' <i><span id="sum2"></span></i>'],
				'PIN'=>
					[
						'*',
						'Enter PIN-code!!',
						[
							'pin_wrong'=>'Incorrect code'
						],
						'skip'=>!$_cfg.Bal_NeedPIN,
						'size'=>8
					]
			]
			errors=[
				'low_bal1'=>'Insufficient funds',
				'oper_disabled'=>'Operation is disabled'
			]
		}
		{*}

	{elseif $oper == 'EX'}
	
		<h1>Currency exchange</h1>
		{include file='edit.tpl'
			form='add'
			fields=[
				'Oper'=>$oper,
				'PSys'=>['S', 'From payment system!!', ['psys_empty'=>'Payment system is not set'], valueIf(count((array)$clist) > 1, [0=>'- select -'], []) + (array)$clist],
				'Sum'=>['$', 'Sum!!', ['sum_wrong'=>'incorrect sum'], 'comment'=>' <i><span id="ccurr"></span></i>'],
				'Comis'=>['X', 'Comission', 'comment'=>' <i><span id="csum"></span></i>'],
				'PSys2'=>['S', 'To payment system!!', ['psys2_empty'=>'Payment system is not set', 'psys2_equal_psys'=>'payment systems must differ', 'ex_rate_not_set'=>'Exchange rate is not set'], valueIf(count((array)$clist2) > 1, [0=>'- select -'], []) + (array)$clist2],
				'Sum2'=>['X', 'Sum to recieve', 'comment'=>' <i><span id="sum2"></span></i>']
			]
			errors=[
				'low_bal1'=>'Insufficient funds',
				'oper_disabled'=>'Operation is disabled'
			]
		}
	
	{elseif $oper == 'TR'}

		<h1>Funds transfer</h1>
		{include file='edit.tpl'
			form='add'
			fields=[
				'Oper'=>$oper,
				'PSys'=>valueIf($_cfg.Const_IntCurr, 
					1, 
					['S', 'Payment system!!', ['psys_empty'=>'payment system is not set'], valueIf(count((array)$clist) > 1, [0=>'- select -'], []) + (array)$clist]
				),
				'Sum'=>['$', 'Sum!!', ['sum_wrong'=>'Incorrect sum'], 'comment'=>' <i><span id="ccurr"></span></i>'],
				'Comis'=>['X', 'Comission', 'comment'=>' <i><span id="csum"></span></i>'],
				'Sum2'=>['X', 'Recipient will get', 'comment'=>' <i><span id="sum2"></span></i>'],
				'Login2'=>['T', 'Recipient!!', ['user2_empty'=>'user is not found', 'user2_equal_user'=>'Users must be different']],
				'Memo'=>['W', 'Comments', 'size'=>4]
			]
			errors=[
				'low_bal1'=>'Insufficient funds',
				'oper_disabled'=>'Operation is disabled'
			]
		}
	
	{/if}

	{include file='balance/_oper.js.tpl' oper=$oper use_sum2=true}
	
{/if}

{include file='footercabinet.tpl'}
{/strip}
