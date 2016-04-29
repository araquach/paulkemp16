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

<section id="men">
  <section id="meninfo">
    <h2>Men's Hairdressing</h2>
    <p>At Paul Kemp Hairdressing we have a team of experts in men's hairdressing on hand. Whatever your fashion tastes and style, we'll work your hair exactly how you want it.</p>
    <p>The team constantly stay up to date with latest cutting &amp; styling techniques through Tigi and Schwarzkopf's innovative training courses and inspiration sessions.</p>
    <p>Call us to book in with one of our male hair experts, or drop into the salon for a free consultation.</p>
    <p class="offer">Prices start from around &pound;20 for a Wash, Cut &amp; Style</p>
    
    
    </section>
    <div id="menimages">
    {{ Html::image('images/men/men1.jpg') }}
    {{ Html::image('images/men/men2.jpg') }}
    {{ Html::image('images/men/men3.jpg') }}
    {{ Html::image('images/men/men4.jpg') }}   
    </div>
</section>

@stop