@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Summer Cut & Colour Packages - £80 with Senior Stylist, £65 with Stylists for new clients',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => 'Summer Offers',
	'ogdescription' => 'Cut and colour packages: £80 with Senior Stylist, £65 with Stylists for new clients',
	'ogimage' => url('/') . '/images/offer/june16_meta.jpg',
	'title' => 'Paul Kemp Hairdressing - Summer Offers - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<section id="offersMain">

<h2>Summer Offers</h2>

@include('pages.offers.cut_col')

<div class="fb-like" data-href="http://www.paulkemphairdressing.com/offers" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

</section> <!--end offersMain-->

</section> <!--end #offers-->

@stop
