	@extends('pg_template')

	@section('header')
		Título da Página
	@stop

	@section('content')
		<div class="row">
			<div class="col-xs-12">
				<!-- 
					table-striped       - Zebrado
					table-bordered      - borda 
					table-condensed     - reduzir espaçamento linha
					table-hover         - pintar a linha que está o mouse

					classes css contextual::: active utilizar para marcações;
					sucess; info; warning; danger

					tabelas responsivas, necessário circundar (ficar dentro de uma div)

				-->
				<div class="table-responsive">
					<table class="table table-hover table-bordered table-condensed active">
						<thead>
							<tr class="info">
								<th>Título</th>
								<th>Nome</th>
								<th>Sobrenome</th>
								<th>Data Nascimento</th>
								<th>Idade</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>Colaborador</td>
								<td>Hudson</td>
								<td>Leite</td>
								<td>06/12/1985</td>
								<td>30</td>
							</tr>
							<tr>
								<td>Colaborador</td>
								<td>Hudson</td>
								<td>Leite</td>
								<td>06/12/1985</td>
								<td>30</td>
							</tr>
							<tr>
								<td>Colaborador</td>
								<td>Hudson</td>
								<td>Leite</td>
								<td>06/12/1985</td>
								<td>30</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	@stop