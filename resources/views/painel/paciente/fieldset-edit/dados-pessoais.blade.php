<div class="row form-group hrs-bottom">
	<div class="col-sm-12">
		<div class="col-sm-12">
			<h1>Dados Pessoais</h1>
		</div>
	</div>
</div>
<div class="col-sm-12">
	@if(Session::has('message'))
		<script type="text/javascript">
			swal("Paciente editado com sucesso!", "", "success");
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
<div class="row form-group">
	<div class="col-sm-12">
		<div class="col-sm-12">
			<p class="notification-red">Os campos que possuem (*) são obrigatórios.</p>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-5 form-group">
			<label for="nome">Nome: <span class="notification-red">*</span></label>
			<input type="text" class="form-control" id="nome" name="nome" maxlength="100" value="{{$paciente->nome}}" />
		</div>
		<div class="col-sm-2 form-group">
			<label for="data_nasc">Data Nasc.: <span class="notification-red">*</span></label>
			<input type="text" class="form-control input-data" id="data_nasc" name="data_nasc" placeholder="00/00/0000" value="{{$paciente->data_nasc}}">
		</div>
		<div class="col-sm-3 form-group">
			<label for="condicao_moradia">Condições de Moradia: <span class="notification-red">*</span></label>
			<select class="form-control" id="condicao_moradia" name="condicao_moradia">
				<option value="" hidden @if ($paciente->condicao_moradia == '')  selected="selected" @endif>Selecione</option>
				<option value="Urbano" @if($paciente->condicao_moradia == 'Urbano') selected="selected" @endif>Urbano</option>
                <option value="Rural" @if($paciente->condicao_moradia == 'Rural') selected="selected" @endif>Rural</option>
			</select>
		</div>

		<div class="col-sm-2 form-group">
			<label for="sexo">Sexo: <span class="notification-red">*</span></label>
			<select class="form-control" id="sexo" name="sexo">
				<option value="" hidden @if ($paciente->sexo == '')  selected="selected" @endif>Selecione</option>
				<option value="Masculino" @if ($paciente->sexo == 'Masculino') selected="selected" @endif>Masculino</option>
               	<option value="Feminino" @if ($paciente->sexo == 'Feminino') selected="selected" @endif>Feminino</option>
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4 form-group">
			<label for="email">E-mail: </label>
			<input type="text" class="form-control" id="email" name="email" maxlength="100" value="{{$paciente->email}}">
		</div>
		<div class="col-sm-3 form-group">
			<label for="perfil">Perfil: <span class="notification-red">*</span></label>
			<select class="form-control" id="perfil" name="perfil">
				<option value="" hidden @if ($paciente->perfil == '')  selected="selected" @endif>Selecione</option>
				<option value="Técnico" @if ($paciente->perfil == 'Técnico') selected="selected" @endif>Técnico</option>
				<option value="Superior" @if ($paciente->perfil == 'Superior') selected="selected" @endif>Superior</option>
				<option value="Docente" @if ($paciente->perfil == 'Docente') selected="selected" @endif>Docente</option>
				<option value="Terceirizado" @if ($paciente->perfil == 'Terceirizado') selected="selected" @endif>Terceirizado</option>
				<option value="Tec Administrativo" @if ($paciente->perfil == 'Tec Administrativo') selected="selected" @endif>Tec Administrativo</option>
			</select>
		</div>
		<div class="col-sm-3 form-group">
			<label for="religiao">Religião: <span class="notification-red">*</span></label>
			<select class="form-control" id="religiao" name="religiao">
				<option value="" hidden @if ($paciente->religiao == '')  selected="selected" @endif>Selecione</option>
				<option value="Cátolica" @if ($paciente->religiao == 'Cátolica') selected="selected" @endif>Cátolica</option>
				<option value="Evangélica" @if ($paciente->religiao == 'Evangélica') selected="selected" @endif>Evangélica</option>
				<option value="Espírita" @if ($paciente->religiao == 'Espírita') selected="selected" @endif>Espírita</option>
				<option value="Testemunhas de Jeová" @if ($paciente->religiao == 'Testemunhas de Jeová') selected="selected" @endif>Testemunhas de Jeová</option>
				<option value="Umbanda" @if ($paciente->religiao == 'Umbanda') selected="selected" @endif>Umbanda</option>
				<option value="Budismo" @if ($paciente->religiao == 'Budismo') selected="selected" @endif>Budismo</option>
				<option value="Judaísmo" @if ($paciente->religiao == 'Judaísmo') selected="selected" @endif>Judaísmo</option>
				<option value="Candomblé" @if ($paciente->religiao == 'Candomblé') selected="selected" @endif>Candomblé</option>
			</select>
		</div>
		<div class="col-sm-2 form-group">
			<label for="estado_civil">Estado Civil: <span class="notification-red">*</span></label>
			<select class="form-control" id="estado_civil" name="estado_civil">
				<option value="" hidden @if ($paciente->estado_civil == '')  selected="selected" @endif>Selecione</option>
				<option value="Solteiro" @if ($paciente->estado_civil == 'Solteiro') selected="selected" @endif>Solteiro</option>
				<option value="Amasiado" @if ($paciente->estado_civil == 'Amasiado') selected="selected" @endif>Amasiado</option>
			  	<option value="Casado" @if ($paciente->estado_civil == 'Casado') selected="selected" @endif>Casado</option>
			  	<option value="Separado" @if ($paciente->estado_civil == 'Separado') selected="selected" @endif>Separado</option>
			  	<option value="Divorciado" @if ($paciente->estado_civil == 'Divorciado') selected="selected" @endif>Divorciado</option>
			  	<option value="Viuvo" @if ($paciente->estado_civil == 'Viuvo') selected="selected" @endif>Viuvo(a)</option>
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-5 form-group">
			<label for="endereco">Endereço: <span class="notification-red">*</span></label>
			<input type="text" class="form-control" id="endereco" name="endereco" value="{{$paciente->endereco}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="numero_casa">Nº: <span class="notification-red">*</span></label>
			<input type="number" class="form-control" id="numero_casa" name="numero_casa" value="{{$paciente->numero_casa}}" min="0">
		</div>
		<div class="col-sm-3 form-group">
			<label for="cep">CEP: <span class="notification-red">*</span></label>
			<input type="text" class="form-control input-cep" id="cep" name="cep" value="{{$paciente->cep}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="uf">UF: <span class="notification-red">*</span></label>
			<select class="form-control" id="uf" name="uf">
				<option value="" hidden @if ($paciente->uf == '')  selected="selected" @endif>Selecione</option>
				<option value="AC" @if ($paciente->uf == 'AC') selected="selected" @endif>AC</option>
				<option value="AL" @if ($paciente->uf == 'AL') selected="selected" @endif>AL</option>
				<option value="AM" @if ($paciente->uf == 'AM') selected="selected" @endif>AM</option>
				<option value="AP" @if ($paciente->uf == 'AP') selected="selected" @endif>AP</option>
				<option value="BA" @if ($paciente->uf == 'BA') selected="selected" @endif>BA</option>
				<option value="CE" @if ($paciente->uf == 'CE') selected="selected" @endif>CE</option>
				<option value="DF" @if ($paciente->uf == 'DF') selected="selected" @endif>DF</option>
				<option value="ES" @if ($paciente->uf == 'ES') selected="selected" @endif>ES</option>
				<option value="GO" @if ($paciente->uf == 'GO') selected="selected" @endif>GO</option>
				<option value="MA" @if ($paciente->uf == 'MA') selected="selected" @endif>MA</option>
				<option value="MG" @if ($paciente->uf == 'MG') selected="selected" @endif>MG</option>
				<option value="MS" @if ($paciente->uf == 'MS') selected="selected" @endif>MS</option>
				<option value="MT" @if ($paciente->uf == 'MT') selected="selected" @endif>MT</option>
				<option value="PA" @if ($paciente->uf == 'PA') selected="selected" @endif>PA</option>
				<option value="PB" @if ($paciente->uf == 'PB') selected="selected" @endif>PB</option>
				<option value="PE" @if ($paciente->uf == 'PE') selected="selected" @endif>PE</option>
				<option value="PI" @if ($paciente->uf == 'PI') selected="selected" @endif>PI</option>
				<option value="PR" @if ($paciente->uf == 'PR') selected="selected" @endif>PR</option>
				<option value="RJ" @if ($paciente->uf == 'RJ') selected="selected" @endif>RJ</option>
				<option value="RN" @if ($paciente->uf == 'RN') selected="selected" @endif>RN</option>
				<option value="RS" @if ($paciente->uf == 'RS') selected="selected" @endif>RS</option>
				<option value="RO" @if ($paciente->uf == 'RO') selected="selected" @endif>RO</option>
				<option value="RR" @if ($paciente->uf == 'RR') selected="selected" @endif>RR</option>
				<option value="SC" @if ($paciente->uf == 'SC') selected="selected" @endif>SC</option>
				<option value="SE" @if ($paciente->uf == 'SE') selected="selected" @endif>SE</option>
				<option value="SP" @if ($paciente->uf == 'SP') selected="selected" @endif>SP</option>
				<option value="TO" @if ($paciente->uf == 'TO') selected="selected" @endif>TO</option>
	 		</select>
		</div>
	</div>
