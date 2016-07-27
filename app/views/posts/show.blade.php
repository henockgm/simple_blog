@extends('templates.default')

@section('title') {{ $post->title }} @stop

@section('content')
	 <div class="container">
		 <article class="make-center">
		 	<h2> <a class="post-title" href="{{ URL::action('post-show', $post->slug) }}">{{ $post->title }} </h2> </a>
		 		 {{ Markdown::parse($post->body) }} 		
		</article>
	</div>
@stop