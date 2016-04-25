<!DOCTYPE HTML>
<html class="no-js">

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
@section('head')
	<meta name="description" content="Paul Kemp Hairdressing is a luxurious hair salon right in the heart of Warrington town centre. Sister salon to the award winning Jakata Hair and Beauty team, the stunning new hairdressers opened back in June 2011 with the aim to offer an ultra relaxing atmosphere, first class customer service, alongside the highest level of hairdressing expertise. The salons talented hairdressers are all trained to the highest level in cutting, colouring and styling hair, with specialists in technical colour, hair straightening, wedding hair and hair extensions. The team has a wealth of experience in all aspects of hairdressing by highly qualified hairdressers.">
	<meta name="keywords" content="hairdressers, hairdressing, hair salons Warrington, salon, salons, salon Warrington, salons warrington, hairdressing jobs warrington, fashion colour, mens hairdressing, brazilian blowdry, Warrington, Lymm, Stockton Heath, Culcheth, Great Sankey, Widnes and Runcorn">
	<meta name="author" content="Paul Kemp Hairdressing Ltd">
	<meta name="viewport" content="width=device-width" /> <!--mobile fixed width-->
	
	<!--Google analytics required-->

	<link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}" />
	<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 640px), only screen and (min-device-width : 719px) and (max-device-width : 721px) and (-webkit-min-device-pixel-ratio : 2) and (orientation : portrait)" href="{{ URL::asset('css/mobile.css') }}"
	/>
	
	<script type="text/javascript" src="{{ URL::asset('scripts/mootools_core.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/mootools-more.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/modernizr.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/selectivizr-min.js') }}"></script>
@section('title')
	<title>Paul Kemp Hairdressing - Hairdressers in Warrington</title>
@show
</head>

<body>

	<div class="container" id="page">

		<header class>
			<div id="logo" class="logo"></div>
			<h1>Paul Kemp Hairdressing</h1>
			<h2>Hairdressers in Warrington</h2>

			<nav>
				<ul>
					<li>{!! link_to('/', 'Home') !!}</li>
					<li>{!! link_to('offers', 'Offers') !!}</li>
					<li>{!! link_to('salon', 'The Salon') !!}</li>
					<li>{!! link_to('team', 'Team') !!}</li>
					<li>{!! link_to('news', 'News') !!}</li>
					<li>{!! link_to('recruitment', 'Recruitment') !!}</li>
					<li>{!! link_to('men', 'Men') !!}</li>
					<li>{!! link_to('prices', 'Prices') !!}</li>
					<li>{!! link_to('contact', 'Contact') !!}</li>
				</ul>
			</nav>
		</header>

		<div id="content">
			@yield('content')
		</div>

		<div class="clear"></div>

		<footer>
	<ul id="footer_images">
	<li><a href="http://www.schwarzkopf-professional.com/" target="_blank">{{ Html::image('images/footer/schwarzkopf.png', 'Schwarzkopf - The Hairdressers choice') }}</a></li>
	<li><a href="http://www.tigihaircare.com/consumer/en-UK/bedhead/" target="_blank">{{ Html::image('images/footer/bedhead.png', 'Bedhead - Proffessional Hairdressing') }}</a></li>
	<li><a href="http://www.catwalkbytigi.com" target="_blank">{{ Html::image('images/footer/catwalk.png', 'Tigi Catwalk') }}</a></li>
	<li><a href="http://www.tigihaircare.com/consumer/en-UK/b4men/default.asp" target="_blank">{{ Html::image('images/footer/bformen.png', 'B for Men - mens products for hairdressers') }}</a></li>
	<li><a href="http://www.ghdhair.com/" target="_blank">{{ Html::image('images/footer/ghd.png', 'ghd - for hairdressers') }}</a></li>
	<li><a href="http://www.tigihaircare.com/consumer/en-UK/sfactor/default.asp" target="_blank">{{ Html::image('images/footer/sfactor.png', 'S Factor - quality brand for hairdressers') }}</a></li>
	</ul>
	
	<section id="smallabout">
	<h2><strong>Paul Kemp Hairdressing</strong></h2>
	<ul>
	<li>Paul Kemp Warrington</li>
	<li>Hairdressers Warrington</li> 
	<li>Hair Salon Warrington</li> 
	<li>Salons Warrington</li>
	<li>Hairdressing Warrington</li>
	<li>Hairdressers Cheshire</li> 
	<li>Salons Cheshire</li>
	<li>Hair Salon Cheshire</li> 
	<li>Hairdressing Cheshire</li>
	<li>Hair cutting Warrington</li> 
	<li>Hair colouring Warrington</li>
	<li>Mens Hairdressing Warrington</li>
	<li>Mens Hairdressers Warrington</li> 
	<li>Technical hairdressing</li> 
	<li>Kebelo Warrington</li> 
	<li>Brazilian Blowdry Warrington</li> 
	<li>Opti-Smooth Warrington</li> 
	<li>Fashion styling Warrington</li> 
	<li>Mens cutting Warrington</li> 
	<li>Schwarzkopf Warrington</li> 
	<li>Tigi Warrington</li> 
	<li>Bedhead Warrington</li>
	<li>Osis Warrington</li>
	<li>Aveda Warrington</li>
	<li>Catwalk Warrington</li>
	<li>Bonacure Warrington</li>
	<li>Warrington Hairdressers</li>
	<li>Cheshire Hairdressers</li>
	</ul>
	</section>
	<a href="https://www.facebook.com/PaulKempHairdressing" target="_blank"><div id="facebook"></div></a>
	<a href="https://twitter.com/paulkemphair" target="_blank"><div id="twitter"></div></a>
	<a href="https://plus.google.com/+PaulKempHairdressingWarrington/posts?hl=en" target="_blank"><div id="google"></div></a>
	</footer>
		
	</div>

</body>

</html>