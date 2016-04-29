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

{{-- Need FB meta --}}

<section id="offersMain">

<h2>Offers</h2>

<section id="offerlist">

<div id="offer1" class="offer">
<h3>FREE Colour <br>with every<br>Cut, Dry &amp; Style</h3>
<p>For new clients<br>until the end of May</p>
<p class="small">offer until <time datetime="2014-05-30">30/05/14</time><br>
  For New Clients Only - not with any other offer - excludes Saturday<br>Skin test required 48hrs prior to service</p>
</div>
  
<div id="offer4" class="offer">
  <h3>FREE Cut, Dry &amp; Style</h3>
  <p>with every Kebelo System Treatment</p><p class="small">until <time datetime="2014-05-30">30/05/14</time><br>
    not with any other offer<br>Excludes Saturday</p>
</div>
 
</section> <!--end offerlist-->
 
</section> <!--end offersMain-->

{!! link_to('contact', 'Online Booking &amp; Enqiory form') !!}

</section> <!--end #offers-->

@stop
