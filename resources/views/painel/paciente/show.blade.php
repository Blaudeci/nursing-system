@extends('layouts.template')

@push('links')
	<link href="{{ asset('css/painel/formulario.css') }}" rel="stylesheet">
	<link href="{{ asset('css/painel/show-print.css') }}" rel="stylesheet">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://www.position-absolute.com/creation/print/jquery.printPage.js"></script>
@endpush

@section('content')
<div class="body-main body-main__patient">
	<header>
		<h2><i class="glyphicon glyphicon-eye-open"></i> View Paciente</h2>
	</header>
	<div class="container body-main__main">
	<script type="text/javascript">
		function print(){
		   var conteudo = document.getElementById('print').innerHTML;
		   tela_impressao = window.open('about:blank');
		   tela_impressao.document.write(conteudo);
		   tela_impressao.window.print();
		   tela_impressao.window.close();
		}
	</script>
	<button class="btn btn-lg btn-primary button-print__one"  onclick="print();"><i class="glyphicon glyphicon-print"></i> Imprimir</button>
		<div class="body-main__form">
			<div class="body-main__show" id="print">
				<div class="row" id="dados-pessoais__part1">
					<div class="col-sm-12 form-group">
						<div class="col-sm-12">
							<h1>Dados Pessoais</h1>
						</div>
					</div>
					<br>
					<div class="col-sm-12 form-group">
						<div class="col-sm-5 form-group" id="nome">
							<label>Nome:</label>
							<br>
							<abbr>{{$paciente->nome}}</abbr>
						</div>
						<div class="col-sm-2 form-group" id="data_nasc">
							<label>Data Nasc.:</label>
							<br>
							<abbr>{{$paciente->data_nasc}}</abbr>
						</div>
						<div class="col-sm-3 form-group" id="condicoes_moradia">
							<label>Condições de Moradia:</label>
							<br>
							<abbr>{{$paciente->condicao_moradia}}</abbr>
						</div>
						<div class="col-sm-2 form-group" id="sexo">
							<label>Sexo:</label>
							<br>
							<abbr>{{$paciente->sexo}}</abbr>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="col-sm-5 form-group">
							<label>E-mail: </label>
							<br>
							@if($paciente->email != "")
								<abbr>{{$paciente->email}}</abbr>
							@else
								<abbr>Não respondido.</abbr>
							@endif
						</div>
						<div class="col-sm-2 form-group">
							<label for="perfil">Perfil:</label>
							<br>
							<abbr>{{$paciente->perfil}}</abbr>
						</div>
						<div class="col-sm-3 form-group">
							<label>Religião:</label>
							<br>
							<abbr>{{$paciente->religiao}}</abbr>
						</div>
						<div class="col-sm-2 form-group">
							<label>Estado Civil:</label>
							<br>
							<abbr>{{$paciente->estado_civil}}</abbr>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="col-sm-5 form-group">
							<label>Endereço:</label>
							<br>
							<abbr>{{$paciente->endereco}}</abbr>
						</div>
						<div class="col-sm-2 form-group">
							<label>Nº:</label>
							<br>
							<abbr>{{$paciente->numero_casa}}</abbr>
						</div>
						<div class="col-sm-3 form-group">
							<label>CEP:</label>
							<br>
							<abbr>{{$paciente->cep}}</abbr>
						</div>
						<div class="col-sm-2 form-group">
							<label>UF:</label>
							<br>
							<abbr>{{$paciente->uf}}</abbr>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="col-sm-5 form-group">
							<label>Curso:</label>
							<br>
							@if($paciente->nome_curso != "")
								<abbr>{{$paciente->nome_curso}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-2 form-group">
							<label>Semestre:</label>
							<br>
							@if($paciente->semestre_curso != "")
								<abbr>{{$paciente->semestre_curso}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-2 form-group">
							<label>Período:</label>
							<br>
							@if($paciente->periodo_curso != "")
								<abbr>{{$paciente->periodo_curso}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-3 form-group">
							<label>Moradia Estudantil:</label>
							<br>
							@if($paciente->moradia_estudantil != "")
								<abbr>{{$paciente->moradia_estudantil}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
					</div>
					<hr class="hrs">
				<div class="col-sm-12 form-group">
					<div class="col-sm-12">
						<h1>
							Responsável a serem Contactados em Casos de Urgência ou Emergência
						</h1>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-4 form-group">
						<label>Nome Responsavel:</label>
						<br>
						<abbr>{{$contato->nome_resp_one}}</abbr>
					</div>
					<div class="col-sm-2 form-group">
						<label>Parentesco:</label>
						<br>
						<abbr>{{$contato->parentesco_resp_one}}</abbr>
					</div>
					<div class="col-sm-3 form-group">
						<label>Fone:</label>
						<br>
						@if($contato->fone_resp_one != "")
							<abbr>{{$contato->fone_resp_one}}</abbr>
						@else
							<abbr>Não respondido.</abbr>
						@endif
					</div>
					<div class="col-sm-3 form-group">
						<label>Cel:</label>
						<br>
						<abbr>{{$contato->cel_resp_one}}</abbr>
					</div>
				</div>
				@if($contato->nome_resp_two != null || $contato->nome_resp_two != "" || $contato->parentesco_resp_two != null || $contato->parentesco_resp_two != ""
				|| $contato->fone_resp_two != null || $contato->fone_resp_two != "" || 
				$contato->cel_resp_two != null || $contato->cel_resp_two != "")
					<div class="col-sm-12 form-group">
						<div class="col-sm-4 form-group">
							<label>Nome Responsavel:</label>
							<br>
							@if($contato->nome_resp_two != "")
								<abbr>{{$contato->nome_resp_two}}</abbr>
							@else
								<abbr>Não respondido.</abbr>
							@endif
						</div>
						<div class="col-sm-2 form-group">
							<label>Parentesco:</label>
							<br>
							@if($contato->parentesco_resp_two != "")
								<abbr>{{$contato->parentesco_resp_two}}</abbr>
							@else
								<abbr>Não respondido.</abbr>
							@endif
						</div>
						<div class="col-sm-3 form-group">
							<label>Fone:</label>
							<br>
							@if($contato->fone_resp_two != "")
								<abbr>{{$contato->fone_resp_two}}</abbr>
							@else
								<abbr>Não respondido.</abbr>
							@endif
						</div>
						<div class="col-sm-3 form-group">
							<label>Cel:</label>
							<br>
							@if($contato->cel_resp_two != "")
								<abbr>{{$contato->cel_resp_two}}</abbr>
							@else
								<abbr>Não respondido.</abbr>
							@endif
						</div>
					</div>
				@endif
				@if($contato->nome_resp_three != null || $contato->nome_resp_three != "" || 
				$contato->parentesco_resp_three != null || $contato->parentesco_resp_three != ""
				|| $contato->fone_resp_three != null || $contato->fone_resp_three != "" || 
				$contato->cel_resp_three != null || $contato->cel_resp_three != "")
					<div class="col-sm-12 form-group">
						<div class="col-sm-4 form-group">
							<label>Nome Responsavel:</label>
							<br>
							@if($contato->nome_resp_three != "")
								<abbr>{{$contato->nome_resp_three}}</abbr>
							@else
								<abbr>Não respondido.</abbr>
							@endif
						</div>
						<div class="col-sm-2 form-group">
							<label>Parentesco:</label>
							<br>
							@if($contato->parentesco_resp_three != "")
								<abbr>{{$contato->parentesco_resp_three}}</abbr>
							@else
								<abbr>Não respondido.</abbr>
							@endif
						</div>
						<div class="col-sm-3 form-group">
							<label>Fone:</label>
							<br>
							@if($contato->fone_resp_three != "")
								<abbr>{{$contato->fone_resp_three}}</abbr>
							@else
								<abbr>Não respondido.</abbr>
							@endif
						</div>
						<div class="col-sm-3 form-group">
							<label>Cel:</label>
							<br>
							@if($contato->cel_resp_three != "")
								<abbr>{{$contato->cel_resp_three}}</abbr>
							@else
								<abbr>Não respondido.</abbr>
							@endif
						</div>
					</div>
				@endif
				<hr class="hrs">
				<div class="col-sm-12 form-group">
					<div class="col-sm-12">
						<h1>
							Antecedentes e Eventos Fisiológicos/Patológicos
						</h1>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-6 form-group">
						<label>Outras Doenças:</label>
						<br>
						@if($fisiologico->outras_doencas != "")
							<abbr>{{$fisiologico->outras_doencas}}</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
					<div class="col-sm-6 form-group">
						<label>Uso de medicação continua:</label>
						<br>
						@if($fisiologico->medicacao_continua != "")
							<abbr>{{$fisiologico->medicacao_continua}}</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-6 form-group">
						<label>Cirurgias Anteriores:</label>
						<br>
						@if($fisiologico->cirurgias_anteriores != "")
							<abbr>{{$fisiologico->cirurgias_anteriores}}</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
					<div class="col-sm-6 form-group">
						<label>Internações:</label>
						<br>
						@if($fisiologico->internacoes != "")
							<abbr>{{$fisiologico->internacoes}}</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-4 form-group">
						<label>Alergias:</label>
						<br>
						@if($fisiologico->alergias != "")
							<abbr>{{$fisiologico->alergias}}</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
					<div class="col-sm-4 form-group">
						<label>Primeira Mestruação:</label>
						<br>
						@if($fisiologico->primeira_mestruacao != "")
							<abbr>{{$fisiologico->primeira_mestruacao}}</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
					<div class="col-sm-4 form-group">
						<label>Queixas:</label>
						<br>
						@if($fisiologico->queixas != "")
							<abbr>{{$fisiologico->queixas}}</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-4 form-group">
						<label>Gesta:</label>
						<br>
						@if($fisiologico->gesta != "")
							<abbr>{{$fisiologico->gesta}}</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
					<div class="col-sm-4 form-group">
						<label>Para:</label>
						<br>
						@if($fisiologico->para != "")
							<abbr>{{$fisiologico->para}}</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
					<div class="col-sm-4 form-group">
						<label>Aborto:</label>
						<br>
						@if($fisiologico->aborto != "")
							<abbr>{{$fisiologico->aborto}}</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
				</div>
				<hr class="hrs">
				<div class="col-sm-12 form-group">
					<div class="col-sm-12">
						<h1>
							História Mórbida Pregressa
						</h1>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-4">
						<div class="col-sm-12 form-group">
							<h2>Doenças Pré-existentes</h2>
						</div>
						<div class="col-sm-12 form-group">
							<label>Acidente Vascular:</label>
							<br>
							@if($morbida->acidente_vascular != "")
								<abbr>{{$morbida->acidente_vascular}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Câncer:</label>
							<br>
							@if($morbida->cancer != "")
								<abbr>{{$morbida->cancer}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Hipertensão:</label>
							<br>
							@if($morbida->hipertensao != "")
								<abbr>{{$morbida->hipertensao}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Cardiopatia:</label>
							<br>
							@if($morbida->cardiopatia != "")
								<abbr>{{$morbida->cardiopatia}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif

						</div>

						<div class="col-sm-12 form-group">
							<label>Diabetes:</label>
							<br>
							@if($morbida->diabetes != "")
								<abbr>{{$morbida->diabetes}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Doença Renal:</label>
							<br>
							@if($morbida->doenca_renal != "")
								<abbr>{{$morbida->doenca_renal}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Pneumopatia:</label>
							<br>
							@if($morbida->pneumopatia != "")
								<abbr>{{$morbida->pneumopatia}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Outros:</label>
							<br>
							@if($morbida->outros_pre_existentes != "")
								<abbr>{{$morbida->outros_pre_existentes}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
					</div>

					<div class="col-sm-4">
						<div class="col-sm-12 form-group">
							<h2>
								Transtornos Alérgicos
							</h2>
						</div>
						<div class="col-sm-12 form-group">
							<label>Drogas:</label>
							<br>
							@if($morbida->drogas != "")
								<abbr>{{$morbida->drogas}}</abbr>
							@else 
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Alimentos:</label>
							<br>
							@if($morbida->alimentos != "")
								<abbr>{{$morbida->alimentos}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Cosméticos:</label>
							<br>
							@if($morbida->cosmeticos != "")
								<abbr>{{$morbida->cosmeticos}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Esparadrapo:</label>
							<br>
							@if($morbida->esparadrapo != "")
								<abbr>{{$morbida->esparadrapo}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Lã:</label>
							<br>
							@if($morbida->la_alergico != "")
								<abbr>{{$morbida->la_alergico}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Outros:</label>
							<br>
							@if($morbida->outros_alergicos != "")
								<abbr>{{$morbida->outros_alergicos}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
					</div>

					<div class="col-sm-4">
						<div class="col-sm-12 form-group">
							<h2>
								Fatores de Risco
							</h2>
						</div>
						<div class="col-sm-12 form-group">
							<label>Tabagismo:</label>
							<br>
							@if($morbida->tabagismo != "")
								<abbr>{{$morbida->tabagismo}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Etilismo:</label>
							<br>
							@if($morbida->etilismo != "")
								<abbr>{{$morbida->etilismo}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Quimioterapia:</label>
							<br>
							@if($morbida->quimioterapia != "")
								<abbr>{{$morbida->quimioterapia}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Radioterapia:</label>
							<br>
							@if($morbida->radioterapia != "")
								<abbr>{{$morbida->radioterapia}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Dependência Química:</label>
							<br>
							@if($morbida->dependencia_quimica != "")
								<abbr>{{$morbida->dependencia_quimica}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Violência:</label>
							<br>
							@if($morbida->violencia != "")
								<abbr>{{$morbida->violencia}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Outros:</label>
							<br>
							@if($morbida->outros_fatores_riscos != "")
								<abbr>{{$morbida->outros_fatores_riscos}}</abbr>
							@else
								<abbr>Não preenchido.</abbr>
							@endif
						</div>
					</div>
				</div>
				<hr class="hrs">
				<div class="col-sm-12 form-group">
					<div class="col-sm-12">
						<h1>
							Hábitos
						</h1>
					</div>
				</div>	
				<div class="col-sm-12 form-group">
					<div class="col-sm-3">
						<label>Sono e Repouso:</label>
						<br>
						@if($habito->sono_repouso != "")
							<abbr>{{$habito->sono_repouso}}</abbr>
						@else
							<abbr>Satisfatório</abbr>
						@endif
					</div>
					<div class="col-sm-3">
						<label>Horas de Sono:</label>
						<br>
						@if($habito->horas_sono != "")
							<abbr>{{$habito->horas_sono}} horas/dia</abbr>
						@else
							<abbr>00:00</abbr>
						@endif
					</div>

					<div class="col-sm-3">
						<label>Atividade Física:</label>
						<br>
						@if($habito->atividade_fisica != "")
							<abbr>{{$habito->atividade_fisica}}</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>

					<div class="col-sm-3">
						<label>Qtde Atividade Física:</label>
						<br>
						@if($habito->qtde_atividade_fisica != "")
							<abbr>{{$habito->qtde_atividade_fisica}} x semana</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-12">
						<h2>Alimentos e liquidos ingeridos:</h2>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-4 form-group">
						<label>Frutas e verduras:</label>
						<br>
						@if($habito->frutas_verduras != "")
							<abbr>{{$habito->frutas_verduras}} x semana</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
					<div class="col-sm-4 form-group">
						<label>Carne vermelha:</label>
						<br>
						@if($habito->carne_vermelha != "")
							<abbr>{{$habito->carne_vermelha}} x semana</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
					<div class="col-sm-4 form-group">
						<label>Carne branca:</label>
						<br>
						@if($habito->carne_branca)
							<abbr>{{$habito->carne_branca}} x semana</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-4 form-group">
						<label>Suco:</label>
						<br>
						@if($habito->suco_habitos)
							<abbr>{{$habito->suco_habitos}} copos/dia</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
					<div class="col-sm-4 form-group">
						<label>Água:</label>
						<br>
						@if($habito->agua_habitos != "")
							<abbr>{{$habito->agua_habitos}} copos/dia</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
					<div class="col-sm-4 form-group">
						<label>Chá:</label>
						<br>
						@if($habito->cha_habitos != "")
							<abbr>{{$habito->cha_habitos}} copos/dia</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-12 form-group">
						<label>Outras Informações:</label>
						<br>
						@if($habito->outras_informacoes != "")
							<abbr>{{$habito->outras_informacoes}}</abbr>
						@else
							<abbr>Não preenchido.</abbr>
						@endif
					</div>
					<br>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-12">
						<button class="btn btn-lg btn-primary button-print__two"  onclick="print();"><i class="glyphicon glyphicon-print"></i> Imprimir</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection