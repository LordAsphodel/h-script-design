{strip}
{include file='headercabinet.tpl' title='Сообщение'}

<div class="page-heading animateed fadeInDown">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Сообщение</h1>
    </div>
    <div class="clear"></div>
</div>
<div class="box-info full animated fadeInDown">
	<div class="col-xs-12">

{if $el.mID}

	<div class="settings-nav clearfix">
		<a href="{_link module='message/show'}?new" class="active"><i class="fa fa-envelope"></i> Написать новое сообщение</a>
		<a href="/messages" class=""><i class="fa fa-level-down"></i> Входящие</a>
		<a href="/messages/outbox" class=""><i class="fa fa-level-up"></i> Исходящие</a>
	</div>
	<h2 class="text-left"><i class="fa fa-envelope"></i> Сообщение для ответа</h2>
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
					'Отправитель',
					'readonly'=>true
				],
			'mTopic'=>
				[
					'T', 
					'Тема',
					'readonly'=>true
				],
			'mText'=>
				[
					'W', 
					'Текст',
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
			<a class="btn btn-primary col-sm-12" href="{_link module='message/show'}?new&re={$el.bID}" class="button-green">Ответить</a><br>
		</div>
	</div>
	<br>
	<br>
	<br>
{/if}

{else}

	<div class="settings-nav clearfix">
		<a href="{_link module='message/show'}?new" class="active"><i class="fa fa-envelope"></i> Написать новое сообщение</a>
		<a href="/messages" class=""><i class="fa fa-level-down"></i> Входящие</a>
		<a href="/messages/outbox" class=""><i class="fa fa-level-up"></i> Исходящие</a>
	</div>
	<h2 class="text-left"><i class="fa fa-envelope"></i> Новое сообщение</h2>
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
						'Получатель!!', 
						[
							'to_empty'=>'укажите получателя',
							'to_wrong'=>'получатель не найдены'
						],
						size=>50,
						'readonly'=>true
					],
				'mTopic'=>
					[
						'L', 
						'Тема!!',
						[
							'topic_empty'=>'укажите тему'
						], 
						size=>50,
						'readonly'=>true
					],
				'mText'=>
					[
						'W', 
						'Текст!!', 
						[
							'text_empty'=>'укажите текст'
						], 
						'size'=>15
					]
			]
			values=$el
			btn_text=' '
			btns=['send'=>'Отправить']
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
						'Получатель!!', 
						[
							'to_empty'=>'укажите получателя',
							'to_wrong'=>'получатель не найдены'
						],
						$users
					],
				'mTopic'=>
					[
						'L', 
						'Тема!!',
						[
							'topic_empty'=>'укажите тему'
						], 
						size=>50
					],
				'mText'=>
					[
						'W', 
						'Текст!!', 
						[
							'text_empty'=>'укажите текст'
						], 
						'size'=>15
					]
			]
			values=$el
			btn_text=' '
			btns=['send'=>'Отправить']
		}

	{/if}
	
{/if}

		<br><br>
	</div>
</div>

{include file='footercabinet.tpl'}
{/strip}
