{strip}
{include file='header.tpl' title='Confirmation'}

<h1>Operation confirmation</h1>

{if isset($smarty.get.done)}

	<h2>Operation is complete!</h2>

{else}

	{if isset($smarty.get.need_confirm_sms)}

		<h2>Operation is NOT complete!</h2>
		<p class="info">
			In order to complete operation you must enter confirmation code<br>
			that was sent to your phone number.
		</p>
	
	{/if}

	{include file='edit.tpl' 
		url="{_link module='confirm'}"
		fields=
		[
			'Code'=>
				[
					'T', 
					'Enter code!!',
					[
						'code_empty'=>'Enter code',
						'code_not_found'=>'Incorrect code',
						'code_used'=>'Code is expired',
						'code_expired'=>'Code activation period is expired',
						'dif_ip'=>'Confirmation using your IP-address is impossible',
						'oper_wrong'=>'Incorrect operation',
						'oper_unkn'=>'Unknown operation'
					],
					'size'=>40,
					'default'=>$smarty.get.code
				]	
		]
		captcha=$_cfg.Confirm_Captcha
		btn_text='Complete'
	}

{/if}

{/strip}
