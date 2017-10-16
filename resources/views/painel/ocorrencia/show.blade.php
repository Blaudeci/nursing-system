@extends('layouts.template')

@push('links')
	<link href="{{ asset('css/painel/formulario.css') }}" rel="stylesheet">
	<link href="{{ asset('css/painel/show-print__ocorrencia.css') }}" rel="stylesheet">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://www.position-absolute.com/creation/print/jquery.printPage.js"></script>
@endpush

@section('content')
<div class="body-main">
	<header>
		<h2><i class="glyphicon glyphicon-eye-open"></i> View Ocorrência</h2>
	</header>
	<div class="container body-main__main">
	<script type="text/javascript">

		$(function(){
		    $('#button-print__one').click(function(){
		        window.print();
		    });

		    $('#button-print__two').click(function(){
		        window.print();
		    });
		});
		
	</script>
	<button class="btn btn-lg btn-primary button-print__one" id="button-print__one"><i class="glyphicon glyphicon-print"></i> Imprimir</button>
		<div class="body-main__form">
			<div class="body-main__show" id="print">
				<div class="col-sm-12 form-group">
					<div class="col-sm-12">
						<h1>Fomulário Ocorrência</h1>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-5 form-group" id="nome">
						<label>Nome:</label>
						<br>
						<abbr>{{$paciente->nome}}</abbr>
					</div>
					<div class="col-sm-2 form-group" id="sexo">
						<label>Sexo:</label>
						<br>
						<abbr>{{$paciente->sexo}}</abbr>
					</div>
					<div class="col-sm-3 form-group" id="perfil">
						<label>Perfil:</label>
						<br>
						<abbr>{{$paciente->perfil}}</abbr>
					</div>
					<div class="col-sm-2 form-group" id="data_nasc">
						<label>Data Nasc.:</label>
						<br>
						<abbr>{{$paciente->data_nasc}}</abbr>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-4 form-group" id="acompanhante">
						<label>Acompanhamento:</label>
						<br>
						@if($ocorrencias->acompanhante != "")
							<abbr>{{$ocorrencias->acompanhante}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
					<div class="col-sm-4 form-group" id="encaminhamento">
						<label>Encaminhamento:</label>
						<br>
						@if($ocorrencias->encaminhamento != "")
							<abbr>{{$ocorrencias->encaminhamento}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
					<div class="col-sm-4 form-group" id="conduta_enfermagem">
						<label>Conduta de Enfermagem:</label>
						<br>
						@if($ocorrencias->conduta_enfermagem != "")
							<abbr>{{$ocorrencias->conduta_enfermagem}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-12 form-group" id="consulta_anterior">
						<label>Avaliação da consulta anterior:</label>
						<br>
						@if($ocorrencias->consulta_anterior != "")
							<abbr>{{$ocorrencias->consulta_anterior}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12">
					<hr class="hrs"/>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-12">
						<h1>Motivo consulta</h1>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-12" id="tipo_queixa">
						<label>Tipo da Queixa:</label>
						<br>
						@if($ocorrencias->tipo_queixa != "")
							<abbr>{{$ocorrencias->tipo_queixa}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-12" id="motivo_consulta">
						<label>Motivo da consulta/Queixa principal:</label>
						<br>
						@if($ocorrencias->motivo_consulta != "")
							<abbr>{{$ocorrencias->motivo_consulta}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12">
					<hr class="hrs"/>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-12">
						<h1>Exame Fisíco</h1>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-3 form-group" id="peso">
						<label>Peso:</label>
						<br>
						@if($ocorrencias->peso != "")
							<abbr>{{$ocorrencias->peso}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
					<div class="col-sm-3 form-group" id="altura">
						<label>Altura:</label>
						<br>
						@if($ocorrencias->altura != "")
							<abbr>{{$ocorrencias->altura}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
					<div class="col-sm-3 form-group" id="valor_imc">
						<label>Valor IMC:</label>
						<br>
						@if($ocorrencias->valor_imc != "")
							<abbr>{{$ocorrencias->valor_imc}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
					<div class="col-sm-3 form-group" id="imc">
						<label>IMC:</label>
						<br>
						@if($ocorrencias->imc != "")
							<abbr>{{$ocorrencias->imc}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-3 form-group" id="perimetro_abdominal">
						<label>Perimetro Abdominal:</label>
						<br>
						@if($ocorrencias->perimetro_abdominal != "")
							<abbr>{{$ocorrencias->perimetro_abdominal}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
					<div class="col-sm-3 form-group" id="pressao_arterial">
						<label>Pressão Arterial:</label>
						<br>
						@if($ocorrencias->pressao_arterial != "")
							<abbr>{{$ocorrencias->pressao_arterial}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
					<div class="col-sm-3 form-group" id="temperatura">
						<label>Temperatura:</label>
						<br>
						@if($ocorrencias->temperatura != "")
							<abbr>{{$ocorrencias->temperatura}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
					<div class="col-sm-3 form-group" id="frequencia_cardiaca">
						<label>Frequência Cardiaca:</label>
						<br>
						@if($ocorrencias->frequencia_cardiaca != "")
							<abbr>{{$ocorrencias->frequencia_cardiaca}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-3 form-group" id="frequencia_respiratoria">
						<label>Frequência Respiratória:</label>
						<br>
						@if($ocorrencias->frequencia_respiratoria != "")
							<abbr>{{$ocorrencias->frequencia_respiratoria}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
					<div class="col-sm-3 form-group" id="glicemia">
						<label>Glicemia:</label>
						<br>
						@if($ocorrencias->glicemia != "")
							<abbr>{{$ocorrencias->glicemia}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
					<div class="col-sm-4" id="estagio_tanner">
						<label>Avaliação dos Estágios de Tanner:</label>
						<br>
						@if($ocorrencias->estagio_tanner != "")
							<abbr>{{$ocorrencias->estagio_tanner}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-12 form-group" id="diagnostico_enfermagem">
						<label>Diagnósticos de Enfermagem:</label>
						<br>
						@if($ocorrencias->diagnostico_enfermagem != "")
							<abbr>{{$ocorrencias->diagnostico_enfermagem}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-12 form-group" id="prescricao_enfermagem">
						<label>Prescrição de Enfermagem:</label>
						<br>
						@if($ocorrencias->prescricao_enfermagem != "")
							<abbr>{{$ocorrencias->prescricao_enfermagem}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-12 form-group" id="evolucao_enfermagem">
						<label>Evolução de Enfermagem:</label>
						<br>
						@if($ocorrencias->evolucao_enfermagem != "")
							<abbr>{{$ocorrencias->evolucao_enfermagem}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-12 form-group" id="anotacao_enfermagem">
						<label>Anotação de Enfermagem:</label>
						<br>
						@if($ocorrencias->anotacao_enfermagem != "")
							<abbr>{{$ocorrencias->anotacao_enfermagem}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-12">
						<button class="btn btn-lg btn-primary button-print__two"  id="button-print__two"><i class="glyphicon glyphicon-print"></i> Imprimir</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection