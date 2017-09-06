@extends('layouts.template')

@push('links')
	<link href="{{ asset('css/painel/formulario.css') }}" rel="stylesheet">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://www.position-absolute.com/creation/print/jquery.printPage.js"></script>
@endpush

@section('content')
<div class="body-main body-main__patient">
	<header>
		<h2><i class="glyphicon glyphicon-eye-close"></i> View Paciente</h2>
	</header>
	<div class="container body-main__main">
	<script type="text/javascript">
		function cont(){
		   var conteudo = document.getElementById('print').innerHTML;
		   tela_impressao = window.open('about:blank');
		   tela_impressao.document.write(conteudo);
		   tela_impressao.window.print();
		   tela_impressao.window.close();
		}
	</script>

	<button class="btn btn-lg btn-primary" style="margin-top: 10px; float: right;" onclick="cont();"><i class="glyphicon glyphicon-print" ></i> Imprimir</button>

		<div class="body-main__form">
			<div class="body-main__show" id="print">
				<div class="row">
					<div class="col-sm-12 form-group">
						<div class="col-sm-12">
							<h1>Dados Pessoais</h1>
						</div>
					</div>
					<br>
					<div class="col-sm-12 form-group">
						<div class="col-sm-5 form-group">
							<label>Nome:</label>
							<br>
							<abbr>{{$pacient->nome}}</abbr>
						</div>
						<div class="col-sm-2 form-group">
							<label>Data Nasc.:</label>
							<br>
							<abbr>{{$pacient->data_nasc}}</abbr>
						</div>
						<div class="col-sm-3 form-group">
							<label>Condições de Moradia:</label>
							<br>
							<abbr>{{$pacient->condicao_moradia}}</abbr>
						</div>
						<div class="col-sm-2 form-group">
							<label>Sexo:</label>
							<br>
							<abbr>{{$pacient->sexo}}</abbr>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-5 form-group">
							<label>E-mail: </label>
							<br>
							<abbr>{{$pacient->email}}</abbr>
						</div>
						<div class="col-sm-2 form-group">
							<label for="perfil">Perfil:</label>
							<br>
							<abbr>{{$pacient->perfil}}</abbr>
						</div>
						<div class="col-sm-3 form-group">
							<label>Religião:</label>
							<br>
							<abbr>{{$pacient->religiao}}</abbr>
						</div>
						<div class="col-sm-2 form-group">
							<label>Estado Civil:</label>
							<br>
							<abbr>{{$pacient->estado_civil}}</abbr>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-5 form-group">
							<label>Endereço:</label>
							<br>
							<abbr>{{$pacient->endereco}}</abbr>
						</div>
						<div class="col-sm-2 form-group">
							<label>Nº:</label>
							<br>
							<abbr>{{$pacient->numero_casa}}</abbr>
						</div>
						<div class="col-sm-3 form-group">
							<label>CEP:</label>
							<br>
							<abbr>{{$pacient->cep}}</abbr>
						</div>
						<div class="col-sm-2 form-group">
							<label>UF:</label>
							<br>
							<abbr>{{$pacient->uf}}</abbr>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-5 form-group">
							<label>Curso:</label>
							<br>
							<abbr>{{$pacient->nome_curso}}</abbr>
						</div>
						<div class="col-sm-2 form-group">
							<label>Semestre:</label>
							<br>
							<abbr>{{$pacient->semestre_curso}}</abbr>
						</div>
						<div class="col-sm-2 form-group">
							<label>Período:</label>
							<br>
							<abbr>{{$pacient->periodo_curso}}</abbr>
						</div>
						<div class="col-sm-3 form-group">
							<label>Moradia Estudantil:</label>
							<br>
							<abbr>{{$pacient->moradia_estudantil}}</abbr>
						</div>
					</div>
				</div>
				<hr class="hrs">
				<div class="col-sm-12 form-group">
					<h1>
						Responsável a serem Contactados em Casos de Urgência ou Emergência
					</h1>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-4 form-group">
						<label>Nome Responsavel:</label>
						<br>
						<abbr>{{$contact->nome_resp_one}}</abbr>
					</div>
					<div class="col-sm-2 form-group">
						<label>Parentesco:</label>
						<br>
						<abbr>{{$contact->parentesco_resp_one}}</abbr>
					</div>
					<div class="col-sm-3 form-group">
						<label>Fone:</label>
						<br>
						<abbr>{{$contact->fone_resp_one}}</abbr>
					</div>
					<div class="col-sm-3 form-group">
						<label>Cel:</label>
						<br>
						<abbr>{{$contact->cel_resp_one}}</abbr>
					</div>
				</div>
				@if($contact->nome_resp_two != null || $contact->nome_resp_two != "" || $contact->parentesco_resp_two != null || $contact->parentesco_resp_two != ""
				|| $contact->fone_resp_two != null || $contact->fone_resp_two != "" || 
				$contact->cel_resp_two != null || $contact->cel_resp_two != "")
					<div class="col-sm-12 form-group">
						<div class="col-sm-4 form-group">
							<label>Nome Responsavel:</label>
							<br>
							<abbr>{{$contact->nome_resp_two}}</abbr>
						</div>
						<div class="col-sm-2 form-group">
							<label>Parentesco:</label>
							<br>
							<abbr>{{$contact->parentesco_resp_two}}</abbr>
						</div>
						<div class="col-sm-3 form-group">
							<label>Fone:</label>
							<br>
							<abbr>{{$contact->fone_resp_two}}</abbr>
						</div>
						<div class="col-sm-3 form-group">
							<label>Cel:</label>
							<br>
							<abbr>{{$contact->cel_resp_two}}</abbr>
						</div>
					</div>
				@endif
				@if($contact->nome_resp_three != null || $contact->nome_resp_three != "" || 
				$contact->parentesco_resp_three != null || $contact->parentesco_resp_three != ""
				|| $contact->fone_resp_three != null || $contact->fone_resp_three != "" || 
				$contact->cel_resp_three != null || $contact->cel_resp_three != "")
					<div class="col-sm-12 form-group">
						<div class="col-sm-4 form-group">
							<label>Nome Responsavel:</label>
							<br>
							<abbr>{{$contact->nome_resp_three}}</abbr>
						</div>
						<div class="col-sm-2 form-group">
							<label>Parentesco:</label>
							<br>
							<abbr>{{$contact->parentesco_resp_three}}</abbr>
						</div>
						<div class="col-sm-3 form-group">
							<label>Fone:</label>
							<br>
							<abbr>{{$contact->fone_resp_three}}</abbr>
						</div>
						<div class="col-sm-3 form-group">
							<label>Cel:</label>
							<br>
							<abbr>{{$contact->cel_resp_three}}</abbr>
						</div>
					</div>
				@endif
				<hr class="hrs">
				<div class="col-sm-12 form-group">
					<h1>
						Antecedentes e Eventos Fisiológicos/Patológicos
					</h1>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-6 form-group">
						<label>Outras Doenças:</label>
						<br>
						<abbr>{{$fisiologico->outras_doencas}}</abbr>
					</div>
					<div class="col-sm-6 form-group">
						<label>Uso de medicação continua:</label>
						<br>
						<abbr>{{$fisiologico->medicacao_continua}}</abbr>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-6 form-group">
						<label>Cirurgias Anteriores:</label>
						<br>
						<abbr>{{$fisiologico->cirurgias_anteriores}}</abbr>
					</div>
					<div class="col-sm-6 form-group">
						<label>Internações:</label>
						<br>
						<abbr>{{$fisiologico->internacoes}}</abbr>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-4 form-group">
						<label>Alergias:</label>
						<br>
						<abbr>{{$fisiologico->alergias}}</abbr>
					</div>
					<div class="col-sm-4 form-group">
						<label>Primeira Mestruação:</label>
						<br>
						<abbr>{{$fisiologico->primeira_mestruacao}}</abbr>
					</div>
					<div class="col-sm-4 form-group">
						<label>Queixas:</label>
						<br>
						<abbr>{{$fisiologico->queixas}}</abbr>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-4 form-group">
						<label>Gesta:</label>
						<br>
						<abbr>{{$fisiologico->gesta}}</abbr>
					</div>
					<div class="col-sm-4 form-group">
						<label>Para:</label>
						<br>
						<abbr>{{$fisiologico->para}}</abbr>
					</div>
					<div class="col-sm-4 form-group">
						<label>Aborto:</label>
						<br>
						<abbr>{{$fisiologico->aborto}}</abbr>
					</div>
				</div>
				<hr class="hrs">
				<div class="col-sm-12 form-group">
					<h1>
						História Mórbida Pregressa
					</h1>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-4">
						<h2>Doenças Pré-existentes</h2>
					</div>
					<div class="col-sm-4 form-group">
						<h2>
							Transtornos Alérgicos
						</h2>
					</div>
					<div class="col-sm-4 form-group">
						<h2>
							Fatores de Risco
						</h2>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-4">
						<div class="col-sm-12 form-group">
							<label>Acidente Vascular:</label>
							<br>
							<abbr>{{$morbida->acidente_vascular}}</abbr>
						</div>
						<div class="col-sm-12 form-group">
							<label>Câncer:</label>
							<br>
							<abbr>{{$morbida->cancer}}</abbr>
						</div>
						<div class="col-sm-12 form-group">
							<label>Hipertensão:</label>
							<br>
							<abbr>{{$morbida->hipertensao}}</abbr>
						</div>
						<div class="col-sm-12 form-group">
							<label>Cardiopatia:</label>
							<br>
							<abbr>{{$morbida->cardiopatia}}</abbr>
						</div>

						<div class="col-sm-12 form-group">
							<label>Diabetes:</label>
							<br>
							<abbr>{{$morbida->diabetes}}</abbr>
						</div>
						<div class="col-sm-12 form-group">
							<label>Doença Renal:</label>
							<br>
							<abbr>{{$morbida->doenca_renal}}</abbr>
						</div>
						<div class="col-sm-12 form-group">
							<label>Pneumopatia:</label>
							<br>
							<abbr>{{$morbida->pneumopatia}}</abbr>
						</div>
						<div class="col-sm-12 form-group">
							<label>Outros:</label>
							<br>
							<abbr>{{$morbida->outros_pre_existentes}}</abbr>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="col-sm-12 form-group">
							<label>Drogas:</label>
							<br>
							<abbr>{{$morbida->drogas}}</abbr>
						</div>
						<div class="col-sm-12 form-group">
							<label>Alimentos:</label>
							<br>
							<abbr>{{$morbida->alimentos}}</abbr>
						</div>
						<div class="col-sm-12 form-group">
							<label>Cosméticos:</label>
							<br>
							<abbr>{{$morbida->cosmeticos}}</abbr>
						</div>
						<div class="col-sm-12 form-group">
							<label>Esparadrapo:</label>
							<br>
							<abbr>{{$morbida->esparadrapo}}</abbr>
						</div>
						<div class="col-sm-12 form-group">
							<label>Lã:</label>
							<br>
							<abbr>{{$morbida->la_alergico}}</abbr>
						</div>
						<div class="col-sm-12 form-group">
							<label>Outros:</label>
							<br>
							<abbr>{{$morbida->outros_alergicos}}</abbr>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="col-sm-12 form-group">
							<label>Tabagismo:</label>
							<br>
							<abbr>{{$morbida->tabagismo}}</abbr>
						</div>
						<div class="col-sm-12 form-group">
							<label>Etilismo:</label>
							<br>
							<abbr>{{$morbida->etilismo}}</abbr>
						</div>
						<div class="col-sm-12 form-group">
							<label>Quimioterapia:</label>
							<br>
							<abbr>{{$morbida->quimioterapia}}</abbr>
						</div>
						<div class="col-sm-12 form-group">
							<label>Radioterapia:</label>
							<br>
							<abbr>{{$morbida->radioterapia}}</abbr>
						</div>
						<div class="col-sm-12 form-group">
							<label>Dependência Química:</label>
							<br>
							<abbr>{{$morbida->dependencia_quimica}}</abbr>
						</div>
						<div class="col-sm-12 form-group">
							<label>Violência:</label>
							<br>
							<abbr>{{$morbida->violencia}}</abbr>
						</div>
						<div class="col-sm-12 form-group">
							<label>Outros:</label>
							<br>
							<abbr>{{$morbida->outros_fatores_riscos}}</abbr>
						</div>
					</div>
				</div>
				<hr class="hrs">
				<div class="col-sm-12 form-group">
					<h1>
						Hábitos
					</h1>
				</div>	
				<div class="col-sm-12 form-group">
					<div class="col-sm-3">
						<label>Sono e Repouso:</label>
						<br>
						<abbr>{{$habito->sono_repouso}}</abbr>
					</div>

					<div class="col-sm-3">
						<label>Horas de Sono:</label>
						<br>
						<abbr>{{$habito->horas_sono}} horas/dia</abbr>
					</div>

					<div class="col-sm-3">
						<label>Atividade Física:</label>
						<br>
						<abbr>{{$habito->atividade_fisica}}</abbr>
					</div>

					<div class="col-sm-3">
						<label>Qtde Atividade Física:</label>
						<br>
						<abbr>{{$habito->qtde_atividade_fisica}} x semana</abbr>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<h3>Alimentos e liquidos ingeridos:</h3>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-4">
						<label>Frutas e verduras:</label>
						<br>
						<abbr>{{$habito->frutas_verduras}} x semana</abbr>
					</div>
					<div class="col-sm-4">
						<label>Carne vermelha:</label>
						<br>
						<abbr>{{$habito->carne_vermelha}} x semana</abbr>
					</div>
					<div class="col-sm-4">
						<label>Carne branca:</label>
						<br>
						<abbr>{{$habito->carne_branca}} x semana</abbr>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-4">
						<label>Suco:</label>
						<br>
						<abbr>{{$habito->suco_habitos}} copos/dia</abbr>
					</div>
					<div class="col-sm-4">
						<label>Água:</label>
						<br>
						<abbr>{{$habito->agua_habitos}} copos/dia</abbr>
					</div>
					<div class="col-sm-4">
						<label>Chá:</label>
						<br>
						<abbr>{{$habito->cha_habitos}} copos/dia</abbr>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-12">
						<label>Outras Informações:</label>
						<br>
						<abbr>{{$habito->outras_informacoes}}</abbr>
					</div>
					<br>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection