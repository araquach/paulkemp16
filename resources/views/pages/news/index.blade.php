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

<section id="newspage">
    <h2>News</h2>
    
    <section id="accordion">
        
        <article class="article">
            <a id="EL17" class="anchor"></a>
            <section class="visible">
                {{ Html::image('images/news_images/group-shot.jpg', 'Essential Looks') }}
                <h3>Essential Looks 2017</h3>
                <p><strong>Every season Schwarzkopf launches their latest 'Essential Looks' collections. Three sets of looks that are inspired by the upcoming trends in Paris, Milan, New York and London.</strong></p>
                <p>We run an internal competition to coincide with the launch of the collections, to get our team members to interpret their favourite Essential Look.</p>
                <p class="reveal">Read more &gt;</p>
            </section> <!--end .visible-->
        </article>
        
        
        <article class="article">
            <a id="NewBlondMe" class="anchor"></a>
            <section class="visible">
                {{ Html::image('images/news_images/new_blonde_me_1.jpg', 'New BlondeMe') }}
                <h3>New Bombshell for Blondes</h3>
                <p><strong>The revamp of the iconic Schwarzkopf 'BlondMe' range has finally launched with some dramatic changes that are sure to make you stand out from the crowd!</strong></p>
                <p>Powered by a brand new advanced bonding system built into the colouring products, lightening and lifting hair has never been easier or less damaging.</p>
                {{ Html::link('news/newblondeme', "Read More &gt;") }}
            </section> <!--end .visible-->
        </article>
    
    </section>

</section>



@stop