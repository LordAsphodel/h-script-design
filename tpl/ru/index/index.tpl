{strip}
{include file='headerhome.tpl' title='Главная'}

{if $demo}

	<p class="info">
		Скрипт работает в <b>демонстрационном</b> режиме.<br>
		Некоторые функции недоступны
	</p>
	
{/if}

	<section class="plans">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="plans__slider slider">

					{foreach from=$plani item=p name=foo}

						<div class="animated plans__plan plan slider__slide slider__slide_{$smarty.foreach.foo.index}">
							<h2 class="plan__h2">{$p.pName}</h2>
							<span class="plan__perc">{$p.pPerc}% <small>в день</small></span>
							<span class="plan__days">Бессрочно за исключением выходных дней</span>
							<span class="plan__sum">Сумма вклада:<br>от {_z($p.pMin, 2)}$ до {_z($p.pMax, 2)}$</span>
							<span class="plan__desc">{$p.pDescr}</span>
						</div>

					{/foreach}

					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="wow fadeInLeft about__h2_1"><b>О</b> нас</h2>
				</div>
				<div class="col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0">
					<p>ForexStar Profit представляет собой команду успешных аналитиков и трейдеров, опыт которых в области инвестиций превышает 10 лет. За это время были протестированы множество стратегий и инструментов для получения стабильной прибыли. Работа идет на

различных рынках высокорисковых активов, таких как FOREX, FORTS, фондовые рынки (акции и облигации). Несмотря на то, что деятельность сопряжена с высоким риском, наша компания распределяет средства инвесторов в те инструменты, в которых риск минимизирован, а доходность остается достаточно высокой на длительном интервале времени. Деятельность ForexStar Profit направлена на то, чтоб среднестатистический человек имел возможность получать пассивный доход и наслаждаться жизнью <a href="/about">Подробнее...</a></p>
					<div class="about__btns">
						{if $user.uID}
						<a href="/cabinet" class="btn"><span>кабинет</span></a>
						<a href="/login?out" class="btn"><span>выйти</span></a>
						{else}
						<a href="/registration" class="btn"><span>регистрация</span></a>
						<a href="/login" class="btn"><span>войти</span></a>
						{/if}
					</div>
				</div>
				<div class="col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0">
					<div class="about__video">
						<img src="img/fx.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="advantage">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="wow fadeInLeft advantage__h2"><b>Преимущества</b> работы</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0">
					<div class="advantage__item advantage__item_1">
						<h3>Цели проекта:</h3>
						<p>Конечная цель - это создание стабильного инструмента для пассивного дохода каждого человека. Именно для этого и были собраны одни из лучших трейдеров и аналитиков планеты. </p>
					</div>
				</div>
				<div class="col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6">
					<div class="advantage__item advantage__item_2">
						<h3>Чем мы занимаемся:</h3>
						<p>Компания осуществляет торговую деятельность на различных рынках высокорисковых активов, таких как FOREX, FORTS, фондовые рынки (акции и облигации). </p>
					</div>
				</div>
				<div class="col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0">
					<div class="advantage__item advantage__item_3">
						<h3>Доход инвестора:</h3>
						<p>Инвестор получает процент с прибыли от ведущихся торгов на рынках активах в виде дивидендов до 20% – 25% в месяц. Начисления происходят ежедневно, так что вы сможете контролировать ваши доходы почти в реальном времени.</p>
					</div>
				</div>
				<div class="col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6">
					<div class="advantage__item advantage__item_4">
						<h3>Риски работы:</h3>
						<p>Несмотря на то, что наша деятельность сопряжена с высоким риском, компания распределяет средства инвесторов в те инструменты, в которых риск минимизирован, а доходность остается достаточно высокой на длительном интервале времени. </p>
					</div>
				</div>
				<div class="col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0">
					<div class="advantage__item advantage__item_5">
						<h3>Партнерская программа:</h3>
						<p>Наша компания предоставляет партнерскую программу. Реферальная система имеет 3 уровня. Для открытия 2 и 3 линии нужно иметь 15 активных партнеров 1 линии. Все необходимые промо-материалы можно найти в вашем аккаунте. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-1 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0">
					<div class="advantage__affilate affilate">
						<h3><b>Реферальная</b> система</h3>
						<ul class="refsys affilate__refsys">
							<li class="refsys__item">От <b>вклада</b><span>3<small>%</small></span></li>
							<li class="refsys__item"><span>1<small>%</small></span></li>
							<li class="refsys__item"><span>1<small>%</small></span></li><br>
							<li class="refsys__item">От <b>дохода</b><span>10<small>%</small></span></li>
							<li class="refsys__item"><span>4<small>%</small></span></li>
							<li class="refsys__item"><span>1<small>%</small></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="strategy">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="wow fadeInLeft"><b>Стратегия</b> работы</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<img src="img/stralegy-left.png" alt="">
				</div>
				<div class="col-md-6 col-lg-6">
					<p>Наша компания регулярно изучает рынки на наличие новых возможностей заработка. Мы постоянно расширяем географию нашей деятельности и подключаем перспективные направления инвестирования. При успешном завершении серии тестов по инвестиционной стратегии компания предоставляет возможность инвесторам присоединиться к работе по данной стратегии и получать устойчивую прибыль вместе с нашей компанией. </p>
				</div>
			</div>
		</div>
	</section>
	<section class="perspectives">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="wow fadeInLeft"><b>Перспективы</b> работы</h2>
				</div>
			</div>
			<div class="row">
				 <div class="col-sm-6 col-md-3 col-lg-3 col-lg-offset-0">
					<div class="perspectives__item perspectives__item_1">
						<h3>Доход до 280% годовых</h3>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 col-lg-offset-0">
					<div class="perspectives__item perspectives__item_2">
						<h3>Еженедельные выплаты</h3>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 col-lg-offset-0">
					<div class="perspectives__item perspectives__item_3">
						<h3>Расширение набора тарифов</h3>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 col-lg-offset-0">
					<div class="perspectives__item perspectives__item_4">
						<h3>Ежедневные отчёты</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-lg-offset-0">
					<div class="ps perspectives__ps">
						<span class="ps__item"><b>P</b>erfectmoney</span>
						<span class="ps__item"><b>A</b>dvcash</span>
						<!--<span class="ps__item"><b>B</b>itcoin</span> -->
					</div>
					<img class="ps__bg hidden-xs" src="img/main3-bg1.png" alt="">
				</div>
			</div>
		</div>
	</section>
	
{include file='footer.tpl'}
{/strip}
