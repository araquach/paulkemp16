@extends('layouts.main') 

@section('head')
	<meta name="description" content="">
	<meta name="keywords" content="">
@stop

@section('title')

	<title>Paul Kemp Hairdressing - Meet Leon</title>

@stop

@section('content') 

<section id="team_ind">
	<div id="team_leon" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Leon Pritchard</h2>
	<p>Leon has quickly built up a strong reputation for his skills in cutting, colouring &amp; styling hair.</p>
	<p>He's a big hit in the salon due to his friendly personality.</p>
	<p>He has grown to be a pivotal member of the team and is fast expanding his ever growing client base.</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Leon : &pound;114*</p>
	
	<a href="{{ URL::to('team') }}#leon">Click here to see the full team &gt;</a>
	
	{{-- FB Like --}}
	
	</section> <!--team_ind_copy-->

<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop