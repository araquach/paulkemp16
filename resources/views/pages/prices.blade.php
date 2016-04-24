@extends('layouts.main')

@section('head')
	<meta name="description" content="Up to date JAKATA prices">
	<meta name="keywords" content="Jakata prices, hairdressing prices">
@stop

@section('title')

	<title>Paul Kemp Hairdressing - Hairdressing Prices</title>

@stop

@section('content')

<section id="prices">

<div id="priceheader" class="group">
  <h1 class="priceheader">Hairdressing Prices</h1>
</div>

<!--mobile price list-->

<div id="mob_price">
<h3>Cutting &amp; Styling</h3>
<p>Prices depend on level of stylist</p>
<table>
	<tr><td>Cut, Dry &amp; Style</td> <td>&pound;21.95 - &pound;65.95</td></tr>
	<tr><td>Dry &amp; Style</td> <td>&pound;14.95 - &pound;37.80</td></tr>
	<tr><td>Curly Blowdry</td> <td>&pound;19.95 - &pound;43.60</td></tr>
	<tr><td><strong>Hair Up Styling</strong></td></tr>
	<tr><td>Express Hair Up</td> <td>&pound;9.95 - &pound;16.95</td></tr>
	<tr><td>Regular Hair Up</td> <td>&pound;16.95 - &pound;38.95</td></tr>
	<tr><td>Intricate Hair Up</td> <td>&pound;24.95 - &pound;48.95</td></tr>
	<tr><td><strong>Men</strong></td></tr>
	<tr><td>Men's Wash, Cut &amp; Style</td> <td>&pound;11.95 - &pound;33.80</td></tr>
	<tr><td>Men's Express Cut &amp; Style</td> <td>&pound;8.95 - &pound;23.95</td></tr>
	<tr><td>Men's Colour</td> <td>From &pound;10</td></tr>
	<tr><td><strong>Kids</strong></td></tr>
	<tr><td>Boy's Cut &amp; Style (Under 12)</td> <td>&pound;9.50 - &pound;23.90</td></tr>
	<tr><td>Girls's Dry Cut (Under 12)</td> <td>&pound;12.95 - &pound;25.05</td></tr>
	<tr><td>Girls's Cut, Dry &amp; Style (Under 12)</td> <td>&pound;16.95 - &pound;37.95</td></tr>
</table>
<h3>Colouring</h3>
<table>
	<tr><td><strong>Highlights &amp; Lowlights</strong></td></tr>
	<tr><td>Top/Parting</td> <td>&pound;26.60 - &pound;48.30</td></tr>
	<tr><td>Half Head</td> <td>&pound;34.95 - &pound;67.20</td></tr>
	<tr><td>Full Head</td> <td>&pound;43.25 - &pound;86.10</td></tr>
	<tr><td><strong>Full Head Tint</strong></td></tr>
	<tr><td>Short</td> <td>&pound;26.60 - &pound;48.30</td></tr>
	<tr><td>Long</td> <td>&pound;43.25 - &pound;86.10</td></tr>
	<tr><td>Root Regrowth</td> <td>&pound;26.60 - &pound;48.30</td></tr>
	<tr><td>Root &amp; Refresh</td> <td>&pound;34.95 - &pound;67.20</td></tr>
	<tr><td><strong>'Vibrance'<br>Fresh, intense <br>ammomia free colours</strong></td></tr>
	<tr><td>Short</td> <td>&pound;26.60 - &pound;48.30</td></tr>
	<tr><td>Long</td> <td>&pound;34.95 - &pound;67.20</td></tr>
	<tr><td><strong>Full Colour Change</strong></td></tr>
	<tr><td>Light to Dark<br>(inc. pre-pigmentation)</td> <td>&pound;43.25 - &pound;86.10</td></tr>
	<tr><td>Dark to Light<br>(inc. colour cleansing)</td> <td>&pound;64.95 - &pound;129.15</td></tr>
</table>
<h3>Corrective Colour</h3>
<p>If you've had a home hair colouring disaster, or a bad colour experience in another salon, we will correct &amp; transform your hair to how you wanted it in the first place! Our expert colour team will give you a price on consultation.</p>
<p>Please note: A patch test is required 48 hours prior to any colour service if you have not had colour with us before. It only takes a couple of minutes to carry out.</p>

</div>

<!--end mobile price list-->

