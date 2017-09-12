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
			swal("Usuário cadastrado com sucesso!", "", "success");
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
			<input type="text" class="form-control" id="nome" name="nome" maxlength="100" value="{{$pacient->nome}}" />
		</div>
		<div class="col-sm-2 form-group">
			<label for="data_nasc">Data Nasc.: <span class="notification-red">*</span></label>
			<input type="text" class="form-control input-data" id="data_nasc" name="data_nasc" placeholder="00/00/0000" value="{{$pacient->data_nasc}}">
		</div>
		<div class="col-sm-3 form-group">
			<label for="condicao_moradia">Condições de Moradia: <span class="notification-red">*</span></label>
			<select class="form-control" id="condicao_moradia" name="condicao_moradia">
				<option value="Urbano" @if($pacient->condicao_moradia == 'Urbano') selected="selected" @endif>Urbano</option>
                <option value="Rural" @if($pacient->condicao_moradia == 'Rural') selected="selected" @endif>Rural</option>
			</select>
		</div>

		<div class="col-sm-2 form-group">
			<label for="sexo">Sexo: <span class="notification-red">*</span></label>
			<select class="form-control" id="sexo" name="sexo">
				<option value="Masculino" @if ($pacient->sexo == 'Masculino') selected="selected" @endif>Masculino</option>
               	<option value="Feminino" @if ($pacient->sexo == 'Feminino') selected="selected" @endif>Feminino</option>
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4 form-group">
			<label for="email">E-mail: </label>
			<input type="text" class="form-control" id="email" name="email" maxlength="100" value="{{$pacient->email}}">
		</div>
		<div class="col-sm-3 form-group">
			<label for="perfil">Perfil: <span class="notification-red">*</span></label>
			<select class="form-control" id="perfil" name="perfil">
				<option value="Técnico" @if ($pacient->perfil == 'Técnico') selected="selected" @endif>Técnico</option>
				<option value="Superior" @if ($pacient->perfil == 'Superior') selected="selected" @endif>Superior</option>
				<option value="Docente" @if ($pacient->perfil == 'Docente') selected="selected" @endif>Docente</option>
				<option value="Terceirizado" @if ($pacient->perfil == 'Terceirizado') selected="selected" @endif>Terceirizado</option>
				<option value="Tec Administrativo" @if ($pacient->perfil == 'Tec Administrativo') selected="selected" @endif>Tec Administrativo</option>
			</select>
		</div>
		<div class="col-sm-3 form-group">
			<label for="religiao">Religião: <span class="notification-red">*</span></label>
			<select class="form-control" id="religiao" name="religiao">
				<option value="Cátolica" @if ($pacient->religiao == 'Cátolica') selected="selected" @endif>Cátolica</option>
				<option value="Evangélica" @if ($pacient->religiao == 'Evangélica') selected="selected" @endif>Evangélica</option>
				<option value="Espírita" @if ($pacient->religiao == 'Espírita') selected="selected" @endif>Espírita</option>
				<option value="Outros" @if ($pacient->religiao == 'Outros') selected="selected" @endif>Outros</option>
			</select>
		</div>
		<div class="col-sm-2 form-group">
			<label for="estado_civil">Estado Civil: <span class="notification-red">*</span></label>
			<select class="form-control" id="estado_civil" name="estado_civil">
				<option value="Solteiro" @if ($pacient->estado_civil == 'Solteiro') selected="selected" @endif>Solteiro</option>
			  	<option value="Casado" @if ($pacient->estado_civil == 'Casado') selected="selected" @endif>Casado</option>
			  	<option value="Viuvo" @if ($pacient->estado_civil == 'Viuvo') selected="selected" @endif>Viuvo(a)</option>
			  	<option value="Outro" @if ($pacient->estado_civil == 'Outro') selected="selected" @endif>Outro</option>
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-5 form-group">
			<label for="endereco">Endereço: <span class="notification-red">*</span></label>
			<input type="text" class="form-control" id="endereco" name="endereco" value="{{$pacient->endereco}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="numero_casa">Nº: <span class="notification-red">*</span></label>
			<input type="number" class="form-control" id="numero_casa" name="numero_casa" value="{{$pacient->numero_casa}}" min="0">
		</div>
		<div class="col-sm-3 form-group">
			<label for="cep">CEP: <span class="notification-red">*</span></label>
			<input type="text" class="form-control input-cep" id="cep" name="cep" value="{{$pacient->cep}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="uf">UF: <span class="notification-red">*</span></label>
			<select class="form-control" id="uf" name="uf">
				<option value="AC" @if ($pacient->uf == 'AC') selected="selected" @endif>AC</option>
				<option value="AL" @if ($pacient->uf == 'AL') selected="selected" @endif>AL</option>
				<option value="AM" @if ($pacient->uf == 'AM') selected="selected" @endif>AM</option>
				<option value="AP" @if ($pacient->uf == 'AP') selected="selected" @endif>AP</option>
				<option value="BA" @if ($pacient->uf == 'BA') selected="selected" @endif>BA</option>
				<option value="CE" @if ($pacient->uf == 'CE') selected="selected" @endif>CE</option>
				<option value="DF" @if ($pacient->uf == 'DF') selected="selected" @endif>DF</option>
				<option value="ES" @if ($pacient->uf == 'ES') selected="selected" @endif>ES</option>
				<option value="GO" @if ($pacient->uf == 'GO') selected="selected" @endif>GO</option>
				<option value="MA" @if ($pacient->uf == 'MA') selected="selected" @endif>MA</option>
				<option value="MG" @if ($pacient->uf == 'MG') selected="selected" @endif>MG</option>
				<option value="MS" @if ($pacient->uf == 'MS') selected="selected" @endif>MS</option>
				<option value="MT" @if ($pacient->uf == 'MT') selected="selected" @endif>MT</option>
				<option value="PA" @if ($pacient->uf == 'PA') selected="selected" @endif>PA</option>
				<option value="PB" @if ($pacient->uf == 'PB') selected="selected" @endif>PB</option>
				<option value="PE" @if ($pacient->uf == 'PE') selected="selected" @endif>PE</option>
				<option value="PI" @if ($pacient->uf == 'PI') selected="selected" @endif>PI</option>
				<option value="PR" @if ($pacient->uf == 'PR') selected="selected" @endif>PR</option>
				<option value="RJ" @if ($pacient->uf == 'RJ') selected="selected" @endif>RJ</option>
				<option value="RN" @if ($pacient->uf == 'RN') selected="selected" @endif>RN</option>
				<option value="RS" @if ($pacient->uf == 'RS') selected="selected" @endif>RS</option>
				<option value="RO" @if ($pacient->uf == 'RO') selected="selected" @endif>RO</option>
				<option value="RR" @if ($pacient->uf == 'RR') selected="selected" @endif>RR</option>
				<option value="SC" @if ($pacient->uf == 'SC') selected="selected" @endif>SC</option>
				<option value="SE" @if ($pacient->uf == 'SE') selected="selected" @endif>SE</option>
				<option value="SP" @if ($pacient->uf == 'SP') selected="selected" @endif>SP</option>
				<option value="TO" @if ($pacient->uf == 'TO') selected="selected" @endif>TO</option>
	 		</select>
		</div>
	</div>
