{strip}
{include file='headercabinet.tpl' title='Смена пароля'}

<div class="page-heading animateed fadeInDown">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Смена пароля</h1>
    </div>
    <div class="clear"></div>
</div>

<div class="box-info full animated fadeInDown">
  <div class="settings-content clearfix">
  	<div class="col-xs-12">
  	<h2><i class="fa fa-lock"></i> Смена пароля</h2>
  	<div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div>


{if $user.uPTS == 1}

	<p class="info">
		Вам был выдан временный пароль.<br>
		Смените его на более сложный
	</p>

{elseif isset($smarty.get.need_change)}

	<p class="info">
		Вы давно не меняли пароль.<br>
		Политика безопасности нашего сайта требует сменить его
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
				'Старый пароль!!',
				[
					'pass0_wrong'=>'неверный пароль'
				]
			],
		'Pass'=>
			[
				'*',
				'Новый пароль!!',
				[
					'pass_empty'=>'укажите пароль',
					'pass_short'=>"пароль слишком короткий [не менее $MinPass]",
					'pass_wrong'=>'пароль не соответствует формату'
				]
			],
		'Pass2'=>
			[
				'*',
				'Повторите новый пароль!!',
				[
					'pass_not_equal'=>'пароли не совпадают'
				]
			],
		'PIN'=>
			[
				'*',
				'Введите PIN-код!! <<чтобы подтвердить смену>>',
				[
					'pin_wrong'=>'неверный код'
				],
				'skip'=>($_cfg.Sec_MinPIN == 0),
				'size'=>8
			]
	]
	btn_text='Сменить'
	btns=valueIf(isset($smarty.get.need_change), ['skip'=>'Не менять'])
}

		</div>
	</div>
</div>

{include file='footercabinet.tpl'}
{/strip}