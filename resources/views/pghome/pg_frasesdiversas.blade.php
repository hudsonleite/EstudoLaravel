@extends('pg_template')

@section('header')
	Frases do Dia
@stop

@section('content')
	@foreach($frasesdiv as $frase)
		<h3>{{$frase->title}}</h3>
		<p>{{$frase->conteudo}}</p>
	@endforeach
@stop