</div>

<div class="row" id="course-display" @if($pacient->perfil == 'Superior' || $pacient->perfil == 'Técnico') style="display:block" @else style="display:none" @endif>
	<div class="col-sm-12">
		<div class="col-sm-5 form-group">
			<label for="nome_curso">Curso: <span class="notification-red">*</span></label>
			<input type="text" class="form-control" id="nome_curso" name="nome_curso" value="{{$pacient->nome_curso}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="semestre_curso">Semestre: <span class="notification-red">*</span></label>
			<input type="number" class="form-control" id="semestre_curso" name="semestre_curso" min="0" value="{{$pacient->semestre_curso}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="periodo_curso">Período: <span class="notification-red">*</span></label>
			<select class="form-control" id="periodo_curso" name="periodo_curso">
				<option value="Matutino" @if ($pacient->periodo_curso == 'Matutino') selected="selected" @endif>Matutino</option>
				<option value="Vespertino" @if ($pacient->periodo_curso == 'Vespertino') selected="selected" @endif>Vespertino</option>
				<option value="Noturno" @if ($pacient->periodo_curso == 'Noturno') selected="selected" @endif>Noturno</option>
				<option value="Integral" @if ($pacient->periodo_curso == 'Integral') selected="selected" @endif>Integral</option>
			</select>
		</div>
		<div class="col-sm-3 form-group">
			<label for="moradia_estudantil">Moradia Estudantil: <span class="notification-red">*</span></label>
			<select class="form-control" id="moradia_estudantil" name="moradia_estudantil" placeholder="Selecione" >
				<option value="Sim" @if ($pacient->moradia_estudantil == 'Sim') selected="selected" @endif>Sim</option>
				<option value="Não" @if ($pacient->moradia_estudantil == 'Não') selected="selected" @endif>Não</option>
			</select>
		</div>
		<input type="hidden" name="status" value="Ativo">
	</div>
</div>
<br>
<br>
<hr>
<button type="button" name="next1" class="next acao btn-next btn btn-primary">Próximo</button>