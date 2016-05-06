@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Check out all the latest offers at Paul Kemp Hairdressing',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => 'Latest Special Offers',
	'ogdescription' => 'Check out all the latest offers here at Paul Kemp Hairdressing',
	'ogimage' => url('/') . '/images/ogimage/myimage.png',
	'title' => 'Paul Kemp Hairdressing - Latest Offers - Hairdressers in Warrington'
	])
	
@stop

@section('content')

{{-- Need FB meta --}}

<section id="offersMain">

<h2>Offers</h2>

@include('partials.offers.no_offer')

@stop
 
</section> <!--end offersMain-->

</section> <!--end #offers-->

@stop
