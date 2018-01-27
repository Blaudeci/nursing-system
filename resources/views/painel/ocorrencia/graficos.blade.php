@extends('layouts.template')

@push('links')
	<link href="{{ asset('css/painel/formulario.css') }}" rel="stylesheet">
	<link href="{{ asset('css/painel/grafico.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{ asset('js/graficos.js') }}"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
@endpush

@section('content')
<div class="body-main">
	<header>
		<h2><i class="glyphicon glyphicon glyphicon-edit"></i> Gráficos</h2>
	</header>
	<div class="container body-main__main" style="height: auto;">
		<br>
		<div class="col-sm-12">
			<p class="notification-red">Os campos que possuem (*) são obrigatórios.</p>
		</div>
		<div class="col-sm-12" style="margin-bottom: 20px;  z-index: 1;">
			<script type="text/javascript">
				function print(){
		   			var conteudo = document.getElementById('print').innerHTML;
		   			tela_impressao = window.open('about:blank');
		   			tela_impressao.document.write(conteudo);
		   			tela_impressao.window.print();
		   			tela_impressao.window.close();
				}
			</script>

			<form method="post" action="{{ route('graficos.store') }}">
				{{ csrf_field() }}
				<div class="col-sm-3">
					<label for="start_date">Data Inicial: <span class="notification-red">*</span></label>
					<input type="date" name="start_date" id="start_date" class="form-control" @if ($start_date != '')  value="{{$start_date}}" @endif>
				</div>
				<div class="col-sm-3">
					<label for="end_date">Data Final: <span class="notification-red">*</span></label>
					<input type="date" name="end_date" id="end_date" class="form-control" @if ($end_date != '')  value="{{$end_date}}" @endif>
				</div>
				<div class="col-sm-3">
				<br>
      				<input type="submit" id="search" value="Buscar" class="btn btn-primary" style="font-size: 1em; margin-top: 3px;" />
     			</div>
     			<div class="col-sm-3">
     				<button class="btn btn-lg btn-primary" id="button-print__one" onclick="print();"><i class="glyphicon glyphicon-print"></i> Imprimir</button>
     			</div>
     		</form>
		</div>
	</div>

	<fieldset class="graficos" id="print">
		@if($masculino == 0 && $feminino == 0 && $tecnico == 0 && $superior == 0 && $terceirizado == 0 && $adm == 0 && $docente == 0 && $hospital == 0 && $esf == 0 && $familia == 0 && $psicologa == 0 && $orientacoes == 0 && $procedimentos == 0 && $encaminhamentos == 0 && $exame_preventivo == 0 && $febre == 0 && $picada_inseto == 0 && $geniturinaria == 0 && $orientacao == 0 && $ocular == 0 && $colica == 0 && $lesao == 0 && $gastrintestinal == 0 && $tontura == 0 && $cefaleia == 0)

			<div class="col-sm-12 container" id="result_not_found">
				<br>
				<br>
				<strong>Resultado não encontrado!</strong>
			</div>
		@else
			<div class="col-sm-6 chart_sexo">
				<div id="chart_sexo" style="width: 100%; height: 400px; margin: 0 auto;"></div>

				<script type="text/javascript">
					// Make monochrome colors and set them as default for all pies
					Highcharts.getOptions().plotOptions.pie.colors = (function () {
					    var colors = [],
					        base = Highcharts.getOptions().colors[0],
					        i;

					    for (i = 0; i < 10; i += 1) {
					        // Start out with a darkened base color (negative brighten), and end
					        // up with a much brighter color
					        colors.push(Highcharts.Color(base).brighten((i - 3) / 7).get());
					    }
					    return colors;
					}());

					// Build the chart
					Highcharts.chart('chart_sexo', {
					    chart: {
					        plotBackgroundColor: null,
					        plotBorderWidth: null,
					        plotShadow: false,
					        type: 'pie'
					    },
					    title: {
					        text: 'Análise segundo o sexo dos pacientes atendidos'
					    },
					    tooltip: {
					        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
					    },
					    plotOptions: {
					        pie: {
					            allowPointSelect: true,
					            cursor: 'pointer',
					            dataLabels: {
					                enabled: true,
					                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
					                style: {
					                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
					                }
					            }
					        }
					    },
					    series: [{
					        name: 'Porcentagem',
					        data: [
					            { name: 'Masculino', y: {{$masculino}} },
					            { name: 'Feminino', y: {{$feminino}} },
					        ]
					    }]
					});
				</script>
			</div>
			<div class="col-sm-6 chart_funcoes">
				<div id="chart_funcoes" style="width: 100%; height: 400px; margin: 0 auto;"></div>

	    		<script type="text/javascript">
	      			Highcharts.chart('chart_funcoes', {
					    chart: {
					        type: 'column'
					    },
					    title: {
					        text: 'Análise segundo as funções'
					    },
					    xAxis: {
					        type: 'category',
					        labels: {
					            rotation: -45,
					            style: {
					                fontSize: '13px',
					                fontFamily: 'Verdana, sans-serif'
					            }
					        }
					    },
					    yAxis: {
					        min: 0,
					        title: {
					            text: 'Funções'
					        }
					    },
					    legend: {
					        enabled: false
					    },
					    series: [{
					        name: 'Quantidade',
					        data: [
					            ['Técnico', {{$tecnico}}],
					            ['Superior', {{$superior}}],
					            ['Terceirizado', {{$terceirizado}}],
					            ['Tec ADM', {{$adm}}],
					            ['Docente', {{$docente}}]
					        ],
					        dataLabels: {
					            enabled: true,
					            rotation: -90,
					            color: '#FFFFFF',
					            align: 'right',
					            format: '{point.y:.1f}', // one decimal
					            y: 10, // 10 pixels down from the top
					            style: {
					                fontSize: '13px',
					                fontFamily: 'Verdana, sans-serif'
					            }
					        }
					    }]
					});
	    		</script>
			</div>
			<div class="col-sm-6 chart_encaminhamentos">
				<div id="chart_encaminhamentos" style="width: 100%; height: 400px; margin: 0 auto"></div>

				<script type="text/javascript">
					Highcharts.chart('chart_encaminhamentos', {

				    	title: {
				        	text: 'Análise segundo o tipo de encaminhamentos'
				    	},
				    	xAxis: {
				       		categories: ['Hospital', 'ESF', 'Família', 'Psicóloga']
				    	},

				    	series: [{
				        	type: 'column',
				        	colorByPoint: true,
				        	data: [{{$hospital}}, {{$esf}}, {{$familia}}, {{$psicologa}}],
				        	showInLegend: false
				   		}]
					});
				</script>
			</div>
			<div class="col-sm-6 chart_condutas">
				<div id="chart_condutas" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

				<script type="text/javascript">
					Highcharts.chart('chart_condutas', {

				    	title: {
				        	text: 'Análise segundo as condutas de enfermagem'
				    	},
				    	xAxis: {
				       		categories: ['Orientações', 'Procedimentos/Observação', 'Encaminhamentos']
				    	},

				    	series: [{
				        	type: 'column',
				        	colorByPoint: true,
				        	data: [{{$orientacoes}}, {{$procedimentos}}, {{$encaminhamentos}}],
				        	showInLegend: false
				   		}]
					});
				</script>
			</div>
			<div class="col-sm-12 chart_ocorrencia">
				<div id="chart_ocorrencia"></div>

				<script type="text/javascript">
					var chart = Highcharts.chart('chart_ocorrencia', {


					    title: {
					        text: 'Análise segundo as ocorrências'
					    },

					    xAxis: {
					        categories: ['Exame Preventivo', 'Febre', 'Picada Inseto', 'Geniturinária', 'Orientação', 'Ocular/Auricular', 'Cólica Mestrual', 'Lesão', 'Gastrintestinal', 'Tontura/Mal Estar', 'Cefaléia']
					    },

					    series: [{
					        type: 'column',
					        colorByPoint: true,
					        data: [{{$exame_preventivo}}, {{$febre}}, {{$picada_inseto}}, {{$geniturinaria}}, {{$orientacao}}, {{$ocular}}, {{$colica}}, {{$lesao}}, {{$gastrintestinal}}, {{$tontura}}, {{$cefaleia}}],
					        showInLegend: false
					    }]
					});

					chart.update({
	        			chart: {
	            			inverted: true,
	            			polar: false
	        			},
	        			subtitle: {
	            			text: 'Inverted'
	       				}
	    			});
				</script>
			</div>
		@endif
	</fieldset>
</div>
@endsection