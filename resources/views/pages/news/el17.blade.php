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
<a id="EL17" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/group-shot.jpg', 'Essential Looks') }}
<h3>Essential Looks 2017</h3>
<p><strong>Every season Schwarzkopf launches their latest 'Essential Looks' collections. Three sets of looks that are inspired by the upcoming trends in Paris, Milan, New York and London.</strong></p>
<p>We run an internal competition to coincide with the launch of the collections, to get our team members to interpret their favourite Essential Look.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<h4>The Competitors</h4>
<p>Stylists from both <strong>Paul Kemp Hairdressing</strong> and sister salon <strong>Jakata</strong> took part in the challenge, all coming up with their own unique take on their favourite look from this season.</p>
{{ Html::image('images/news_images/el_the_teams_big.jpg', 'The Stylists', ['class' => 'news-image']) }}
<h4>Abbi Clarke (PK)</h4>
{{ Html::image('images/news_images/el_abbi.jpg', 'Abbi\'s entry', ['class' => 'news-image']) }}
<h4>Caleb Barrie (Jakata)</h4>
{{ Html::image('images/news_images/el_caleb.jpg', 'Caleb\'s entry', ['class' => 'news-image']) }}
<h4>Jo Birchall (PK)</h4>
{{ Html::image('images/news_images/el_jo.jpg', 'Jo\'s entry', ['class' => 'news-image']) }}
<h4>Kate O'Halleran (PK)</h4>
{{ Html::image('images/news_images/el_kate.jpg', 'Kate\'s entry', ['class' => 'news-image']) }}
<h4>Laura Hall (Jakata)</h4>
{{ Html::image('images/news_images/el_laura__h.jpg', 'Laura\'s entry', ['class' => 'news-image']) }}
<h4>Layla Relf (Jakata)</h4>
{{ Html::image('images/news_images/el_layla.jpg', 'Layla\'s entry', ['class' => 'news-image']) }}
<h4>Louise Bailey (PK)</h4>
{{ Html::image('images/news_images/el_louise.jpg', 'Louise\'s entry', ['class' => 'news-image']) }}
<h4>Matt Lane (Jakata)</h4>
{{ Html::image('images/news_images/el_matt.jpg', 'Matt\'s entry', ['class' => 'news-image']) }}
<h4>Natalie Doxey (Jakata)</h4>
{{ Html::image('images/news_images/el_nat.jpg', 'Nat\'s entry', ['class' => 'news-image']) }}
<h4>Shell Railton (PK)</h4>
{{ Html::image('images/news_images/el_shell.jpg', 'Shell\'s entry', ['class' => 'news-image']) }}
<h4>Tash Bailey (PK)</h4>
{{ Html::image('images/news_images/el_tash.jpg', 'Tash\'s entry', ['class' => 'news-image']) }}
<h4>Laura Minnett (Jakata)</h4>
{{ Html::image('images/news_images/el_laura_m.jpg', 'Laura\'s entry', ['class' => 'news-image']) }}
<h4>The Finished Looks</h4>
{{ Html::image('images/news_images/el_group_shot_big.jpg', 'The finished looks', ['class' => 'news-image']) }}
<p>The standard of the work for this years competition was the highest yet! It made judging extremely difficult!</p>
<p>After much deliberation the judges decided that <strong>Laura Hall</strong> was the winner with <strong>Natalie Doxey</strong> coming second and <strong>Michelle Railton</strong> third.</p>
<p>They win the chance to take part in a photoshoot to recreate their looks with professional models, plus a session styling course.</p>
<p><a href="http://www.schwarzkopf-professional.co.uk/skp/uk/en/home/trends/the-collection.html" target="_blank">See the Schwarzkopf Essential Looks collections that inspired our stylists here ></a></p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2017-04-18">18<sup>th</sup> April 2017</time>
</article> <!--end #article-->

@stop