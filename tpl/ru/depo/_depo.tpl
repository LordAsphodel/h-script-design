{strip}

{include file='depo/_statuses.tpl'}

{$chg=(($el.dState == 1) and ($el.pCompndMax > 0) and ($el.pCompndMin < $el.pCompndMax))}
{$modbuttons=[] scope='global'}
{if $chg}
	{$modbuttons['chg']='Сменить процент реинвеста' scope='global'}
{/if}

{$add=$el.pEnAdd}
{$sub=(($el.pClComis < 100) and ($el.dNPer >= $el.pMPer))}
{$modform=[] scope='global'}
{if ($el.dState == 1) and ($add or $sub)}
	{$modform=[
		1=>'',
		'Sum'=>
			[
				'$',
				'Сумма изменения!!',
				[
					'sum_empty'=>'укажите сумму',
					'sum_wrong'=>'неверная сумма',
					'low_bal1'=>'недостаточно средств',
					'cant_add'=>'невозможно довложить',
					'cant_sub'=>'невозможно снять',
					'plan_not_found'=>'нет подходящего плана'
				],
				'comment'=>" <i><small>{$el.cCurr}</small></i>",
				'default'=>0
			]
	] scope='global'}
	{if $add}
		{$modbuttons['add']='Довложить' scope='global'} 
	{/if}
	{if $sub}
		{$modbuttons['sub']='Снять' scope='global'}
	{/if}
{/if}

{include file='medit.tpl'
	title=valueIf($from_admin, 'Депозит')
	form_class='form-horizontal'
	row_wrap='form-group'
	label_class='col-sm-6 control-label'
	input_class='form-control'
	input_wrap='col-sm-6'
	fields=[
		'dID'=>[],
		'duID'=>[],
		'dcID'=>[],
		'dState'=>
			[
				'X', 
				'Статус',
				0,
				"<b>{$ststrs[$el.dState]}</b>"
			],
		'dCTS'=>
			[
				'X',
				'Создано'
			],
		'uLogin'=>
			[
				'X',
				'Пользователь',
				'skip'=>!$from_admin
			],
		'Bal'=>
			[
				'U',
				'balance/bal.tpl',
				'skip'=>!$from_admin
			],
		'cName'=>
			[
				'X', 
				'Плат. система'
			],
		'dZD'=>
			[
				'X',
				'Сумма',
				0,
				_z($el.dZD, $el.dcID, 1)
			],
		'pName'=>
			[
				'X', 
				'План',
				0,
				valueIf($from_admin, "<a href=\"{_link module='depo/admin/plan'}?id={$el.dpID}\" target=\"_blank\">{$el.pName}</a>")
			],
		'dN'=>
			[
				'X', 
				'Начислений',
				0,
				"{$el.dNPer} из {$el.pNPer}"
			],
		'dLTS'=>
			[
				'X', 
				'Последнее начисление'
			],
		'dNTS'=>
			[
				'X', 
				'Следующее начисление'
			],
		'dCompnd'=>
			[
				'X',
				'Процент реинвеста <<капитализация>>',
				'skip'=>$chg
			],
		'Compnd'=>
			[
				'%',
				'Процент реинвеста <<капитализация>>',
				[
					'compnd_wrong'=>"неверное значение [$cmin..$cmax]"
				],
				'default'=>$el.dCompnd,
				'skip'=>!$chg
			],
		'dM'=>
			[
				'X', 
				'Досрочное снятие',
				0,
				valueIf($el.pClComis >= 100, 'Невозможно',
					valueIf($el.dNPer >= $el.pMPer, "Возможно", 
						"Осталось начислений: {$el.pMPer - $el.dNPer}")
				),
				'skip'=>($el.dState > 1)
			]
	]+$modform
	values=$el
	errors=[
		'oper_disabled'=>'операция запрещена'
	]
	btn_text=' '
	btns=$modbuttons
}
*Реинвест доступен только по субботам в соответствии с <a href="/rules">правилами</a> проекта.

{/strip}
