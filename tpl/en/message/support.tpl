{strip}
{include file='headerpage.tpl' title='Contact us'}

	<section class="page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">

					<a href="/news" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i> Announcements</a>
					<a href="/rules" class="page__btn page__btn_r hidden-xs">Regulations <i class="fa fa-arrow-circle-o-right"></i></a> 

					<a href="/news" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a>
					<a href="/rules" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a>

					<h2><b>Support</b> request</h2>
				</div>
				<div class="col-md-6 col-md-offset-3">

{if isset($smarty.get.done)}

	<h2>Your support request has been successfully sent!</h2>
	<p class="info">
		Support will reply acoording to the <a href="/rules">regulations</a> of the project.
	</p>

{else}

	{include file='message/support.box.tpl'}

{/if}	

				</div>
			</div>
		</div>
	</section>

{include file='footer.tpl'}
{/strip}
