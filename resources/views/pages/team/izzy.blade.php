@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => '',
	'keywords' => '',
	'ogtitle' => '',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/myimage.png',
	'title' => 'Paul Kemp Hairdressing - Izzy'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<section id="team_ind">
	<div id="team_izzy" class="team_pic"></div>
	
	<section id="team_ind_copy">
	<h2>Izzy Lamb</h2>
	<p>Izzy has quickly established herself as an extremely sought after stylist.</p>
	<p>Her natural flair with creating beautiful, wearable styles has built her a strong following. </p>
	<p>Izzy recently won the National <em>Redken Style Innovator</em> award. She is also a specialist in extensions. </p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Izzy : &pound;114*</p>
	
	<a href="{{ URL::to('team') }}#iz">Click here to see the full team &gt;</a>
	
	<div id="fb-like">
		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/izzy" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>
	
</section> <!--team_ind_copy-->
<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop