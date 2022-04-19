{strip}
{include file='headercabinet.tpl' title='Payment settings'}

<div class="page-heading">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Payment settings</h1>
    </div>
    <div class="clear"></div>
</div>

    <div class="settings-box animated fadeInDown">
      <div class="settings-nav clearfix">
      	<a href="/account" class="">
          <i class="fa fa-cogs"></i> Security settings
        </a>
        <a href="/balance/wallets" class="active">
          <i class="fa fa-money"></i> Payment settings
        </a>
      </div>
      <div class="settings-content clearfix">
      	<div class="col-xs-12">
      	<h2><i class="fa fa-money"></i>Payment settings</h2>
      	<div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div>

{if !$wfields}

	<p class="info">
		Payment systems are disabled.
	</p>

{else}

	{if $_cfg.Const_IntCurr}
		{$wfields = [
			'DefCurr'=>[
				'S',
				'Default payment system!!',
				[
					'psys_wrong'=>'Set payment system'
				],
				[0=>'- select -'] + (array)$defcurr,
				'default'=>$user['aDefCurr']
			]
		]+$wfields}
	{/if}

	{if $showbutton and ($_cfg.Sec_MinPIN > 0)}
		{$wfields[] = ''}
		{$wfields['PIN'] = [
						'*',
						'Enter PIN-code!! <<to confirm changes>>',
						[
							'pin_wrong'=>'Incorrect code'
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
