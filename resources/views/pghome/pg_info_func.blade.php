@extends('pg_template')

@section('header')
	Tabela de Funcionários
@stop

@section('content')
<div class="row">
	<div class="col-xs-12">
		<div class="table-responsive">
			<table class="table table-hover table-bordered table-condensed active">
				<thead>
					<tr class="info">
						<th>Nome Funcionario</th>
						<th>Data Admissão</th>
						<th>Salário</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Hudson Leite</td>
						<td>01/02/2011</td>
						<td>860,00</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop