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
			<input type="text" class="form-control" id="nome" name="nome" maxlength="100" value="{{old('nome')}}" />
		</div>
		<div class="col-sm-2 form-group">
			<label for="data_nasc">Data Nasc.: <span class="notification-red">*</span></label>
			<input type="text" class="form-control input-data" id="data_nasc" name="data_nasc" placeholder="00/00/0000" value="{{old('data_nasc')}}">
		</div>
		<div class="col-sm-3 form-group">
			<label for="condicao_moradia">Condições de Moradia: <span class="notification-red">*</span></label>
			<select class="form-control" id="condicao_moradia" name="condicao_moradia">
				<option value="" selected hidden>Selecione</option>
				<option value="Urbano" @if (old('condicao_moradia') == 'Urbano') selected="selected" @endif>Urbano</option>
                <option value="Rural" @if (old('condicao_moradia') == 'Rural') selected="selected" @endif>Rural</option>
			</select>
		</div>
		<div class="col-sm-2 form-group">
			<label for="sexo">Sexo: <span class="notification-red">*</span></label>
			<select class="form-control" id="sexo" name="sexo">
				<option value="" selected hidden>Selecione</option>
				<option value="Masculino" @if (old('sexo') == 'Masculino') selected="selected" @endif>Masculino</option>
               	<option value="Feminino" @if (old('sexo') == 'Feminino') selected="selected" @endif>Feminino</option>
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4 form-group">
			<label for="email">E-mail: </label>
			<input type="text" class="form-control" id="email" name="email" maxlength="100" value="{{old('email')}}">
		</div>
		<div class="col-sm-3 form-group">
			<label for="perfil">Perfil: <span class="notification-red">*</span></label>
			<select class="form-control" id="perfil" name="perfil">
				<option value="" selected hidden>Selecione</option>
				<option value="Técnico" @if (old('perfil') == 'Técnico') selected="selected" @endif>Técnico</option>
				<option value="Superior" @if (old('perfil') == 'Superior') selected="selected" @endif>Superior</option>
				<option value="Docente" @if (old('perfil') == 'Docente') selected="selected" @endif>Docente</option>
				<option value="Terceirizado" @if (old('perfil') == 'Terceirizado') selected="selected" @endif>Terceirizado</option>
				<option value="Tec Administrativo" @if (old('perfil') == 'Tec Administrativo') selected="selected" @endif>Tec Administrativo</option>
			</select>
		</div>
		<div class="col-sm-3 form-group">
			<label for="religiao">Religião: <span class="notification-red">*</span></label>
			<select class="form-control" id="religiao" name="religiao">
				<option value="" selected hidden>Selecione</option>
				<option value="Cátolica" @if (old('religiao') == 'Cátolica') selected="selected" @endif>Cátolica</option>
				<option value="Evangélica" @if (old('religiao') == 'Evangélica') selected="selected" @endif>Evangélica</option>
				<option value="Espírita" @if (old('religiao') == 'Espírita') selected="selected" @endif>Espírita</option>
				<option value="Outros" @if (old('religiao') == 'Outros') selected="selected" @endif>Outros</option>
			</select>
		</div>
		<div class="col-sm-2 form-group">
			<label for="estado_civil">Estado Civil: <span class="notification-red">*</span></label>
			<select class="form-control" id="estado_civil" name="estado_civil">
				<option value="" selected hidden>Selecione</option>
				<option value="Solteiro" @if (old('estado-civi_paciente') == 'Solteiro') selected="selected" @endif>Solteiro</option>
			  	<option value="Casado" @if (old('estado_civil') == 'Casado') selected="selected" @endif>Casado</option>
			  	<option value="Viuvo" @if (old('estado_civil') == 'Viuvo') selected="selected" @endif>Viuvo(a)</option>
			  	<option value="Outro" @if (old('estado_civil') == 'Outro') selected="selected" @endif>Outro</option>
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-5 form-group">
			<label for="endereco">Endereço: <span class="notification-red">*</span></label>
			<input type="text" class="form-control" id="endereco" name="endereco" value="{{old('endereco')}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="numero_casa">Nº: <span class="notification-red">*</span></label>
			<input type="number" class="form-control" id="numero_casa" name="numero_casa" value="{{old('numero_casa')}}" min="0">
		</div>
		<div class="col-sm-3 form-group">
			<label for="cep">CEP: <span class="notification-red">*</span></label>
			<input type="text" class="form-control input-cep" id="cep" name="cep" value="{{old('cep')}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="uf">UF: <span class="notification-red">*</span></label>
			<select class="form-control" id="uf" name="uf">
				<option value="" selected hidden>Selecione</option>
				<option value="AC" @if (old('uf') == 'AC') selected="selected" @endif>AC</option>
				<option value="AL" @if (old('uf') == 'AL') selected="selected" @endif>AL</option>
				<option value="AM" @if (old('uf') == 'AM') selected="selected" @endif>AM</option>
				<option value="AP" @if (old('uf') == 'AP') selected="selected" @endif>AP</option>
				<option value="BA" @if (old('uf') == 'BA') selected="selected" @endif>BA</option>
				<option value="CE" @if (old('uf') == 'CE') selected="selected" @endif>CE</option>
				<option value="DF" @if (old('uf') == 'DF') selected="selected" @endif>DF</option>
				<option value="ES" @if (old('uf') == 'ES') selected="selected" @endif>ES</option>
				<option value="GO" @if (old('uf') == 'GO') selected="selected" @endif>GO</option>
				<option value="MA" @if (old('uf') == 'MA') selected="selected" @endif>MA</option>
				<option value="MG" @if (old('uf') == 'MG') selected="selected" @endif>MG</option>
				<option value="MS" @if (old('uf') == 'MS') selected="selected" @endif>MS</option>
				<option value="MT" @if (old('uf') == 'MT') selected="selected" @endif>MT</option>
				<option value="PA" @if (old('uf') == 'PA') selected="selected" @endif>PA</option>
				<option value="PB" @if (old('uf') == 'PB') selected="selected" @endif>PB</option>
				<option value="PE" @if (old('uf') == 'PE') selected="selected" @endif>PE</option>
				<option value="PI" @if (old('uf') == 'PI') selected="selected" @endif>PI</option>
				<option value="PR" @if (old('uf') == 'PR') selected="selected" @endif>PR</option>
				<option value="RJ" @if (old('uf') == 'RJ') selected="selected" @endif>RJ</option>
				<option value="RN" @if (old('uf') == 'RN') selected="selected" @endif>RN</option>
				<option value="RS" @if (old('uf') == 'RS') selected="selected" @endif>RS</option>
				<option value="RO" @if (old('uf') == 'RO') selected="selected" @endif>RO</option>
				<option value="RR" @if (old('uf') == 'RR') selected="selected" @endif>RR</option>
				<option value="SC" @if (old('uf') == 'SC') selected="selected" @endif>SC</option>
				<option value="SE" @if (old('uf') == 'SE') selected="selected" @endif>SE</option>
				<option value="SP" @if (old('uf') == 'SP') selected="selected" @endif>SP</option>
				<option value="TO" @if (old('uf') == 'TO') selected="selected" @endif>TO</option>
	 		</select>
		</div>
	</div>
