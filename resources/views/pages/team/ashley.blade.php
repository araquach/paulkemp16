@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Ashley recently qualified and is now a Graduate stylist within the team. She is developing at an extremely fast rate and will be moving up the ranks quickly.',
	'keywords' => 'Ashley Tennant, Paul Kemp Hairdressing stylists, hairdressers, PK',
	'ogtitle' => 'Ashley Tennant',
	'ogdescription' => 'Ashley recently qualified and is now a Graduate stylist within the team. She is developing at an extremely fast rate and will be moving up the ranks quickly.',
	'ogimage' => url('/') . '/images/staff/ashley_og.jpg',
	'title' => 'Paul Kemp Hairdressing - Ashley'
	])
	
@stop

@section('content') 

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<section id="team_ind">
	
<div class="proportional">
	<div id="team_ashley" class="team_pic"></div>
</div>	

<div id="feedback-container">	
	<div id="feedback_feed_ind">
  	<ul>
  	@foreach($feedbacks as $feed)
  	    <li>&quot;{{ $feed->feedback->extra_edit }}&quot;<br><span class="client">{{ $feed->first_name }} {{ $feed->last_name }} - hair by {{ $feed->stylist }} </span></li>
  	@endforeach
  	</ul>
	</div> <!--#feedback_feed-->
</div>
	
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