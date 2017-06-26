@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'All the latest news from the Paul Kemp Hairdressing Team',
	'keywords' => 'Paul Kemp Hairdressing news, PK news stories',
	'ogtitle' => 'Essential Looks 2017 - in-salon competition',
	'ogdescription' => 'Every season Schwarzkopf launches their latest \'Essential Looks\' collections. Three sets of looks that are inspired by the upcoming trends in Paris, Milan, New York and London.
	We run an internal competition to coincide with the launch of the collections, to get our team members to interpret their favourite Essential Look.',
	'ogimage' => url('/') . '/images/news_images/el_group_shot_meta.jpg',
	'title' => 'Paul Kemp Hairdressing - PK News - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<article class="article">
<a id="NewBlondMe" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/new_blonde_me_1.jpg', 'New BlondeMe') }}
<h3>New Bombshell for Blondes</h3>
<p><strong>The revamp of the iconic Schwarzkopf 'BlondMe' range has finally launched with some dramatic changes that are sure to make you stand out from the crowd!</strong></p>
<p>Powered by a brand new advanced bonding system built into the colouring products, lightening and lifting hair has never been easier or less damaging.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/new_blonde_me_all.jpg', 'New BlondeMe Collection', ['class' => 'news-image']) }}
{{ Html::image('images/news_images/new_blonde_me_2.jpg', 'Instant Blushes') }}
<p>The bonding system works by protecting and interlinking with the fibres within hair creating stronger bonds and minimising hair breakage.</p>
<p>Integrating the bonding technology into the shampoo and conditioners means new bonds will also be created in the hair shaft, leaving you with the soft, supple, blonde hair that defines perfection.</p>
<p>The intermixable pastel toners allow for even more creativity and diversity than ever before. Ideal for anyone feeling like being blonde just isn't enough.</p>
<p>We can create strong intense toning for the more adventurous or pastelizing these tones even further can achieve soft subtle hues, catering for everybody.</p>
<p class="big">Ask your stylist about the new 'BlondMe' range on your next visit</p>
</section> <!--end .hidden-->
<p class="author">Published by Caleb</p>
<time datetime="2017-03-08">8<sup>th</sup> March 2017</time>
</article> <!--end #article-->

@stop