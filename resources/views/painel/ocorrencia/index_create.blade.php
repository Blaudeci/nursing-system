@extends('layouts.template')

@push('links')
	<link href="{{ asset('css/painel/formulario.css') }}" rel="stylesheet">
	<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.13/i18n/Portuguese-Brasil.json"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script src="{{ asset('js/datatable.js') }}"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
<div class="body-main">
	<header>
		<h2><i class="glyphicon glyphicon glyphicon-edit"></i> Cadastrar Ocorrência</h2>
	</header>
	<div class="container table-responsive body-main__main">
		<br>
		<table id="employee_data" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Data Nasc.</th>
					<th>Sexo</th>
					<th>Perfil</th>
					<th>Opção</th>
				</tr>
			</thead>
			@foreach ($pacientes as $paciente)
			 	@if($paciente->status == "ativo")
					<tr>
						<td>{{$paciente->nome}}</td>
						<td>{{$paciente->data_nasc}}</td>
						<td>{{$paciente->sexo}}</td>
						<td>{{$paciente->perfil}}</td>
						<td>
							<a href="/ocorrencia/{{$paciente->id}}/create" style="width: 100%; color: white; font-size: 1em;" class="btn btn-primary">
								Registrar
							</a>
						</td>
					</tr>
				@endif
			@endforeach
		</table>
		<br>
	</div>
</div>
@endsection