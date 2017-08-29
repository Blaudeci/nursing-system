<div class="row form-group hrs-bottom">
	<div class="col-sm-12">
		<div class="col-sm-12">
			<h1>Dados Pessoais</h1>
		</div>
	</div>
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
			<label for="nome_paciente">Nome: <span class="notification-red">*</span></label>
			<input type="text" class="form-control" id="nome_paciente" name="nome_paciente" maxlength="100" value="{{old('nome_paciente')}}" />
		</div>
		<div class="col-sm-2 form-group">
			<label for="data-nasc_paciente">Data Nasc.: <span class="notification-red">*</span></label>
			<input type="text" class="form-control input-data" id="data-nasc_paciente" name="data-nasc_paciente" placeholder="00/00/0000" value="{{old('data-nasc_paciente')}}">
		</div>
		<div class="col-sm-3 form-group">
			<label for="condicao-moradia_paciente">Condições de Moradia: <span class="notification-red">*</span></label>
			<select name="condicao-moradia_paciente" id="condicao-moradia_paciente" class="form-control">
				<option selected disabled>Selecione</option>
				<option value="Urbano" @if (old('condicao-moradia_paciente') == 'Urbano') selected="selected" @endif>Urbano</option>
                <option value="Rural" @if (old('condicao-moradia_paciente') == 'Rural') selected="selected" @endif>Rural</option>
			</select>
		</div>
		<div class="col-sm-2 form-group">
			<label for="sexo_paciente">Sexo: <span class="notification-red">*</span></label>
			<select class="form-control" id="sexo_paciente" name="sexo_paciente">
				<option selected disabled>Selecione</option>
				<option value="Masculino" @if (old('sexo_paciente') == 'Masculino') selected="selected" @endif>Masculino</option>
               	<option value="Feminino" @if (old('sexo_paciente') == 'Feminino') selected="selected" @endif>Feminino</option>
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4 form-group">
			<label for="email_paciente">E-mail: </label>
			<input type="email" class="form-control" id="email_paciente" name="email_paciente" maxlength="100" value="{{old('email_paciente')}}">
		</div>
		<div class="col-sm-3 form-group">
			<label for="perfil_paciente">Perfil: <span class="notification-red">*</span></label>
			<select class="form-control" id="perfil_paciente" name="perfil_paciente">
				<option selected disabled>Selecione</option>
				<option value="Tecnico" @if (old('perfil_paciente') == 'Tecnico') selected="selected" @endif>Técnico</option>
				<option value="Superior" @if (old('perfil_paciente') == 'Superior') selected="selected" @endif>Superior</option>
				<option value="Docente" @if (old('perfil_paciente') == 'Docente') selected="selected" @endif>Docente</option>
				<option value="Terceirizado" @if (old('perfil_paciente') == 'Terceirizado') selected="selected" @endif>Terceirizado</option>
				<option value="Administrativo" @if (old('perfil_paciente') == 'Administrativo') selected="selected" @endif>Tec Administrativo</option>
			</select>
		</div>
		<div class="col-sm-3 form-group">
			<label for="religiao_paciente">Religião: <span class="notification-red">*</span></label>
			<select class="form-control" id="religiao_paciente" name="religiao_paciente">
				<option selected disabled>Selecione</option>
				<option value="Catolica" @if (old('religiao_paciente') == 'Catolica') selected="selected" @endif>Cátolica</option>
				<option value="Evangelica" @if (old('religiao_paciente') == 'Evangelica') selected="selected" @endif>Evangélica</option>
				<option value="Espirita" @if (old('religiao_paciente') == 'Espirita') selected="selected" @endif>Espírita</option>
				<option value="Outros" @if (old('religiao_paciente') == 'Outros') selected="selected" @endif>Outros</option>
			</select>
		</div>
		<div class="col-sm-2 form-group">
			<label for="estado-civi_paciente">Estado Civil: <span class="notification-red">*</span></label>
			<select name="estado-civi_paciente" id="estado-civi_paciente" class="form-control">
				<option selected disabled>Selecione</option>
				<option value="Solteiro" @if (old('estado-civi_paciente') == 'Solteiro') selected="selected" @endif>Solteiro</option>
			  	<option value="Casado" @if (old('estado-civi_paciente') == 'Casado') selected="selected" @endif>Casado</option>
			  	<option value="Viuvo" @if (old('estado-civi_paciente') == 'Viuvo') selected="selected" @endif>Viuvo(a)</option>
			  	<option value="Outro" @if (old('estado-civi_paciente') == 'Outro') selected="selected" @endif>Outro</option>
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-5 form-group">
			<label for="endereco_paciente">Endereço: <span class="notification-red">*</span></label>
			<input type="text" class="form-control" id="endereco_paciente" name="endereco_paciente" value="{{old('endereco_paciente')}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="numero-casa_paciente">Nº: <span class="notification-red">*</span></label>
			<input type="number" class="form-control" id="numero-casa_paciente" name="numero-casa_paciente" value="{{old('numero-casa_paciente')}}">
		</div>
		<div class="col-sm-3 form-group">
			<label for="cep_paciente">CEP: <span class="notification-red">*</span></label>
			<input type="text" class="form-control input-cep" id="cep_paciente" name="cep_paciente" value="{{old('cep_paciente')}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="uf_paciente">UF: <span class="notification-red">*</span></label>
			<select name="uf_paciente" id="uf_paciente" class="form-control" required>
				<option selected disabled>Selecione</option>
				<option value="AC" @if (old('uf_paciente') == 'AC') selected="selected" @endif>AC</option>
				<option value="AL" @if (old('uf_paciente') == 'AL') selected="selected" @endif>AL</option>
				<option value="AM" @if (old('uf_paciente') == 'AM') selected="selected" @endif>AM</option>
				<option value="AP" @if (old('uf_paciente') == 'AP') selected="selected" @endif>AP</option>
				<option value="BA" @if (old('uf_paciente') == 'BA') selected="selected" @endif>BA</option>
				<option value="CE" @if (old('uf_paciente') == 'CE') selected="selected" @endif>CE</option>
				<option value="DF" @if (old('uf_paciente') == 'DF') selected="selected" @endif>DF</option>
				<option value="ES" @if (old('uf_paciente') == 'ES') selected="selected" @endif>ES</option>
				<option value="GO" @if (old('uf_paciente') == 'GO') selected="selected" @endif>GO</option>
				<option value="MA" @if (old('uf_paciente') == 'MA') selected="selected" @endif>MA</option>
				<option value="MG" @if (old('uf_paciente') == 'MG') selected="selected" @endif>MG</option>
				<option value="MS" @if (old('uf_paciente') == 'MS') selected="selected" @endif>MS</option>
				<option value="MT" @if (old('uf_paciente') == 'MT') selected="selected" @endif>MT</option>
				<option value="PA" @if (old('uf_paciente') == 'PA') selected="selected" @endif>PA</option>
				<option value="PB" @if (old('uf_paciente') == 'PB') selected="selected" @endif>PB</option>
				<option value="PE" @if (old('uf_paciente') == 'PE') selected="selected" @endif>PE</option>
				<option value="PI" @if (old('uf_paciente') == 'PI') selected="selected" @endif>PI</option>
				<option value="PR" @if (old('uf_paciente') == 'PR') selected="selected" @endif>PR</option>
				<option value="RJ" @if (old('uf_paciente') == 'RJ') selected="selected" @endif>RJ</option>
				<option value="RN" @if (old('uf_paciente') == 'RN') selected="selected" @endif>RN</option>
				<option value="RS" @if (old('uf_paciente') == 'RS') selected="selected" @endif>RS</option>
				<option value="RO" @if (old('uf_paciente') == 'RO') selected="selected" @endif>RO</option>
				<option value="RR" @if (old('uf_paciente') == 'RR') selected="selected" @endif>RR</option>
				<option value="SC" @if (old('uf_paciente') == 'SC') selected="selected" @endif>SC</option>
				<option value="SE" @if (old('uf_paciente') == 'SE') selected="selected" @endif>SE</option>
				<option value="SP" @if (old('uf_paciente') == 'SP') selected="selected" @endif>SP</option>
				<option value="TO" @if (old('uf_paciente') == 'TO') selected="selected" @endif>TO</option>
	 		</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-5 form-group">
			<label for="nome-curso_paciente">Curso:</label>
			<input type="text" class="form-control" name="nome-curso_paciente" id="nome-curso_paciente" value="{{old('nome-curso_paciente')}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="semestre-curso_paciente">Semestre:</label>
			<input type="number" class="form-control" id="semestre-curso_paciente" name="semestre-curso_paciente" min="0" max="30" value="{{old('semestre-curso_paciente')}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="periodo-curso_paciente">Período:</label>
			<select name="periodo-curso_paciente" id="periodo-curso_paciente" class="form-control">
				<option selected disabled>Selecione</option>
				<option value="Matutino" @if (old('periodo-curso_paciente') == 'Matutino') selected="selected" @endif>Matutino</option>
				<option value="Vespertino" @if (old('periodo-curso_paciente') == 'Vespertino') selected="selected" @endif>Vespertino</option>
				<option value="Noturno" @if (old('periodo-curso_paciente') == 'Noturno') selected="selected" @endif>Noturno</option>
				<option value="Integral" @if (old('periodo-curso_paciente') == 'Integral') selected="selected" @endif>Integral</option>
			</select>
		</div>
		<div class="col-sm-3 form-group">
			<label for="moradia-instituto_paciente">Moradia Estudantil:</label>
			<select name="moradia-instituto_paciente" id="moradia-instituto_paciente" class="	form-control">
				<option selected disabled>Selecione</option>
				<option value="Sim" @if (old('moradia-instituto_paciente') == 'Sim') selected="selected" @endif>Sim</option>
				<option value="Não" @if (old('moradia-instituto_paciente') == 'Não') selected="selected" @endif>Não</option>
			</select>
		</div>
	</div>
</div>
<br>
<br>
<hr>
<button type="button" name="next1" class="next acao btn-proximo btn btn-primary">Próximo</button>