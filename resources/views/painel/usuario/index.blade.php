@extends('layouts.template')

@push('links')
	<link href="{{ asset('css/painel/formulario.css') }}" rel="stylesheet">
	<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.13/i18n/Portuguese-Brasil.json"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
<div class="body-main">
	<header>
		<h2><i class="glyphicon glyphicon glyphicon-edit"></i> Buscar Usuário</h2>
	</header>
	<div class="container table-responsive body-main__main">
		<div class="col-sm-12">
			@if(Session::has('message-delete'))
				<script type="text/javascript">
					swal("Deletado!", "Usuário deletado com sucesso.", "success");
				</script>
			@endif
			<!--@if(Session::has('message-nodelete'))
				<script type="text/javascript">
					swal("Usuário não pode ser deletado!", "O usuário está ligado com outras tabelas do BD. Então foi apenas inativado", "success");
				</script>
			@endif-->
			@if(Session::has('message-status-inativado'))
				<script type="text/javascript">
					swal("Inativado!", "Usuário foi inativado com sucesso.", "success");
				</script>
			@endif
			@if(Session::has('message-status-ativado'))
				<script type="text/javascript">
					swal("Ativado!", "Usuário foi ativado com sucesso.", "success");
				</script>
			@endif
		</div>
		<div class="col-sm-12">
			@if( isset($errors) && count($errors) > 0 )
				<br>
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
						<td>Técnico de Enfermagem</td>
					@endif
					<td>{{$user->sexo}}</td>
					@if($user->id != 1)
						@if($user->status_user == "ativo")
							<td>
								<?php
	                    			$id = $user->id;
	                			?>
								<a href="#" onclick="activated_user(<?=$id?>)">
									<img src="{{ asset('img/joinha.png')}}" style="width: 40px;">
									
									<script type="text/javascript">
			                    		
			                    		function activated_user(id){
				                    		swal({ 
												title: "Deseja inativar o usuário?",
				  								text: "O usuário será inativado!",
				  								type: "warning",
				  								showCancelButton: true,
				  								confirmButtonColor: "#DD6B55",
				  								confirmButtonText: "Sim, Inativar!",
				  								cancelButtonText: "Não, Cancelar!",
				  								closeOnConfirm: false,
				  								closeOnCancel: false
											},
											function(isConfirm){
				  								if (isConfirm) {
				  									window.location='/usuario/'+ id +'/status_inativado';
				  								}else{
				  									swal("Cancelado" , "A operação foi cancelada :)", "error");
				  								}
											});
			                    		}
			                    	</script>
								</a>
							</td>
						@else
							<td>
								<?php
	                    			$id = $user->id;
	                			?>
								<a href="#" onclick="inactivate_user(<?=$id?>)">
									<img src="{{ asset('img/nao-joinha.png')}}" style="width: 40px;-webkit-transform:rotate(180deg); -moz-transform:rotate(180deg);">
									<script type="text/javascript">
			                    		
			                    		function inactivate_user(id){
				                    		swal({ 
												title: "Deseja ativar o usuário?",
				  								text: "O usuário será ativado!",
				  								type: "warning",
				  								showCancelButton: true,
				  								confirmButtonColor: "#DD6B55",
				  								confirmButtonText: "Sim, Ativar!",
				  								cancelButtonText: "Não, Cancelar!",
				  								closeOnConfirm: false,
				  								closeOnCancel: false
											},
											function(isConfirm){
				  								if (isConfirm) {
				  									window.location='/usuario/'+ id +'/status_ativado';
				  								}else{
				  									swal("Cancelado" , "A operação foi cancelada :)", "error");
				  								}
											});
			                    		}
			                    	</script>
								</a>
							</td>
						@endif
					@else
						<td>
							<a href="#" onclick="administrador_status()">
								<img src="{{ asset('img/joinha.png')}}" style="width: 40px;">
									
								<script type="text/javascript">
			                    	function administrador_status(){
				                    	sweetAlert("Oops...", "O status do usuário não pode ser modificado!", "error");	
			                    	}
			                    </script>
			                </a>
						</td>
					@endif
					<td>
	                    <button class="actions">
		                    <a href="/usuario/{{$user->id}}/edit">
		                        <i class="glyphicon glyphicon-edit"></i>
		                    </a>
	                    </button>
	                    <?php
	                    	$id = $user->id;
	                    ?>
	                    @if($user->id != 1)
		                    <button onclick="confim_delete(<?=$id?>)" class="actions">
		                    	<i class="glyphicon glyphicon-remove"></i>
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