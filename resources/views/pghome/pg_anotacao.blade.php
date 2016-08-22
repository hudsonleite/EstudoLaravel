@extends('pg_template')

@section('header')
	Anotações Geral
@stop

@section('content')
<ul class="list-group">
	<?php $par = true;?>
	
	@foreach($notas_r as $nota)
		<?php if ($par){ ?>
			<li class="list-group-item list-group-item-success">{{ $nota }}</li>
		<?php }else{ ?>
			<li class="list-group-item list-group-item-info">{{ $nota }}</li>
		<?php }; $par = !$par?>
	@endforeach
</ul>
@stop