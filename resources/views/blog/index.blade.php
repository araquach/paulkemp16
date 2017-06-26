@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => '{{ $blog->description }}',
	'keywords' => 'Paul Kemp Hairdressing news, PK news stories',
	'ogtitle' => '{{ $blog->title }}',
	'ogdescription' => '{{ $blog->description }}',
	'ogimage' => '{{ $blog->fbimage }}',
	'title' => 'Paul Kemp Hairdressing - PK News - Hairdressers in Warrington'
	])
@stop

@section('content')

<section id="blog">
    
    @foreach($blogs as $blog)
        <article class="article">
            
            @foreach($blog->pics as $pic)
                {{ $pic->image_url }}
            @endforeach
            
            <h3>{{ $blog->title }}</h3>
            
            @foreach($blog->paras as $para)
                {{ $para->para }}
            @endforeach
            
            <a href="{{ $blog->link }}" class="reveal">Read more &gt;</p>
        </article>
    @endforeach
    
</section>

@stop