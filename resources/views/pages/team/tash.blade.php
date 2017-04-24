@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Tash\'s passion for hairdressing is apparent from the minute you meet her. 
	She loves creative colouring and cutting plus she\'s highly skilled in styling hair.',
	'keywords' => 'Natasha Bailey, Tash Bailey, Paul Kemp Hairdressing stylists, hairdressers, PK',
	'ogtitle' => 'Tash Bailey',
	'ogdescription' => 'Tash\'s passion for hairdressing is apparent from the minute you meet her. 
	She loves creative colouring and cutting plus she\'s highly skilled in styling hair.',
	'ogimage' => url('/') . '/images/staff/tash_og.jpg',
	'title' => 'Paul Kemp Hairdressing - Tash'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<section id="team_ind">
<div id="team_tash" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Tash Bailey</h2>
	<p>Tash's passion for hairdressing is apparent from the minute you meet her.</p>
	<p>She loves creative colouring and cutting plus she's highly skilled in styling hair. </p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Tash : &pound;76*</p>
	
	<div id="feedback_feed_ind">
  	<ul>
  	@foreach($feedbacks as $feed)
  	    <li>&quot;{{ $feed->feedback->extra_edit }}&quot;<br><span class="client">{{ $feed->first_name }} {{ $feed->last_name }} - hair by {{ $feed->stylist }} </span></li>
  	@endforeach
  	</ul>
	</div> <!--#feedback_feed-->
	
	<a href="{{ URL::to('team') }}#tash">Click here to see the full team &gt;</a>
	
	<div id="fb-like">
		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/tash" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>
	
	</section> <!--team_ind_copy-->

<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop