@extends('layouts.template')

@push('links')
	<link href="{{ asset('css/painel/formulario.css') }}" rel="stylesheet">
	<link href="{{ asset('css/painel/relatorio-ocorrencia.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{ asset('js/relatorio.js') }}"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.13/i18n/Portuguese-Brasil.json"></script>

    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/plug-ins/1.10.16/filtering/row-based/range_dates.js"></script>

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
  	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
  	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
  	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
@endpush

@section('content')
<div class="body-main">
	<header>
		<h2><i class="glyphicon glyphicon glyphicon-edit"></i> Relatório</h2>
	</header>
	<div class="container table-responsive body-main__main">
		<div class="row form-group hrs-bottom">
			<div class="col-sm-12">
				<div class="col-sm-12">
					<h1>Relatório de Ocorrência</h1>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<p class="notification-red">Os campos que possuem (*) são obrigatórios.</p>
		</div>
		<br><br>
		<div class="error-fieldset">
		</div>
		<div class="row">
			<form method="post" action="{{ route('relatorio.store') }}">
				{{ csrf_field() }}
				<div class="col-sm-4">
					<label for="start_date">Data Inicial: <span class="notification-red">*</span></label>
                	<input type="date" class="form-control" name="start_date" id="start_date" value="{{$start_date}}"/>
				</div>
				<div class="col-sm-4">
					<label for="end_date">Data Final: <span class="notification-red">*</span></label>
                	<input type="date" class="form-control" name="end_date" id="end_date" value="{{$end_date}}"/>
				</div>
				<div class="col-sm-4">
					<br>
					<button type="submit" id="search" class="btn btn-primary">Buscar</button>
				</div>
			</form>
        </div>
		<br>
		<table id="order_data" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Data Nasc.</th>
					<th>Sexo</th>
					<th>Queixa</th>
					<th>Data Ocorrência</th>
					<th>Usuário</th>
				</tr>
			</thead>
			@foreach ($ocorrencias as $ocorrencia)
				<?php
					$user  	  = DB::table('users')->where('id','=', $ocorrencia->user_id)->first();
					$paciente = DB::table('pacientes')->where('id','=', $ocorrencia->paciente_id)->first(); 
					$data 	  = date('d-m-Y', strtotime($ocorrencia->created_at));
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
					<td>{{$user->name}}</td>
				</tr>
			@endforeach
		</table>
		<br>
	</div>
</div>
@endsection