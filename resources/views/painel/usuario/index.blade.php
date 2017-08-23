@extends('layouts.template')

@push('links')
	<link href="{{ asset('css/painel/usuario/index.css') }}" rel="stylesheet">

	<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.13/i18n/Portuguese-Brasil.json"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
<div class="body_main">
	<header>
		<h2><i class="glyphicon glyphicon glyphicon-edit"></i> Buscar Usuário</h2>
	</header>
	<div id="main" class="container table-responsive body_main--main">
		<div class="col-sm-12">
			@if(Session::has('message'))
				<script type="text/javascript">
					swal("Deletado!", "Usuário deletado com sucesso.", "success");
				</script>
			@endif
		</div>
		<div class="col-sm-12">
			@if( isset($errors) && count($errors) > 0 )
				<div class="alert alert-danger">
					@foreach($errors->all() as $error)
						<p>{{$error}}</p>
					@endforeach
				</div>
			@endif	
		</div>
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
					<th>Opção</th>
				</tr>
			</thead>
			@foreach ($users as $user)
				@if($user->status_user == "ativo")
					<tr>
						<td>{{$user->name}}</td>
						<td>{{$user->cpf}}</td>
						<td>{{$user->data_nasc}}</td>
						<td>{{$user->email}}</td>
						@if($user->profile == "admin")
							<td>Enfermeiro</td>
						@else
							<td>Técnico de Enfermagem</td>
						@endif
						<td>{{$user->sexo}}</td>
						<td>
		                    <button class="actions">
			                    <a href="/usuario/{{$user->id}}/edit">
			                        <i class="glyphicon glyphicon-pencil"></i>
			                    </a>
		                    </button>
		                    <?php
		                    	$id = $user->id;
		                    ?>
		                    @if($user->id != 1)
			                    <button onclick="confim_delete(<?=$id?>)" class="actions">
			                    	<i class="glyphicon glyphicon-trash"></i>
			                    	<script type="text/javascript">
			                    		
			                    		function confim_delete(id){

				                    		swal({ 
												title: "Você tem certeza?",
				  								text: "Você não poderá recuperar os dados do usuário!",
				  								type: "warning",
				  								showCancelButton: true,
				  								confirmButtonColor: "#DD6B55",
				  								confirmButtonText: "Sim, Excluir!",
				  								cancelButtonText: "Não, Cancelar!",
				  								closeOnConfirm: false,
				  								closeOnCancel: false
											},
											function(isConfirm){
				  								if (isConfirm) {
				  									window.location='/usuario/'+ id +'/destroy';
				  								}else{
				  									swal("Cancelado" , "A exclusão foi cancelada :)", "error");
				  								}
											});
			                    		}
			                    	</script>
								</button>
							@endif
		                </td>
					</tr>
				@endif
			@endforeach
		</table>
		<br>
	</div>
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