<div id="norm_price">
<table>
	<tr><th class="s_type">Cutting &amp; Styling</th> <th>&nbsp;</th> <th>&nbsp;</th></tr>
	<tr><th>&nbsp;</th> <th>Stylists</th> <th>Director</th></tr>
	<tr><td>Cut, Dry &amp; Style</td> <td>&pound;24.95 - &pound;48.95</td> <td>&pound;56.95</td></tr>
	<tr><td>Dry &amp; Style</td> <td>&pound;16.95 - &pound;32.95</td> <td>&pound;37.80</td></tr>
	<tr><td>Curly Blowdry</td> <td>&pound;19.95 - &pound;38.95</td> <td>&pound;43.60</td></tr>
	<tr><td><strong>Hair Up Styling</strong></td></tr>
	<tr><td>Express Hair Up</td> <td>&pound;9.95 - &pound;16.95</td></tr>
	<tr><td>Regular Hair Up</td> <td>&pound;16.95 - &pound;38.95</td></tr>
	<tr><td>Intricate Hair Up</td> <td>&pound;24.95 - &pound;48.95</td></tr>
	<tr><td><strong>Men</strong></td></tr>
	<tr><td>Men's Wash, Cut &amp; Style</td> <td>&pound;11.95 - &pound;28.50</td> <td>&pound;33.80</td></tr>
	<tr><td>Men's Express Cut &amp; Style</td> <td>&pound;8.95 - &pound;20.70</td> <td>&pound;23.95</td></tr>
	<tr><td>Men's Colour</td> <td>From &pound;10</td></tr>
	<tr><td><strong>Kids</strong></td></tr>
	<tr><td>Boy's Cut &amp; Style (Under 12)</td> <td>&pound;9.50 - &pound;20.50</td> <td>&pound;23.90</td></tr>
	<tr><td>Girls's Dry Cut (Under 12)</td> <td>&pound;12.95 - &pound;21.80</td> <td>&pound;25.05</td></tr>
	<tr><td>Girls's Cut, Dry &amp; Style (Under 12)</td> <td>&pound;16.95 - &pound;35.95</td> <td>&pound;37.95</td></tr>
	<tr><th class="s_type">Colouring</th> <td>&nbsp;</td> <td>&nbsp;</td></tr>
	<tr><td><strong>Highlights &amp; Lowlights</strong></td></tr>
	<tr><td>Top/Parting</td> <td>&pound;26.60 - &pound;41.95</td> <td>&pound;48.30</td></tr>
	<tr><td>Half Head</td> <td>&pound;34.95 - &pound;58.50</td> <td>&pound;67.20</td></tr>
	<tr><td>Full Head</td> <td>&pound;43.25 - &pound;74.50</td> <td>&pound;86.10</td></tr>
	<tr><td><strong>Full Head Tint</strong></td></tr>
	<tr><td>Short</td> <td>&pound;34.95 - &pound;58.50</td> <td>&pound;48.30</td></tr>
	<tr><td>Long</td> <td>&pound;43.25 - &pound;74.50</td> <td>&pound;86.10</td></tr>
	<tr><td>Root Regrowth</td> <td>&pound;26.60 - &pound;41.95</td> <td>&pound;86.10</td></tr>
	<tr><td>Root &amp; Refresh</td> <td>&pound;41.95 - &pound;56.95</td> <td>&pound;48.30</td></tr>
	<tr><td><strong>'Vibrance'<br>Fresh, intense ammomia free colours</strong></td></tr>
	<tr><td>Short</td> <td>&pound;26.60 - &pound;41.95</td> <td>&pound;48.30</td></tr>
	<tr><td>Long</td> <td>&pound;34.95 - &pound;58.50</td> <td>&pound;67.20</td></tr>
	<tr><td><strong>Full Colour Change</strong></td></tr>
	<tr><td>Light to Dark<br>(inc. pre-pigmentation)</td> <td>&pound;43.25 - &pound;74.50</td> <td>&pound;86.10</td></tr>
	<tr><td>Dark to Light<br>(inc. colour cleansing)</td> <td>&pound;64.95 - &pound;111.30</td> <td>&pound;129.15</td></tr>
</table>
<section id="corrective">
<h3>Corrective Colour</h3>
<p>If you've had a home hair colouring disaster, or a bad colour experience in another salon, we will correct &amp; transform your hair to how you wanted it in the first place! Our expert colour team will give you a price on consultation.</p>
</section> <!--#corrective-->

<p class="patch-test">Please note: A patch test is required 48 hours prior to any colour service if you have not had colour with us before. It only takes a couple of minutes to carry out.</p>
</div> <!--#norm_price-->

</section> <!--end prices-->

@stop