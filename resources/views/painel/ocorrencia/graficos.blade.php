@extends('layouts.template')

@push('links')
	<link href="{{ asset('css/painel/formulario.css') }}" rel="stylesheet">
	<link href="{{ asset('css/painel/grafico.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{ asset('js/graficos.js') }}"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
@endpush

@section('content')
<div class="body-main">
	<header>
		<h2><i class="glyphicon glyphicon glyphicon-edit"></i> Gráficos</h2>
	</header>
	<div class="container body-main__main" style="height: auto;">
		<br>
		<div class="error-fieldset">
		</div>
		<div class="col-sm-12" style="margin-bottom: 20px;  z-index: 1;">
			<div class="input-datarange">
				<div class="col-sm-3">
					<label for="start_date">Data Inicial: <span class="notification-red">*</span></label>
					<input type="date" name="start_date" id="start_date" class="form-control">
				</div>
				<div class="col-sm-3">
					<label for="end_date">Data Final: <span class="notification-red">*</span></label>
					<input type="date" name="end_date" id="end_date" class="form-control">
				</div>
				<div class="col-sm-3">
				<br>
      				<input type="button" name="search" id="search" value="Buscar" class="btn btn-primary" style="font-size: 1em; margin-top: 3px;" />
     			</div>
			</div>
		</div>
	</div>
	<fieldset class="graficos">
	<div class="col-sm-12" style="margin-top: 150px;">
		<br>
		<div class="col-sm-6">
			<?php 
				$masculino = DB::table('pacientes')->join('ocorrencias', function ($join) {
            		$join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                 		->where('sexo','=', "Masculino");
        			})->get()->count();

				$feminino = DB::table('pacientes')->join('ocorrencias', function ($join) {
            		$join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                 		->where('sexo','=', "Feminino");
        			})->get()->count();
			?>

			<div id="chart_div" class="grafico-sexo" style="margin-top:  50px; width: 100%;"></div>
			<script type="text/javascript">
		    	// Load the Visualization API and the corechart package.
		      	google.charts.load('current', {'packages':['corechart']});

			      // Set a callback to run when the Google Visualization API is loaded.
			      google.charts.setOnLoadCallback(drawChart);

			      // Callback that creates and populates a data table,
		    	  // instantiates the pie chart, passes in the data and
		      	// draws it.
		      	function drawChart() {

			        // Create the data table.
		    	    var data = new google.visualization.DataTable();
		        	data.addColumn('string', 'Topping');
			        data.addColumn('number', 'Slices');
		    	    data.addRows([
		        		['Masculino', <?php echo $masculino; ?>],
		       		  	['Feminino', <?php echo $feminino ?>]
		        	]);

			        // Set chart options
			        var options = {'title':'Análise segundo o sexo dos pacientes atendidos',
		                       'height':590};

			        // Instantiate and draw our chart, passing in some options.
		    	    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
		        	chart.draw(data, options);
      			}
    		</script>
		</div>
		<div class="col-sm-6">
			<?php 
				$tecnico = DB::table('pacientes')->join('ocorrencias', function ($join) {
            		$join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                 		->where('perfil','=', "Técnico");
        			})->get()->count();

				$superior = DB::table('pacientes')->join('ocorrencias', function ($join) {
            		$join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                 		->where('perfil','=', "Superior");
        			})->get()->count();

				$terceirizado = DB::table('pacientes')->join('ocorrencias', function ($join) {
            		$join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                 		->where('perfil','=', "Terceirizado");
        			})->get()->count();

				$adm = DB::table('pacientes')->join('ocorrencias', function ($join) {
            		$join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                 		->where('perfil','=', "Tec Administrativo");
        			})->get()->count();

				$docente = DB::table('pacientes')->join('ocorrencias', function ($join) {
            		$join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                 		->where('perfil','=', "Docente");
        			})->get()->count();
			?>

			<div id="columnchart_material" style="width: 100%; margin-top: 50px;"></div>

    		<script type="text/javascript">
      			google.charts.load('current', {'packages':['bar']});
      			google.charts.setOnLoadCallback(drawChart);

      			function drawChart() {
        			var data = google.visualization.arrayToDataTable([
          				['Funções', 'Técnico', 'Superior', 'Terceirizado', 'Tec ADM', 'Docente'],
          				['2017', <?php echo $tecnico ?>, <?php echo $superior ?>, <?php echo $terceirizado ?>, <?php echo $adm ?>, <?php echo $docente ?>]
        			]);

        			var options = {
          				chart: {
            				title: 'Análise segundo as funções:'
          				},
          				'height':590
          			};

        			var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

	        		chart.draw(data, google.charts.Bar.convertOptions(options));
      				}
    		</script>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="col-sm-6">
			<?php 
				$hospital = DB::table('ocorrencias')->where('encaminhamento','=', "Hospital")->get()->count();

				$esf = DB::table('ocorrencias')->where('encaminhamento','=', "ESF")->get()->count();

				$familia = DB::table('ocorrencias')->where('encaminhamento','=', "Família")->get()->count();

				$psicologa = DB::table('ocorrencias')->where('encaminhamento','=', "Psicóloga")->get()->count();
			?>

			<div id="columnchart_material2" style="width: 100%; margin-top: 30px;"></div>

    		<script type="text/javascript">
      			google.charts.load('current', {'packages':['bar']});
      			google.charts.setOnLoadCallback(drawChart);

      			function drawChart() {
        			var data = google.visualization.arrayToDataTable([
          				['Encaminhamento', 'Hospital', 'ESF', 'Família', 'Psicóloga'],
          				['2017', <?php echo $hospital ?>, <?php echo $esf ?>, <?php echo $familia ?>, <?php echo $psicologa ?>]
        			]);

        			var options = {
          				chart: {
            				title: 'Análise segundo o tipo de encaminhamento:'
          				},
          				'height': 590
        			};

        			var chart = new google.charts.Bar(document.getElementById('columnchart_material2'));

	        		chart.draw(data, google.charts.Bar.convertOptions(options));
      				}
    		</script>
		</div>

		<div class="col-sm-6">
			<?php 
				$orientacoes = DB::table('ocorrencias')->where('conduta_enfermagem','=', "Orientações")->get()->count();

				$procedimentos = DB::table('ocorrencias')->where('conduta_enfermagem','=', "Procedimentos/Observação")->get()->count();

				$encaminhamentos = DB::table('ocorrencias')->where('conduta_enfermagem','=', "Encaminhamentos")->get()->count();
			?>

			<div id="columnchart_material3" style="width: 100%; margin-top: 30px;"></div>

    		<script type="text/javascript">
      			google.charts.load('current', {'packages':['bar']});
      			google.charts.setOnLoadCallback(drawChart);

      			function drawChart() {
        			var data = google.visualization.arrayToDataTable([
          				['Conduta Enfermagem', 'Orientações', 'Procedimentos/Observação', 'Encaminhamentos'],
          				['2017', <?php echo $orientacoes ?>, <?php echo $procedimentos ?>, <?php echo $encaminhamentos ?>]
        			]);

        			var options = {
          				chart: {
            				title: 'Análise segundo as condutas de enfermagem:'
          				},
          				'height': 590
        			};

        			var chart = new google.charts.Bar(document.getElementById('columnchart_material3'));

	        		chart.draw(data, google.charts.Bar.convertOptions(options));
      				}
    		</script>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="col-sm-12">

			<?php 
				$exame_preventivo = DB::table('ocorrencias')->where('tipo_queixa','=', "Exame Preventivo")->get()->count();

				$febre = DB::table('ocorrencias')->where('tipo_queixa','=', "Febre")->get()->count();

				$picada_inseto = DB::table('ocorrencias')->where('tipo_queixa','=', "Picada Inseto")->get()->count();

				$geniturinaria = DB::table('ocorrencias')->where('tipo_queixa','=', "Geniturinária")->get()->count();

				$orientacao = DB::table('ocorrencias')->where('tipo_queixa','=', "Orientação")->get()->count();

				$ocular = DB::table('ocorrencias')->where('tipo_queixa','=', "Ocular/Auricular")->get()->count();

				$colica = DB::table('ocorrencias')->where('tipo_queixa','=', "Cólica Mestrual")->get()->count();

				$lesao = DB::table('ocorrencias')->where('tipo_queixa','=', "Lesão")->get()->count();

				$gastrintestinal = DB::table('ocorrencias')->where('tipo_queixa','=', "Gastrintestinal")->get()->count();

				$tontura = DB::table('ocorrencias')->where('tipo_queixa','=', "Tontura/Mal Estar")->get()->count();

				$cefaleia = DB::table('ocorrencias')->where('tipo_queixa','=', "Cefaléia")->get()->count();
			?>

			<div id="top_x_div" style="width: 100%; height: 500px; margin-top: 30px;"></div>

			<script type="text/javascript">
      			google.charts.load('current', {'packages':['bar']});
      			google.charts.setOnLoadCallback(drawStuff);

      			function drawStuff() {
        			var data = new google.visualization.arrayToDataTable([
          				['Opening Move', 'Porcentagem'],
          				["Exame Preventivo",  <?php echo $exame_preventivo ?>],
          				["Febre", 			  <?php echo $febre ?>],
          				["Picada Inseto", 	  <?php echo $picada_inseto ?>],
          				["Geniturinária", 	  <?php echo $geniturinaria ?>],
          				["Orientação", 	      <?php echo $orientacao ?>],
          				["Ocular/Auricular",  <?php echo $ocular ?>],
          				["Cólica Mestrual",   <?php echo $colica ?>],
          				["Lesão", 			  <?php echo $lesao ?>],
          				["Gastrintestinal",   <?php echo $gastrintestinal ?>],
          				["Tontura/Mal Estar", <?php echo $tontura ?>],
          				["Cefaléia",  		  <?php echo $cefaleia ?>]
        			]);

        			var options = {
          				title: 'Análise segundo as ocorrências:',
          				legend: { position: 'none' },
          				chart: { 	
          					title: 'Análise segundo as ocorrências:'},
          					bars: 'horizontal', // Required for Material Bar Charts.
          					axes: {
            					x: {
              						0: { side: 'top', label: 'Porcentagem'} // Top x-axis.
            					}
          					},
          					bar: { groupWidth: "90%" }
        			};

        			var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        			chart.draw(data, options);
      			};
    		</script>
		</div>
	</div>
	</fieldset>
</div>
@endsection