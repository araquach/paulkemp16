<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Paul Kemp Hairdressing is a luxurious hair salon right in the heart of Warrington town centre. Sister salon to the award winning Jakata Hair and Beauty team, the stunning new hairdressers opened back in June 2011 with the aim to offer an ultra relaxing atmosphere, first class customer service, alongside the highest level of hairdressing expertise. The salons talented hairdressers are all trained to the highest level in cutting, colouring and styling hair, with specialists in technical colour, hair straightening, wedding hair and hair extensions. The team has a wealth of experience in all aspects of hairdressing by highly qualified hairdressers.">
	<meta name="keywords" content="Paul Kemp Hairdressing, hairdressers, hairdressing, hair salons Warrington, salon, salons, salon Warrington, salons warrington, hairdressing jobs warrington, fashion colour, mens hairdressing, brazilian blowdry, Warrington, Lymm, Stockton Heath, Culcheth, Great Sankey, Widnes and Runcorn">
	<meta name="author" content="Paul Kemp Hairdressing Ltd">
	<meta name="viewport" content="width=device-width" /> <!--mobile fixed width-->
	
	<meta property="og:title" content="{{ $ogtitle or 'Paul Kemp Hairdressing' }}">
    <meta property="og:description" content="{{ $ogdescription or 'Paul Kemp Hairdressing is a luxurious hair salon right in the heart of Warrington town centre' }}">
	<meta property="og:image" content="{{ $ogimage or url('/') . '/images/ogimage/standard_image.png' }}">
	<meta property="og:url" content="{{ isset($url) ? $url : str_replace('http://', 'https://', Request::url()) }}">
	
	<!--Google analytics required-->

	<link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}" />
	<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 640px), only screen and (min-device-width : 719px) and (max-device-width : 721px) and (-webkit-min-device-pixel-ratio : 2) and (orientation : portrait)" href="{{ URL::asset('css/mobile.css') }}"
	/>
	
	<script type="text/javascript" src="{{ URL::asset('scripts/mootools_core.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/mootools-more.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/modernizr.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/selectivizr-min.js') }}"></script>

	<title>{{ $title or 'Paul Kemp Hairdressingg - Hairdressers in Warrington' }}</title>

</head>