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
<div id="team_michelle" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Michelle Railton</h2>
	<p>Michelle is a highly skilled Senior Stylist with loads of experience. She is rapidly becoming a very highly sought after stylist in the salon. </p>
	<p>She especially loves soft, natural styles and men's indie/mod cutting.</p> 
	<p class="team_ind_price">Average Cut &amp; Colour price with Michelle : &pound;114*</p>
	
		<a href="{{ URL::to('team') }}#shell">Click here to see the full team &gt;</a>
	
	<div class="fb-like" data-href="http://www.paulkemphairdressing.com/michelle" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
	
	</section> <!--team_ind_copy-->


<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop