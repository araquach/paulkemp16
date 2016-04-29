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

<section id="team_ind">
	<div id="team_jo" class="team_pic"></div>
	
	<section id="team_ind_copy">
	<h2>Jo Mahoney</h2>
	<p>Jo is a fantastic stylist with many years experience, she's a real long standing asset to the team.</p> 
	<p>Her down to earth nature instantly puts you at ease and her hairdressing skills really shine.</p>
	<p>She loves doing men and women's hair. Book well in advance - she's a very busy stylist. </p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Jo : &pound;114*</p>
	
	<a href="{{ URL::to('team') }}#jo">Click here to see the full team &gt;</a>
	
	{{-- FB Like --}}
		
</section> <!--team_ind_copy-->
<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop