@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => '',
	'keywords' => '',
	'ogtitle' => '',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/myimage.png',
	'title' => 'Paul Kemp Hairdressing - Kellie'
	])
	
@stop

@section('content') 

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<section id="team_ind">
	<div id="team_kel" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Kellie Reedy</h2>
	<p>Salon manager Kelly has 14 years experience working in Warrington town centre.</p>
	<p>She is the team leader of the salon.</p> 
	<p>She specialises in long hair styling and is also one of the extension experts within the salon.</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Kelly : &pound;114*</p>
	
	<div id="feedback_feed_ind">
  	<ul>
  	@foreach($feedbacks as $feed)
  	    <li>&quot;{{ $feed->feedback->extra_edit }}&quot;<br><span class="client">{{ $feed->first_name }} {{ $feed->last_name }} - hair by {{ $feed->stylist }} </span></li>
  	@endforeach
  	</ul>
	</div> <!--#feedback_feed-->
	
	<a href="{{ URL::to('team') }}#kel">Click here to see the full team &gt;</a>
	
	<div id="fb-like">
		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/kel" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>
		
</section> <!--team_ind_copy-->
<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop