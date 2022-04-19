{strip}
{include file='headercabinet.tpl' title='Операция'}

{include file='balance/_statuses.tpl'}

{if $el}

	<h1>{$op_names[$el.oOper]}</h1>
	{if isset($smarty.get.check)}
	
		<p class="info">
			Ожидание подтверждения оплаты...
		</p>
	
	{else}
	
		{if ($el.oState <= 1)}
		
			{$opc = (($el.oOper != 'CASHIN') or $dfields)}
			{if $opc}
				<p class="info">
					Операция НЕ подтверждена Вами!
				</p>
			{/if}
		
		{elseif $el.oState == 2}
		
			<p class="info">
				Операция будет обработана Администратором в ближайшее время
			</p>
		
		{/if}
		
		{$b = []}
		{if $el.oState <= 2}
			{$b['cancel'] = 'Отменить'}
		{/if}
		{if $el.oState >= 5}
			{$b['del'] = 'Удалить'}
		{/if}
		{include file='balance/_oper.tpl' bt=valueIf($opc, 'Подтвердить', ' ') b=$b
			errors=[
				'oper_not_found'=>'неверный статус операции',
				'oper_disabled'=>'операция отключена',
				'low_bal1'=>'недостаточно средств',
				'data_date_wrong'=>'неверная дата операции',
				'data_sum_wrong'=>'неверная сумма',
				'data_batch_wrong'=>'не задан batch-номер операции',
				'batch_exists'=>'операция с таким batch-номером уже существует'
			]
		}
	
	{/if}
	
{else}

	{$oper = $smarty.get.add}
	{if $oper == 'CASHIN'}

<div class="page-heading animateed fadeInDown">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Пополнить баланс</h1>
    </div>
    <div class="clear"></div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="box-info full animated fadeInDown">
			<h2 class="text-left"><i class="fa fa-info"></i> Пополнить баланс</h2>

			<div id="cab-payment-info" class="col-md-12 dep_ col-lg-12 col-sm-12 col-xs-12 collapse in">
				<h3 class="box-title">ВЫБЕРИТЕ ПЛАТЁЖНУЮ СИСТЕМУ</h3>
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
								<input type="text" name="Sum" id="start-refill-amount" class="input-lg form-control" placeholder="Введите сумму"/>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-b-10">
							<input type="hidden" name="action" value="start_refill">
							<button type="submit" name="add_btn" id="start-refill-button" class="btn btn-primary btn-lg pull-left waves-effect waves-light col-lg-12 col-sm-12 col-xs-12">Пополнить</button>
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
				'PSys'=>['S', 'С платежной системы!!', ['psys_empty'=>'плат.система не указана'], valueIf(count((array)$clist) > 1, [0=>'- выберите -'], []) + (array)$clist, 'default'=>$user.aDefCurr],
				'Sum'=>['$', 'Сумма!!', ['sum_wrong'=>'неверная сумма'], 'comment'=>' <i><span id="ccurr"></span></i>'],
				'Comis'=>['X', 'Комиссия', 'comment'=>' <i><span id="csum"></span></i>'],
				'Sum2'=>['X', 'Ваш баланс будет пополнен на сумму', 'comment'=>' <i><span id="sum2"></span></i>'],
				'Plan'=>['S', 'План', ['plan_wrong'=>'неверный план'], [0=>'- авто -'] + (array)$plans, 'skip'=>(count($plans) <= 1)],
				'Compnd'=>['%',	'Процент реинвеста <<капитализация>>', ['compnd_wrong'=>"неверное значение [$cmin..$cmax]", 'compnd_wrong1'=>"неверное значение для плана '$cplan'"], 'skip'=>!$pcmax]
			]
			errors=[
				'oper_disabled'=>'операция отключена'
			]
		}
		{*}
	
	{elseif $oper == 'CASHOUT'}

<div class="page-heading animateed fadeInDown">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Вывод средств</h1>
    </div>
    <div class="clear"></div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="box-info full animated fadeInDown">
			<h2 class="text-left"><i class="fa fa-money"></i> Вывод средств</h2>

			<div id="cab-payment-info" class="col-md-12 dep_ col-lg-12 col-sm-12 col-xs-12 collapse in">
				<h3 class="box-title">ВЫБЕРИТЕ ПЛАТЁЖНУЮ СИСТЕМУ</h3>
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
								<input type="text" name="Sum" id="start-refill-amount" class="input-lg form-control" placeholder="Введите сумму"/>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-b-10">
							<input type="hidden" name="action" value="start_refill">
							<button type="submit" name="add_btn" id="start-refill-button" class="btn btn-primary btn-lg pull-left waves-effect waves-light col-lg-12 col-sm-12 col-xs-12">Вывести</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	
		{*}
		{$s = valueIf($_cfg.Const_IntCurr, 'Сумма!! <<в единицах внутренней валюты>>', 'Сумма!!')}
		{include file='edit.tpl'
			form='add'
			fields=[
				'Oper'=>$oper,
				'PSys'=>['S', 'На платежную систему!!', ['psys_empty'=>'плат.система не указана'], valueIf(count((array)$clist) > 1, [0=>'- выберите -'], []) + (array)$clist, 'default'=>$user.aDefCurr],
				'Sum'=>['$', $s, ['sum_wrong'=>'неверная сумма', 'limit_exceeded'=>'превышен лимит'], 'comment'=>valueIf($_cfg.Const_IntCurr, " <b>{$icurr}</b>", ' <i><span id="ccurr"></span></i>')],
				'Comis'=>['X', 'Комиссия', 'comment'=>' <i><span id="csum"></span></i>'],
				'Sum2'=>['X', 'На Ваш счет будет выведена сумма', 'comment'=>' <i><span id="sum2"></span></i>'],
				'PIN'=>
					[
						'*',
						'Введите PIN-код!!',
						[
							'pin_wrong'=>'неверный код'
						],
						'skip'=>!$_cfg.Bal_NeedPIN,
						'size'=>8
					]
			]
			errors=[
				'low_bal1'=>'недостаточно средств',
				'oper_disabled'=>'операция отключена'
			]
		}
		{*}

	{elseif $oper == 'EX'}
	
		<h1>Обмен валют</h1>
		{include file='edit.tpl'
			form='add'
			fields=[
				'Oper'=>$oper,
				'PSys'=>['S', 'С платежной системы!!', ['psys_empty'=>'плат.система не указана'], valueIf(count((array)$clist) > 1, [0=>'- выберите -'], []) + (array)$clist],
				'Sum'=>['$', 'Сумма!!', ['sum_wrong'=>'неверная сумма'], 'comment'=>' <i><span id="ccurr"></span></i>'],
				'Comis'=>['X', 'Комиссия', 'comment'=>' <i><span id="csum"></span></i>'],
				'PSys2'=>['S', 'На платежную систему!!', ['psys2_empty'=>'плат.система не указана', 'psys2_equal_psys'=>'плат.системы должны различаться', 'ex_rate_not_set'=>'Курс валюты не задан'], valueIf(count((array)$clist2) > 1, [0=>'- выберите -'], []) + (array)$clist2],
				'Sum2'=>['X', 'Сумма к получению', 'comment'=>' <i><span id="sum2"></span></i>']
			]
			errors=[
				'low_bal1'=>'недостаточно средств',
				'oper_disabled'=>'операция отключена'
			]
		}
	
	{elseif $oper == 'TR'}

		<h1>Перевод средств</h1>
		{include file='edit.tpl'
			form='add'
			fields=[
				'Oper'=>$oper,
				'PSys'=>valueIf($_cfg.Const_IntCurr, 
					1, 
					['S', 'Платежная система!!', ['psys_empty'=>'плат.система не указана'], valueIf(count((array)$clist) > 1, [0=>'- выберите -'], []) + (array)$clist]
				),
				'Sum'=>['$', 'Сумма!!', ['sum_wrong'=>'неверная сумма'], 'comment'=>' <i><span id="ccurr"></span></i>'],
				'Comis'=>['X', 'Комиссия', 'comment'=>' <i><span id="csum"></span></i>'],
				'Sum2'=>['X', 'Получателю будет переведена сумма', 'comment'=>' <i><span id="sum2"></span></i>'],
				'Login2'=>['T', 'Получатель!!', ['user2_empty'=>'пользователь не найден', 'user2_equal_user'=>'пользователи должны различаться']],
				'Memo'=>['W', 'Примечание', 'size'=>4]
			]
			errors=[
				'low_bal1'=>'недостаточно средств',
				'oper_disabled'=>'операция отключена'
			]
		}
	
	{/if}

	{include file='balance/_oper.js.tpl' oper=$oper use_sum2=true}
	
{/if}

{include file='footercabinet.tpl'}
{/strip}