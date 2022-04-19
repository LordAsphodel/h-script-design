{strip}
{include file='headercabinet.tpl' title='Password change'}

<div class="page-heading animateed fadeInDown">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Password change</h1>
    </div>
    <div class="clear"></div>
</div>

<div class="box-info full animated fadeInDown">
  <div class="settings-content clearfix">
  	<div class="col-xs-12">
  	<h2><i class="fa fa-lock"></i>Password change</h2>
  	<div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div>


{if $user.uPTS == 1}

	<p class="info">
		You have been given temporary password.<br>
		Reset it to more complex one.
	</p>

{elseif isset($smarty.get.need_change)}

	<p class="info">
		It has been long since you last changed your password.<br>
		Security settings require the password to be changed.
	</p>

{/if}

{include file='medit.tpl'
	url='*'
	form_class='form-horizontal'
	row_wrap='settings-form-group form-group'
	label_class='col-sm-3 control-label'
	input_class='form-control'
	input_wrap='col-sm-6'
	btn_class='btn btn-primary col-sm-12'
	btn_wrapp='col-sm-6 col-sm-offset-3'
	fields=
	[
		'Pass0'=>
			[
				'*',
				'Old password!!',
				[
					'pass0_wrong'=>'Incorrect password'
				]
			],
		'Pass'=>
			[
				'*',
				'New password!!',
				[
					'pass_empty'=>'Set password',
					'pass_short'=>"Password is too short [not less than $MinPass symbols]",
					'pass_wrong'=>'Password does not match format'
				]
			],
		'Pass2'=>
			[
				'*',
				'Repeat new password!!',
				[
					'pass_not_equal'=>'Passwords do not match'
				]
			],
		'PIN'=>
			[
				'*',
				'Enter PIN-code!! <<to confirm the change>>',
				[
					'pin_wrong'=>'Incorrect code'
				],
				'skip'=>($_cfg.Sec_MinPIN == 0),
				'size'=>8
			]
	]
	btn_text='Change'
	btns=valueIf(isset($smarty.get.need_change), ['skip'=>'Do not change'])
}

		</div>
	</div>
</div>

{include file='footercabinet.tpl'}
{/strip}
