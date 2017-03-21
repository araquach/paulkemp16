<!DOCTYPE HTML>
<html class="no-js">
	
@section('head')

@show

@if(url()->current() === url('freeproducts/man'))
	<body class="man">
@elseif(url()->current() === url('freeproducts/man/create'))
	<body class="man">
@else
	<body>
@endif


<div class="container" id="page">

<header class="group">

	
	<a href="{{ URL::to('/') }}"><div id="logo"></div></a>

	<h2>A New Standard of Hairdressing</h2>
	
</header>
	
	<section id="prospect-info">
	
	@if(url()->current() === url('freeproducts/man'))
    	<!--need to get mens product images-->
    	<section id="prospect-image-man"></section> 
    @else
    	<section id="prospect-image"></section>
    @endif

	<p>Paul Kemp Hairdressing is located right in the heart of Warrington town centre. The salon offers an ultra relaxing atmosphere, first class customer service, alongside the highest level of hairdressing expertise.</p>
    <p>Our talented hairdressing team are all trained to the highest level in cutting, colouring and styling hair, with specialists in technical colour, hair straightening, wedding hair and hair extensions. The team has a wealth of experience in all aspects of hairdressing so you can just sit back, relax and enjoy the experience.</p>
    <p><em>The salon has built up a strong reputation for creating stunning, fashionable looks tailored to suit you, and your lifestyle, so if you're looking for a new <strong class="paraend">hairdressers in Warrington</strong> then look no further!</em></p>
	
	<section id="address_info">
	<p>83 Sankey Street, Warrington</p>
	<p class="big">01925 444488</p>
	</section> <!--address_info-->
	</section> <!--prospect-info-->

	@yield('content')

	<div class="clear group"></div>
	
</div><!-- page -->

</body>