{strip}
{include file='headercabinet.tpl' title='Реферальная система'}

<div class="page-heading animateed fadeInDown">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Реферальная система</h1>
    </div>
    <div class="clear"></div>
</div>
<div class="box-info full animated fadeInDown">
<h2 class="text-left"><i class="fa fa-history"></i> Ваша реферальная ссылка - <a href="{$refurl}">{$refurl}</a></h2>
{if $reflogin}
<h2 class="text-left"><i class="fa fa-history"></i> Вас пригласил - <a href='javascript:void(0);'><span class='open_popup' rel='popup1'>{$reflogin}</span></a></h2>
{/if}

{*----inviter: pouop---*}
	<style>	{*----style for popup window---*}
		.overlay { display:none; position:fixed; z-index:999; opacity:0.5; filter:alpha(opacity=50); top:0; right:0; left:0; bottom:0; background:#000; }
		.popup  { display:none; position:fixed; border:3px solid #999; background:#fff; width:394px; height:194px; top:50%; left:50%; margin:-100px 0 0 -100px; z-index:1000;  border-radius:10px; padding:30px;}
		.close { display:block; width:12px; text-align:center; cursor:pointer;  height:12px; line-height:12px; background:#fff; color:red; border:3px solid red;  position:absolute; top:10px; right:10px; text-decoration:none; border-radius:3px; font-size:10px; }
	</style>

	<div class="overlay"></div>
	<div class="popup" id="popup1">
		<span class="close">X</span>
	{include file='edit.tpl'
		fields=[
			'InvLogin'=>
				[
					'X',
					'Вас пригласил',
					0,
					{$reflogin},
					'skip'=>!$reflogin
				],
			'InvAvatar'=>
			[
				'X',
				"{include file='_usericon.tpl' user=$upref}"
			],
			'InvName'=>
				[
					'X',
					'Имя:',
					0,
					{$upref.aName},
					'skip'=>!$upref
				],
			'InvE-mail'=>
				[
					'X',
					'E-mail:',
					0,
					"<a href=\"mailto:{$upref.uMail}\" >{$upref.uMail}</a>"
				]

		]
		btn_text=' '
	}
	</div>
{*-end inviter popup*}

{if _uid()}

	{include file='medit.tpl'
		fields=[
			'Refs'=>
				[
					'U',
					'refsys/_refs.tpl',
					'skip'=>!$refs
				]
		]
		btn_text=' '
	}

	{if $_cfg.Account_RegMode == 3}
	
		<h2>Инвайты</h2>
		
	{/if}
	
{/if}

	<script> {* Script for popup*}
		$('.open_popup').click(function() {
			var popup_id = $('#' + $(this).attr("rel"));
			$(popup_id).show();
			$('.overlay').show();
		});

		$('.popup .close, .overlay').click(function() {
			$('.overlay, .popup').hide();
		});
	</script>

</div>

{include file='footercabinet.tpl'}
{/strip}
