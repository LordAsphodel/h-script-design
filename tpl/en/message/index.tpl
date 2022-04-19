{strip}
{include file='headercabinet.tpl' title='Incoming messages'}

<div class="page-heading animateed fadeInDown">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Incoming messages</h1>
    </div>
    <div class="clear"></div>
</div>
<div class="box-info full animated fadeInDown">
	<div class="col-xs-12">
		<div class="settings-nav clearfix">
			<a href="/{_link module='message/show'}?new" class=""><i class="fa fa-envelope"></i> Write new message</a>
			<a href="/messages" class="active"><i class="fa fa-level-down"></i> Incoming</a>
			<a href="/messages/outbox" class=""><i class="fa fa-level-up"></i> Outgoing</a>
		</div>
		<h2 class="text-left"><i class="fa fa-level-down"></i> Incoming messages</h2>
		<div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div>

{if $list}

	{include file='mlist.tpl' 
		table_class='table table-striped'
		btn_wrapp='lower-row'
		btn_class='btn btn-primary'
		url='*'
		fields=[
			'bID'=>['ID'],
			'mTS'=>['Date'],
			'uLogin'=>['Sender'],
			'mTopic'=>['Topic'],
			'bRTS'=>['Is read']
		]
		values=$list
		row='*'
		btns=['del'=>'Delete']
	}
	
{else}

	No messages

{/if}

		<br><br>
	</div>
</div>

{include file='footercabinet.tpl'}
{/strip}
