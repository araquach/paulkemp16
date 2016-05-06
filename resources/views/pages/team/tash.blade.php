@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => '',
	'keywords' => '',
	'ogtitle' => '',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/myimage.png',
	'title' => 'Paul Kemp Hairdressing - '
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<section id="team_ind">
<div id="team_tash" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Tash Bailey</h2>
	<p>Tash's passion for hairdressing is apparent from the minute you meet her.</p>
	<p>She loves creative colouring and cutting plus she's highly skilled in styling hair. </p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Tash : &pound;76*</p>
	
		<a href="{{ URL::to('team') }}#tash">Click here to see the full team &gt;</a>
	
	<div class="fb-like" data-href="http://www.paulkemphairdressing.com/tash" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
	
	</section> <!--team_ind_copy-->

<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop