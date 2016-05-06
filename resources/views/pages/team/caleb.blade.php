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
<div id="team_caleb" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Caleb Barrie</h2>
	<p>Caleb is a diverse stylist with a real passion for hairdressing. He's a recent addition to the team.</p>
	<p>He’s highly skilled in all aspects of hairdressing but loves high-fashion colouring and big, bouncy blow dry’s.</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Caleb : &pound;96*</p>
	
	<a href="{{ URL::to('team') }}#caleb">Click here to see the full team &gt;</a>
	
	<div class="fb-like" data-href="http://www.paulkemphairdressing.com/caleb" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
		
</section> <!--team_ind_copy-->
<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop