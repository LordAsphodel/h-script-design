{strip}
{include file='headerhome.tpl' title='Home'}

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
							<span class="plan__perc">{$p.pPerc}% <small>a day</small></span>
							<span class="plan__days">Infinite period excluding days off</span>
							<span class="plan__sum">Deposits:<br>from {_z($p.pMin, 2)}$ to {_z($p.pMax, 2)}$</span>
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
					<h2 class="wow fadeInLeft about__h2_1"><b>A</b>bout us</h2>
				</div>
				<div class="col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0">
					<p>ForexStar Profit is a team of successful analysts and traders whose experience in the field of ivestments overcomes 10 years. During this time vast number of strategies and instruments was tested in order to gain stable profit. We are working at different risky assets markets such as FOREX, FORTS, stock markets (shares and obligations). Though our activity is fraught with high risk, our company distributes investment assets among instruments which provide minimum risk and maximum profit simultaneously for the long period of time. The goal of ForexStar Profit is to give everybody an opportunity to have passive income and to enjoy his life. <a href="/about">Read more...</a></p>
					<div class="about__btns">
						{if $user.uID}
						<a href="/cabinet" class="btn"><span>Personal office</span></a>
						<a href="/login?out" class="btn"><span>Exit</span></a>
						{else}
						<a href="/registration" class="btn"><span>Sign up</span></a>
						<a href="/login" class="btn"><span>Log in</span></a>
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
					<h2 class="wow fadeInLeft advantage__h2">Our <b>advantages</b></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0">
					<div class="advantage__item advantage__item_1">
						<h3>Our goals:</h3>
						<p>Our goal is to provide stable instrument for obtaining passive income by everyone. To achieve this the best traders and analysts from all over the world were gathered together.</p>
					</div>
				</div>
				<div class="col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6">
					<div class="advantage__item advantage__item_2">
						<h3>Our activities:</h3>
						<p>We are working at different risky assets markets such as FOREX, FORTS, stock markets (shares and obligations). Trading different type of assets using approved strategies is the core of our income.</p>
					</div>
				</div>
				<div class="col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0">
					<div class="advantage__item advantage__item_3">
						<h3>Investor's income:</h3>
						<p>Investor has a share in the profits from the trades at assets markets up to 20% – 25% monthly. Charges are made daily so you are able to control your income nearly in real-time.</p>
					</div>
				</div>
				<div class="col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6">
					<div class="advantage__item advantage__item_4">
						<h3>Risks:</h3>
						<p>Though our activity is fraught with high risk, our company distributes investment assets among instruments which provide minimum risk and maximum profit simultaneously for the long period of time.</p>
					</div>
				</div>
				<div class="col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0">
					<div class="advantage__item advantage__item_5">
						<h3>Affiliate program:</h3>
						<p>Our company provides an affilate program. It has 3 levels. In order to have 2nd and 3rd referral lines you should have 15 active partners in the 1st line. All necessary promotional materials can be found in your account.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-1 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0">
					<div class="advantage__affilate affilate">
						<h3><b>Affiliate</b> system</h3>
						<ul class="refsys affilate__refsys">
							<li class="refsys__item">From <b>deposit</b><span>3<small>%</small></span></li>
							<li class="refsys__item"><span>1<small>%</small></span></li>
							<li class="refsys__item"><span>1<small>%</small></span></li><br>
							<li class="refsys__item">From <b>income</b><span>10<small>%</small></span></li>
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
					<h2 class="wow fadeInLeft">Working <b>strategy</b></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<img src="img/stralegy-left.png" alt="">
				</div>
				<div class="col-md-6 col-lg-6">
					<p>Our company keeps on regular monitoring of assets markets to find new opportunities of gaining income. We are constantly expanding the geography of our activities and adding promising investment instruments. When series of investment strategy tests are successfully comleted we provide our investors an opportunity to join this strategy and get stable income with our company.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="perspectives">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="wow fadeInLeft"><b>Prospect</b> of work</h2>
				</div>
			</div>
			<div class="row">
				 <div class="col-sm-6 col-md-3 col-lg-3 col-lg-offset-0">
					<div class="perspectives__item perspectives__item_1">
						<h3>Income up to<br>280% yearly</h3>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 col-lg-offset-0">
					<div class="perspectives__item perspectives__item_2">
						<h3>Withdrawals<br>every week</h3>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 col-lg-offset-0">
					<div class="perspectives__item perspectives__item_3">
						<h3>Expansion of <br>the tariff sets</h3>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 col-lg-offset-0">
					<div class="perspectives__item perspectives__item_4">
						<h3>Daily reports</h3>
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
