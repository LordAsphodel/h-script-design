{strip}
{include file='headerpage.tpl' title='Поддержка'}

	<section class="page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">

					<a href="/news" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i> Новости</a>
					<a href="/rules" class="page__btn page__btn_r hidden-xs">Правила <i class="fa fa-arrow-circle-o-right"></i></a> 

					<a href="/news" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a>
					<a href="/rules" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a>

					<h2><b>Запрос</b> в поддержку</h2>
				</div>
				<div class="col-md-6 col-md-offset-3">

{if isset($smarty.get.done)}

	<h2>Ваш запрос в поддержку успешно отправлен!</h2>
	<p class="info">
		Служба поддержки ответит Вам в соответствии с <a href="/rules">правилами</a> проекта.
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
