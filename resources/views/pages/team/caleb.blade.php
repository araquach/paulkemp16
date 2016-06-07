@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Caleb is a diverse stylist with a real passion for hairdressing. He\'s a recent addition to the team. He\’s highly skilled in all aspects of hairdressing but loves high-fashion colouring and big, bouncy blow dry\’s.',
	'keywords' => 'Caleb Barrie, Paul Kemp Hairdressing stylists, hairdressers, PK',
	'ogtitle' => 'Caleb Barrie',
	'ogdescription' => 'Caleb is a diverse stylist with a real passion for hairdressing. He\'s a recent addition to the team. He\’s highly skilled in all aspects of hairdressing but loves high-fashion colouring and big, bouncy blow dry\’s.',
	'ogimage' => url('/') . '/images/staff/caleb_og.jpg',
	'title' => 'Paul Kemp Hairdressing - Caleb'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<section id="team_ind">
<div id="team_caleb" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Caleb Barrie</h2>
	<p>Caleb is a diverse stylist with a real passion for hairdressing. He's a recent addition to the team.</p>
	<p>He’s highly skilled in all aspects of hairdressing but loves high-fashion colouring and big, bouncy blow dry’s.</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Caleb : &pound;96*</p>
	
	<div id="feedback_feed_ind">
  	<ul>
  	@foreach($feedbacks as $feed)
  	    <li>&quot;{{ $feed->feedback->extra_edit }}&quot;<br><span class="client">{{ $feed->first_name }} {{ $feed->last_name }} - hair by {{ $feed->stylist }} </span></li>
  	@endforeach
  	</ul>
	</div> <!--#feedback_feed-->

	<a href="{{ URL::to('team') }}#caleb">Click here to see the full team &gt;</a>
	
	<div id="fb-like">
		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/caleb" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>
	
</section> <!--team_ind_copy-->
<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop