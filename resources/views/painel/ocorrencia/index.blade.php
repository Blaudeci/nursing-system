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
		<h2><i class="glyphicon glyphicon glyphicon-edit"></i> Buscar Ocorrência</h2>
	</header>
	<div class="container table-responsive body-main__main">
		<div class="col-sm-12">
			@if(Session::has('message-delete'))
				<script type="text/javascript">
					swal("Deletado!", "Ocorrência deletada com sucesso.", "success");
				</script>
			@endif
		</div>
		<div class="col-sm-12">
		@if(Session::has('message'))
			<script type="text/javascript">
				swal("Ocorrência cadastrada com sucesso!", "", "success");
			</script>
		@endif
		</div>
		<div class="col-sm-12">
			@if(Session::has('message-error'))
				<script type="text/javascript">
					swal("Erro ao cadastrar ocorrência!", "", "error");
				</script>
			@endif
		</div>
		<br>
		<table id="employee_data" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Data Nasc.</th>
					<th>Sexo</th>
					<th>Queixa</th>
					<th>Data Ocorrência</th>
					<th>Opção</th>
				</tr>
			</thead>
			@foreach ($ocorrencias as $ocorrencia)
				<?php $paciente = DB::table('pacientes')->where('id','=', $ocorrencia->paciente_id)->first(); 
					$data = date('d/m/Y', strtotime($ocorrencia->created_at));
				?>
				<tr>
					<td>
						{{$paciente->nome}}
					</td>
					<td>
						{{$paciente->data_nasc}}
					</td>
					<td>
						{{$paciente->sexo}}
					</td>
					<td>
						{{$ocorrencia->tipo_queixa}}
					</td>
					<td>
						{{$data}}
					</td>
					<td>
						<a href="/ocorrencia/{{$ocorrencia->id}}/show">
							<img src="{{ asset('img/view-ocorrencia.png') }}" style="width: 40px;" title="View">
						</a>
						</button>
	                    <a href="/ocorrencia/{{$ocorrencia->id}}/edit">
	                    	<img src="{{ asset('img/editar-ocorrencia.png') }}" style="width: 40px;" title="Editar">
	                    </a>
	                    </button>
	                    @if(Auth::user()->profile == "Admin" || Auth::user()->profile == "Enfermeiro")
		                    <button onclick="confim_delete({{$ocorrencia->id}})" class="actions">
			                    <img src="{{ asset('img/exluir.png') }}" style="width: 40px;" title="Excluir">
		                    	<script type="text/javascript">
		                    		function confim_delete(id){
			                    		swal({ 
											title: "Você tem certeza?",
			  								text: "Você não poderá recuperar os dados da ocorrência!",
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
			  									window.location='/ocorrencia/'+ id +'/destroy';
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
@endsection