@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => '',
	'keywords' => '',
	'ogtitle' => 'Welcoming Louise',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/ogimage/louise.jpg',
	'title' => 'Paul Kemp Hairdressing - New Staff - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="new">
	
	<section id="new_copy">
	
	<h2>Welcoming Louise to the PK team</h2>
	<p></p>
	<p></p>
	<p></p>
	<p></p>
	<p><strong>Special offers for Louise</strong></p>
	
	<p class="so_big"><strong>25% off</strong></p>
	<p class="so_med">all services</p>
	<p class="so_med"><strong>plus a FREE <br>&pound;10 product voucher</strong></p>
	<p class="so_small">for all clients of Michelle</p>
	
	<p class="specOffer_contact"><strong>Call: 01925 242960</strong> to book</p>
	<p class="so_small">Please note: a skin test required 48 hours prior to any colour service</p>
	<p>We look forward to seeing you in the salon soon</p>
	

	</section> <!--#new_copy-->

</section> <!--end #new-->

@stop