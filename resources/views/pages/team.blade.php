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

<section id="team">
	<ul>
		<li>
			<p class="up">Shell</p>
		</li>
		<li>
			<p>Kel</p>
		</li>
		<li>
			<p class="up">Jo</p>
		</li>
		<li>
			<p>Izzy</p>
		</li>
		<li>
			<p class="up">Kate</p>
		</li>
		<li>
			<p>Tash</p>
		</li>
		<li>
			<p class="up">Leon</p>
		</li>
	</ul>
	
	<a href="{{ URL::to('team/kel') }}">
		<section id="kel">
			<h3>{{ Html::image('images/staff/kel.jpg', 'Kellie Reedy') }} Kellie Reedy - Senior Stylist</h3>
			<p>Salon manager Kelly has 14 years experience working in Warrington town centre. She is the team leader of the salon. She specialises in long hair styliny and is also one of the extension experts within the salon.</p>
			<p class="teamprice">Average Cut &amp; Colour price with Kelly : &pound;114*</p>
		</section>
	</a>

	<a href="{{ URL::to('team/jo') }}">
		<section id="jo">
			<h3>{{ Html::image('images/staff/jo.jpg', 'Jo Mahoney') }} Jo Mahoney - Senior Stylist</h3>
			<p>Jo is a fantastic stylist with many years experience, she\'s a real long standing asset to the team. Her down to earth nature instantly puts you at ease and her hairdressing skills really shine. She loves doing men and women\'s hair. Book well in advance
				- she's a very busy stylist. </p>
			<p class="teamprice">Average Cut &amp; Colour price with Jo : &pound;114*</p>
		</section>
	</a>

	<a href="{{ URL::to('team/izzy') }}">
		<section id="iz">
			<h3>{{ Html::image('images/staff/izzy.jpg', 'Izzy Lamb') }} Isobelle Lamb - Senior Stylist</h3>
			<p>Izzy has quickly established herself as an extremely sought after stylist. Her natural flair with creating beautiful, wearable styles has built her a strong following. Izzy recently won the National <em>Redken Style Innovator</em> award. She is also
				a specialist in extensions.</p>
			<p class="teamprice">Average Cut &amp; Colour price with Izzy : &pound;114*</p>
		</section>
	</a>

	<a href="{{ URL::to('team/leon') }}">
		<section id="leon">
			<h3>{{ Html::image('images/staff/leon.jpg', 'Leon Pritchard') }} Leon Pritchard - Senior Stylist</h3>
			<p>Leon has quickly built up a strong reputation for his skills in cutting, colouring &amp; styling hair. He\'s a big hit in the salon due to his friendly personality. He has grown to be a pivotal member of the team and is fast expanding his ever growing
				client base. </p>
			<p class="teamprice">Average Cut &amp; Colour price with Leon : &pound;114*</p>
		</section>
	</a>

	<a href="{{ URL::to('team/shell') }}">
		<section id="shell">
			<h3>{{ Html::image('images/staff/michelle_r.jpg', 'Michelle Railton') }} Michelle Railton - Senior Stylist</h3>
			<p>Michelle is a highly skilled hairdresser with loads of experience. She is rapidly becoming a very highly sought after stylist in the salon. She especially loves soft, natural styles and men\'s indie/mod cutting.</p>
			<p class="teamprice">Average Cut &amp; Colour price with Kate : &pound;114*</p>
		</section>
	</a>

	<a href="{{ URL::to('team/kate') }}">
		<section id="kate">
			<h3>{{ Html::image('images/staff/kate.jpg', 'Kate O\'halloran') }} Kate O'halloran - Stylist</h3>
			<p>Kate has the ability to put you instantly at ease and with her many years of experience she\'ll find a look that\'s perfect for you. Colouring, cutting and long hair styling are her specialities.</p>
			<p class="teamprice">Average Cut &amp; Colour price with Kate : &pound;96*</p>
		</section>
	</a>

	<a href="{{ URL::to('team/caleb') }}">
		<section id="caleb">
			<h3>{{ Html::image('images/staff/caleb.jpg', 'Caleb Barrie') }} Caleb Barrie - Stylist</h3>
			<p>Caleb is a diverse stylist with a real passion for hairdressing. He\'s a recent addition to the team. He’s highly skilled in all aspects of hairdressing but loves high-fashion colouring and big, bouncy blow dry’s.</p>
			<p class="teamprice">Average Cut &amp; Colour price with Caleb : &pound;96*</p>
		</section>
	</a>

	<a href="{{ URL::to('team/tash') }}">
		<section id="tash">
			<h3>{{ Html::image('images/staff/tash.jpg', 'Tash Bailey') }} Tash Bailey - Stylist</h3>
			<p>Tash's passion for hairdressing is apparent from the minute you meet her. She loves creative colouring and cutting plus she\'s highly skilled in styling hair.</p>
			<p class="teamprice">Average Cut &amp; Colour price with Tash : &pound;76*</p>
		</section>
	</a>

	<a href="{{ URL::to('team/ashley') }}">
		<section id="ashley">
			<h3>{{ Html::image('images/staff/ashley.jpg', 'Ashley Tennant') }} Ashley Tennant - Graduate Stylist</h3>
			<p>Ashley recently qualified and is now a Gradutae stylist within the team. She is developing at an extremely fast rate and will be moving up the ranks quickly.</p>
			<p class="teamprice">Average Cut &amp; Colour price with Ashley : &pound;55*</p>
		</section>
	</a>

</section>

</section>

<section id="teambottom">
	<p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>

@stop