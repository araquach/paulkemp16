@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Half Price Colour with every Cut & Style for new clients throughout November',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => 'Offers',
	'ogdescription' => 'Half Price Colour with every Cut & Style for new clients throughout November',
	'ogimage' => url('/') . '/images/offer/june16_meta.jpg',
	'title' => 'Paul Kemp Hairdressing - Offers - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<section id="offersMain">

<h2>Offers</h2>

@include('pages.offers.half_price_col')

<div class="fb-like" data-href="http://www.paulkemphairdressing.com/offers" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

</section> <!--end offersMain-->

</section> <!--end #offers-->

@stop
