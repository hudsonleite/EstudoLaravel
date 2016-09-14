@extends('pg_template')

@section('header')
	Estudo de Migration
@stop


@section('content')
	
	@foreach($postagem as $post)
		<h2>{{ $post->title }}</h2>
		<p>{{ $post->content }}</p>
		<h3>Comentários</h3>
		@foreach($post->ComentariosPost as $comment)
			<b>Name: </b>{{ $comment->name }} <br>
			<b>Comentário: </b>{{ $comment->comentario }} <br>
		@endforeach
		<hr>
	@endforeach
	
@stop