</div>

<div class="row" id="course-display" @if($paciente->perfil == 'Superior' || $paciente->perfil == 'Técnico') style="display:block" @else style="display:none" @endif>
	<div class="col-sm-12">
		<div class="col-sm-5 form-group">
			<label for="nome_curso">Curso: <span class="notification-red">*</span></label>
			<input type="text" class="form-control" id="nome_curso" name="nome_curso" value="{{$paciente->nome_curso}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="semestre_curso">Semestre: <span class="notification-red">*</span></label>
			<input type="number" class="form-control" id="semestre_curso" name="semestre_curso" min="0" value="{{$paciente->semestre_curso}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="periodo_curso">Período: <span class="notification-red">*</span></label>
			<select class="form-control" id="periodo_curso" name="periodo_curso">
				<option value="" hidden @if ($paciente->periodo_curso == '')  selected="selected" @endif>Selecione</option>
				<option value="Matutino" @if ($paciente->periodo_curso == 'Matutino') selected="selected" @endif>Matutino</option>
				<option value="Vespertino" @if ($paciente->periodo_curso == 'Vespertino') selected="selected" @endif>Vespertino</option>
				<option value="Noturno" @if ($paciente->periodo_curso == 'Noturno') selected="selected" @endif>Noturno</option>
				<option value="Integral" @if ($paciente->periodo_curso == 'Integral') selected="selected" @endif>Integral</option>
			</select>
		</div>
		<div class="col-sm-3 form-group">
			<label for="moradia_estudantil">Moradia Estudantil: <span class="notification-red">*</span></label>
			<select class="form-control" id="moradia_estudantil" name="moradia_estudantil" placeholder="Selecione" >
				<option value="" hidden @if ($paciente->moradia_estudantil == '')  selected="selected" @endif>Selecione</option>
				<option value="Sim" @if ($paciente->moradia_estudantil == 'Sim') selected="selected" @endif>Sim</option>
				<option value="Não" @if ($paciente->moradia_estudantil == 'Não') selected="selected" @endif>Não</option>
			</select>
		</div>
		<input type="hidden" name="status" value="Ativo">
	</div>
</div>
<br>
<br>
<hr>
<button type="button" name="next1" class="next acao btn-next btn btn-primary">Próximo</button>