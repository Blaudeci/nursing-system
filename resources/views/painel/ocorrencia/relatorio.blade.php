@extends('layouts.template')

@push('links')
	<link href="{{ asset('css/painel/formulario.css') }}" rel="stylesheet">
	<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.13/i18n/Portuguese-Brasil.json"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
@endpush

@section('content')
<div class="body-main">
	<header>
		<h2><i class="glyphicon glyphicon glyphicon-edit"></i> Relatório de Ocorrência</h2>
	</header>
	<div class="container table-responsive body-main__main">
		<br>
		<div class="row">
			<div class="input-datarange">
				<div class="col-sm-3">
					<label>Data Inicial:</label>
					<input type="text" name="start_date" id="start_date" class="form-control">
				</div>
				<div class="col-sm-3">
					<label>Data Final:</label>
					<input type="text" name="end_date" id="end_date" class="form-control">
				</div>
				<div class="col-sm-3">
				<br>
      				<input type="button" name="search" id="search" value="Buscar" class="btn btn-primary" style="font-size: 1em;" />
     			</div>
			</div>
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
					<th>Usuário</th>
				</tr>
			</thead>
			@foreach ($ocorrencias as $ocorrencia)
				<?php
					$user  	  = DB::table('users')->where('id','=', $ocorrencia->user_id)->first();
					$paciente = DB::table('pacientes')->where('id','=', $ocorrencia->paciente_id)->first(); 
					$data 	  = date('d/m/Y', strtotime($ocorrencia->created_at));
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
<style type="text/css">
	#employee_data_filter{
		display: none;
	}
</style>
<script>

	/* Custom filtering function which will search data in column four between two values */
	/*$.fn.dataTable.ext.search.push(
    	function( settings, data, dataIndex ) {
        	var start_date  = $('#start_date').val();
        	var end_date 	= $('#end_date').val();
        	var date 		=  data[4]; // use data for the age column
 
        	if (start_date != "" && end_date != ""){
            	return true;
        	}
        	return false;
    	}
	);

    $(document).ready(function(){
*/
    	/*$('#start_date').datepicker({
    		todayBtn:'linked',
    		format: "dd/mm/yyyy",
    		autoclose: true
    	});

    	$('#end_date').datepicker({
    		todayBtn:'linked',
    		format: "dd/mm/yyyy",
    		autoclose: true
    	});

    	$("#start_date").on("dp.change", function (e) {
            $('#end_date').data("DateTimePicker").minDate(e.date);
        });
        $("#end_date").on("dp.change", function (e) {
            $('#start_date').data("DateTimePicker").maxDate(e.date);
        });*/
    
/*
 		$('#search').click(function(){
 			var table = $('#employee_data').DataTable();

  			$('#start_date').keyup( function() { table.draw(); } );
     		$('#end_date').keyup( function() { table.draw(); } );
  		});


    	$("#employee_data").DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Portuguese-Brasil.json"
            }
        });
    });*/




    $.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var start_date = $('#start_date').val();
        var end_date   = $('#end_date').val();
 
        if (start_date != "" && end_date != "")
        {
            return true;
        }
        return false;
    }
);
 
$(document).ready(function() {

    var table = $('#employee_data').DataTable({
    	"language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Portuguese-Brasil.json"
        }
    });
    
    $('#start_date').datepicker({
    	todayBtn:'linked',
		format: "dd/mm/yyyy",
		autoclose: true
	});

	$('#end_date').datepicker({
		todayBtn:'linked',
		format: "dd/mm/yyyy",
		autoclose: true
	});

    $('#search').click(function(){
    	table.draw();
    });
});
</script>
@endsection