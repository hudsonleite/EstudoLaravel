@extends('pg_template')

@section('header')
	Pagina de post
@stop

@section('content')
	<ul class="list_group">
		@foreach($posts as $post)
			<li class="list-group-item list-group-item-info">{{ $post->title }} {{ $post->content }}
				<ul class="list_group">
				@foreach($post->ComentariosPost as $comment)
					<li><b>Name: </b>{{$comment->name}}</li>
					<li><b>Comentário: </b>{{$comment->comentario}}</li>
				@endforeach
				</ul>
			</li>

		@endforeach
	</ul>
@stop