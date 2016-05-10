@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => '',
	'keywords' => '',
	'ogtitle' => '',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/myimage.png',
	'title' => 'Paul Kemp Hairdressing - Ashley'
	])
	
@stop

@include('layouts.partials.fb_like')

@section('content') 

<section id="team_ind">
	<div id="team_ashley" class="team_pic"></div>
	
	<section id="team_ind_copy">
	<h2>Ashley Tennant</h2>
	<p>Ashley recently qualified and is now a Graduate stylist within the team.</p> 
	<p>She is developing at an extremely fast rate and will be moving up the ranks quickly.</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Ashley : &pound;55*</p>
	
	<a href="{{ URL::to('team') }}#ashley">Click here to see the full team &gt;</a>
	
	<div id="fb-like">
		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/ashley" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>
	
</section> <!--team_ind_copy-->
<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>

</section> <!--team_ind-->

@stop