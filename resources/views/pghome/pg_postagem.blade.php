@extends('pg_template')

@section('header')
	Estudo de Migration
@stop


@section('content')
	
	@foreach($postagem as $post)
		<h2>{{ $post->title }}</h2>
		<p>{{ $post->content }}</p>
		<hr>
	@endforeach
	
@stop