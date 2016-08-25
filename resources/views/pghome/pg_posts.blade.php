@extends('pg_template')

@section('header')
	Pagina de post
@stop

@section('content')
	<ul class="list_group">
		@foreach($posts as $post)
			<li class="list-group-item list-group-item-info">{{ $post->title }} {{ $post->content }}</li>	
		@endforeach
	</ul>
@stop