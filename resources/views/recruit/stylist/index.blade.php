@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'The Paul Kemp Hairdressing team is always on the look out for talented new stylists. Fill out your information here to apply for a position',
	'keywords' => 'Paul Kemp Hairdressing, stylist job, stylist recruitment, hairdresser job, hairdresser recruitment',
	'ogtitle' => 'Become a PK Stylist',
	'ogdescription' => 'The Paul Kemp Hairdressing team is always on the look out for talented new stylists. Fill out your information here to apply for a position',
	'ogimage' => url('/') . '/images/ogimage/myimage.png',
	'title' => 'Paul Kemp Hairdressing - Stylist Application - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="recruitBlank">

<h1>Stylists</h1>

@foreach($stylists as $stylist)

<div class="view">
    
<a href="/stylist/{{ $stylist->id }}">{{ $stylist->first_name }} {{ $stylist->second_name }} </a>

</div>

@endforeach

</div> <!--recruitBlank-->

@stop