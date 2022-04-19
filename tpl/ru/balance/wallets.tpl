{strip}
{include file='headercabinet.tpl' title='Платежные реквизиты'}

<div class="page-heading">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Платежные реквизиты</h1>
    </div>
    <div class="clear"></div>
</div>

    <div class="settings-box animated fadeInDown">
      <div class="settings-nav clearfix">
      	<a href="/account" class="">
          <i class="fa fa-cogs"></i> Безопасность
        </a>
        <a href="/balance/wallets" class="active">
          <i class="fa fa-money"></i> Мои реквизиты
        </a>
      </div>
      <div class="settings-content clearfix">
      	<div class="col-xs-12">
      	<h2><i class="fa fa-money"></i> Мои реквизиты</h2>
      	<div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div>

{if !$wfields}

	<p class="info">
		Платежные системы не подключены
	</p>

{else}

	{if $_cfg.Const_IntCurr}
		{$wfields = [
			'DefCurr'=>[
				'S',
				'Платежная система по умолчанию!!',
				[
					'psys_wrong'=>'укажите плат.систему'
				],
				[0=>'- выберите -'] + (array)$defcurr,
				'default'=>$user['aDefCurr']
			]
		]+$wfields}
	{/if}

	{if $showbutton and ($_cfg.Sec_MinPIN > 0)}
		{$wfields[] = ''}
		{$wfields['PIN'] = [
						'*',
						'Введите PIN-код!! <<чтобы подтвердить изменения>>',
						[
							'pin_wrong'=>'неверный код'
						],
						'size'=>8
					]}
	{/if}

	
	{include file='medit.tpl'
		url='/balance/wallets'
		form_class='form-horizontal'
		row_wrap='settings-form-group form-group'
		label_class='col-sm-6 control-label'
		input_class='form-control'
		input_wrap='col-sm-6'
		btn_class='btn btn-primary col-sm-12'
		btn_wrapp='col-sm-6 col-sm-offset-6'
		fields=$wfields
		values=$wdata
		btn_text=valueIf(!$showbutton, ' ')
	}
	
{/if}


		</div>
	</div>
</div>

{include file='footercabinet.tpl'}
{/strip}