</div>

<div class="row" id="course-display">
	<div class="col-sm-12">
		<div class="col-sm-5 form-group">
			<label for="nome_curso">Curso: <span class="notification-red">*</span></label>
			<input type="text" class="form-control" id="nome_curso" name="nome_curso" value="{{old('nome_curso')}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="semestre_curso">Semestre: <span class="notification-red">*</span></label>
			<input type="number" class="form-control" id="semestre_curso" name="semestre_curso" min="0" value="{{old('semestre_curso')}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="periodo_curso">Período: <span class="notification-red">*</span></label>
			<select class="form-control" id="periodo_curso" name="periodo_curso">
				<option value="" selected hidden>Selecione</option>
				<option value="Matutino" @if (old('periodo_curso') == 'Matutino') selected="selected" @endif>Matutino</option>
				<option value="Vespertino" @if (old('periodo_curso') == 'Vespertino') selected="selected" @endif>Vespertino</option>
				<option value="Noturno" @if (old('periodo_curso') == 'Noturno') selected="selected" @endif>Noturno</option>
				<option value="Integral" @if (old('periodo_curso') == 'Integral') selected="selected" @endif>Integral</option>
			</select>
		</div>
		<div class="col-sm-3 form-group">
			<label for="moradia_estudantil">Moradia Estudantil: <span class="notification-red">*</span></label>
			<select class="form-control" id="moradia_estudantil" name="moradia_estudantil" placeholder="Selecione" >
				<option value="" selected hidden>Selecione</option>
				<option value="Sim" @if (old('moradia_instituto') == 'Sim') selected="selected" @endif>Sim</option>
				<option value="Não" @if (old('moradia_instituto') == 'Não') selected="selected" @endif>Não</option>
			</select>
		</div>
		<input type="hidden" name="status" value="Ativo">
	</div>
</div>
<br>
<br>
<hr>
<button type="button" name="next1" class="next acao btn-next btn btn-primary">Próximo</button>