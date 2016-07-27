@extends('templates.default')

@section('title') Home  @stop

@section('content')

	<div class="container">
		@if(Session::has('global'))
		<p> {{ Session::get('global') }}</p>
		@endif
	</div>

	@if($posts->count())
		@foreach($posts as $post)
				<article class="make-center home-article-block">
				    <div class="article-owner post-highlight"> </div>

				    <div class="article-content post-highlight">
					 	<p class="published-on">Posted {{ $post->created_at->diffForHumans()}}</p>
					 	<h4 > <a class="post-title" href="{{ URL::action('post-show', $post->slug) }}">{{ $post->title }} </h4> </a>
					 	<div class="t-body">{{ Markdown::parse(Str::limit($post->body, 100)) }}</div>
					 	<a class="read-more" href="{{ URL::action('post-show', $post->slug) }}"> more &rarr;</a>
					</div>
				</article>

		@endforeach
	@endif

@stop
