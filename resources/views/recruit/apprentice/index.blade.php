@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'At Paul Kemp Hairdressing all of our training is carried out in-house, you gain maximum exposure to observe skilled stylists whilst gaining valuable hands-on experience.',
	'keywords' => 'apprentiships, apprentice, trainee stylist, trainee hairdresser, graduate stylist, hairdressing training',
	'ogtitle' => 'Become a PK apprentice',
	'ogdescription' => 'At Paul Kemp Hairdressing all of our training is carried out in-house, you gain maximum exposure to observe skilled stylists whilst gaining valuable hands-on experience.',
	'ogimage' => url('/') . '/images/ogimage/myimage.png',
	'title' => 'Paul Kemp Hairdressing - Apprentice Application - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="recruitBlank">

<h1>Apprentices</h1>

@foreach($apprentices as $apprentice)

<div class="view">
    
<a href="/apprentice/{{ $apprentice->id }}">{{ $apprentice->first_name }}</a>

</div>

@endforeach

</div> <!--recruitBlank-->

@stop