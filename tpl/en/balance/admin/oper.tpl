{strip}
{include file='admin/header.tpl' title='Operation'}

{include file='balance/_statuses.tpl'}

{if $el}

	<h2>{$op_names[$el['oOper']]}</h2>
	{$b = []}
	{if $el.oState <= 2}
		{$b['cancel'] = 'Cancel'}
	{/if}
	{if $el.oState >= 4}
		{$b['del'] = 'Delete'}
	{/if}
	{include file='balance/_oper.tpl' bt=valueIf($el.oState <= 2, 'Complete', ' ') b=$b
		errors=[
			'oper_not_found'=>'Incorrect operation status',
			'oper_disabled'=>'Operatoin disabled',
			'low_bal1'=>'Insufficient funds',
			'data_date_wrong'=>'Incorrect operation date',
			'data_sum_wrong'=>'Incorrect sum',
			'data_batch_wrong'=>'Operation batch-number is not set',
			'batch_exists'=>'Operation with such a batch-number already exists',
			'send_error'=>'Fund transfer error'
		]
		from_admin=true
	}
	
{else}

	{if $smarty.get.add}
	
		{$oper = $smarty.get.add}
		{$use_sum2 = in_array($oper, array('CASHIN', 'CASHOUT', 'EX', 'TR', 'SELL'))}
		{include file='edit.tpl'
			form='add'
			title=$op_names[$oper]
			fields=[
				'Oper'=>$oper,
				'Login'=>$smarty.get.user,
				'User'=>
					[
						'X',
						'User',
						0,
						$smarty.get.user
					],
				'Bal'=>
					[
						'U',
						'balance/bal.tpl'
					],
				'PSys'=>
					[
						'S', 
						valueIf($oper == 'CALCIN', 'Payment system!! or Deposite!!', 'Payment system!!'),
						[
							'depo_wrong'=>'Incorrect deposit',
							'psys_empty'=>'Payment system is not set'
						],
						valueIf(count((array)$clist) > 1, [0=>'- select -'], []) + (array)$clist
					],
				'Sum'=>
					[
						'$',
						valueIf($_cfg.Const_IntCurr and in_array($oper, array('CASHOUT')), 'Sum!! <<internal currency units>>', 'Sum!!'),
						[
							'sum_wrong'=>'Incorrect sum'
						],
						'comment'=>' <i><span id="ccurr"></span></i>'
					],
				'Comis'=>
					[
						'X',
						'Comission',
						'comment'=>' <i><span id="csum"></span></i>',
						'skip'=>!$use_sum2
					],
				'PSys2'=>
					[
						'S', 
						valueIf($oper == 'EX', 'To payment system!!', 'From payment system!!'),
						[
							'psys2_empty'=>'Payment system is not set',
							'psys2_equal_psys'=>'Payment systems must differ'
						],
						valueIf(count((array)$clist) > 1, [0=>'- select -'], []) + (array)$clist,
						'skip'=>($oper != 'EX')
					],
				'Sum2'=>
					[
						'X',
						valueIf($oper == 'CASHIN', 'Sum to recharge', 'Sum to recieve'),
						'comment'=>' <i><span id="sum2"></span></i>',
						'skip'=>!$use_sum2
					],
				'Login2'=>
					[
						'T',
						valueIf($oper == 'TR', 'Recipient!!', 'Sender!!'),
						[
							'user2_empty'=>'User is no found',
							'user2_equal_user'=>'Users must differ from each other'
						],
						'skip'=>!in_array($oper, array('TR', 'TRIN'))
					],
				'Memo'=>
					[
						'W',
						'Description',
						'size'=>4
					]
			]
			errors=[
				'oper_disabled'=>'Operation is disabled'
			]
		}

		{include file='balance/_oper.js.tpl' oper=$oper use_sum2=$use_sum2}
	
	{else}
	
		{include file='edit.tpl'
			form='add'
			title='New operation'
			fields=[
				'Oper'=>
					[
						'S',
						'Operation!!',
						[
							'oper_empty'=>'Operation is empty',
							'oper_wrong'=>'Unknown operation'
						],
						[0=>'- select -'] + (array)$op_names
					],
				'Login'=>
					[
						'T',
						'User!!',
						[
							'user_empty'=>'User is not found'
						],
						'default'=>$smarty.get.user
					]
			]
			btn_text='Next'
		}
		
	{/if}
	
{/if}

{include file='admin/footer.tpl'}
{/strip}
