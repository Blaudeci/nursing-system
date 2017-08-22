@extends('layouts.template')

@push('links')
	<link href="{{ asset('css/painel/usuario/index.css') }}" rel="stylesheet">

	<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.13/i18n/Portuguese-Brasil.json"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
<header>
	<h2><i class="glyphicon glyphicon glyphicon-edit"></i> Buscar Usuário</h2>
</header>
<div id="main" class="container table-responsive">
<br>
	<table id="employee_data" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Nome</th>
				<th>CPF</th>
				<th>Data Nasc.</th>
				<th>E-mail</th>
				<th>Perfil</th>
				<th>Sexo</th>
				<th>Status</th>
				<th>Opção</th>
			</tr>
		</thead>
		@foreach ($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->cpf}}</td>
				<td>{{$user->data_nasc}}</td>
				<td>{{$user->email}}</td>
				@if($user->profile == "admin")
					<td>Enfermeiro</td>
				@else
					<td>Técnico Enfermagem</td>
				@endif
				<td>{{$user->sexo}}</td>
				<td>{{$user->status_user}}</td>
				<td>
                    <a href="/usuario/{{$user->id}}/edit" class="actions">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a> 
					<a href="#" class="actions">
                        <i class="glyphicon glyphicon-trash"></i>
					</a>
                </td>
			</tr>
		@endforeach
	</table>
	<br>
</div>
<script>
    $(document).ready(function(){
        $("#employee_data").DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Portuguese-Brasil.json"
            }   
        });
    });
</script>
@endsection