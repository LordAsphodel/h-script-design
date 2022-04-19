{strip}
{include file='headercabinet.tpl' title='Message'}

<div class="page-heading animateed fadeInDown">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Message</h1>
    </div>
    <div class="clear"></div>
</div>
<div class="box-info full animated fadeInDown">
	<div class="col-xs-12">

{if $el.mID}

	<div class="settings-nav clearfix">
		<a href="{_link module='message/show'}?new" class="active"><i class="fa fa-envelope"></i> Write new message</a>
		<a href="/messages" class=""><i class="fa fa-level-down"></i> Incoming</a>
		<a href="/messages/outbox" class=""><i class="fa fa-level-up"></i> Outgoing</a>
	</div>
	<h2 class="text-left"><i class="fa fa-envelope"></i> Reply message</h2>
	<div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div>

	{include file='medit.tpl'
		form_class='form-horizontal'
			row_wrap='settings-form-group form-group'
			label_class='col-sm-3 control-label'
			input_class='form-control'
			input_wrap='col-sm-6'
		fields=[
			'uLogin'=>
				[
					'T',
					'Sender',
					'readonly'=>true
				],
			'mTopic'=>
				[
					'T', 
					'Topic',
					'readonly'=>true
				],
			'mText'=>
				[
					'W', 
					'Text',
					'size'=>15,
					'readonly'=>true
				]
		]
		values=$el
		btn_text=' '
	}

{if $_cfg.Msg_Mode > 1}
	<div class="settings-form-group form-group">
		<div class="col-sm-6 col-sm-offset-3">
			<a class="btn btn-primary col-sm-12" href="{_link module='message/show'}?new&re={$el.bID}" class="button-green">Reply</a><br>
		</div>
	</div>
	<br>
	<br>
	<br>
{/if}

{else}

	<div class="settings-nav clearfix">
		<a href="{_link module='message/show'}?new" class="active"><i class="fa fa-envelope"></i> Write new message</a>
		<a href="/messages" class=""><i class="fa fa-level-down"></i> Incoming</a>
		<a href="/messages/outbox" class=""><i class="fa fa-level-up"></i> Outgoing</a>
	</div>
	<h2 class="text-left"><i class="fa fa-envelope"></i> New message</h2>
	<div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div>

	{if $el.mTo}

		{include file='medit.tpl'
			form_class='form-horizontal'
			row_wrap='settings-form-group form-group'
			label_class='col-sm-3 control-label'
			input_class='form-control'
			input_wrap='col-sm-6'
			btn_class='btn btn-primary col-sm-12'
			btn_wrapp='col-sm-6 col-sm-offset-3'
			fields=[
				'Re'=>[],
				'mTo'=>
					[
						'T', 
						'Recipient!!', 
						[
							'to_empty'=>'Set recipient',
							'to_wrong'=>'Recipient is not found'
						],
						size=>50,
						'readonly'=>true
					],
				'mTopic'=>
					[
						'L', 
						'Topic!!',
						[
							'topic_empty'=>'Set topic'
						], 
						size=>50,
						'readonly'=>true
					],
				'mText'=>
					[
						'W', 
						'Text!!', 
						[
							'text_empty'=>'Set text'
						], 
						'size'=>15
					]
			]
			values=$el
			btn_text=' '
			btns=['send'=>'Send']
		}

	{else}

		{include file='medit.tpl'
			form_class='form-horizontal'
			row_wrap='settings-form-group form-group'
			label_class='col-sm-3 control-label'
			input_class='form-control'
			input_wrap='col-sm-6'
			btn_class='btn btn-primary col-sm-12'
			btn_wrapp='col-sm-6 col-sm-offset-3'
			fields=[
				'Re'=>[],
				'mTo'=>
					[
						'S', 
						'Recipient!!', 
						[
							'to_empty'=>'Set recipient',
							'to_wrong'=>'Recipient is not found'
						],
						$users
					],
				'mTopic'=>
					[
						'L', 
						'Topic!!',
						[
							'topic_empty'=>'Set topic'
						], 
						size=>50
					],
				'mText'=>
					[
						'W', 
						'Text!!', 
						[
							'text_empty'=>'Set topic'
						], 
						'size'=>15
					]
			]
			values=$el
			btn_text=' '
			btns=['send'=>'Send']
		}

	{/if}
	
{/if}

		<br><br>
	</div>
</div>

{include file='footercabinet.tpl'}
{/strip}
