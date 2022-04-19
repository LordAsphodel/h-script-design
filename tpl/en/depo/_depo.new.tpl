{strip}

{include file='edit.tpl'
	form='new'
	title_new=valueIf($from_admin, 'New deposit')
	fields=[
		'Login'=>$smarty.get.user,
		'User'=>
			[
				'X',
				'User',
				0,
				$smarty.get.user,
				'skip'=>!$from_admin
			],
		'Bal'=>
			[
				'U',
				'balance/bal.tpl',
				'skip'=>!$from_admin and $_cfg.Const_IntCurr
			],
		'PSys'=>valueIf(!$from_admin and $_cfg.Const_IntCurr, 1,
			[
				'S', 
				'Payment system!!',
				[
					'psys_empty'=>'Set payment system',
					'psys_wrong'=>'Incorrect payment system'
				],
				valueIf(count((array)$clist) > 1, [0=>'- select -'], []) + (array)$clist
			]),
		'Sum'=>
			[
				'$',
				'Sum!!',
				[
					'sum_empty'=>'Enter sum',
					'sum_wrong'=>'Incorrect sum'
				],
				'comment'=>' <i><span id="ccurr"></span></i>'
			],
		'Plan'=>
			[
				'S', 
				'Plan',
				[
					'plan_wrong'=>'Wrong plan'
				],
				[0=>'- auto -'] + (array)$plans,
				'skip'=>(count($plans) <= 1)
			],
		'Compnd'=>
			[
				'%',
				'Reinvestment rate <<capitalization>>',
				[
					'compnd_wrong'=>"Incorrect value [$cmin..$cmax]",
					'compnd_wrong1'=>"Incorrect plan value '$cplan'"
				],
				'skip'=>!$pcmax
			]
	]
	values=$el
	errors=[
		'oper_disabled'=>'operation is forbidden',
		'low_bal1'=>'Insufficient funds'
	]
}
	
<script type="text/javascript">
	function updateCurr()
	{
		$('#ccurr').html('');
		$.ajax(
			{
				type: 'POST',
				url: 'ajax',
				data: 'module=balance&do=getcurr'+
					'&cid='+$('#new_PSys').val(),
				success: 
					function(ex)
					{
						$('#ccurr').html(ex);
					}
			}
		);
	}
	$('#new_PSys').change(updateCurr);
	updateCurr();
</script>

{/strip}
