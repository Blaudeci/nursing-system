<div class="row form-group hrs-bottom">
	<div class="col-sm-12">
		<div class="col-sm-12">
			<h1>Antecedentes e Eventos Fisiológicos/Patológicos</h1>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-6 form-group">
			<label for="outras_doencas">Outras Doenças: </label>
			<textarea class="form-control" id="outras_doencas" name="outras_doencas" maxlength="1000" rows="3">{{$fisiologico->outras_doencas}}</textarea>
		</div>
		<div class="col-sm-6 form-group">
			<label for="uso_medicacao">Uso de medicação continua: </label>
			<textarea class="form-control" id="uso_medicacao" name="uso_medicacao" maxlength="1000" rows="3">{{$fisiologico->medicacao_continua}}</textarea>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-6 form-group">
			<label for="cirurgias_anteriores">Cirurgias Anteriores: </label>
			<textarea class="form-control" id="cirurgias_anteriores" name="cirurgias_anteriores" maxlength="1000" rows="3">{{$fisiologico->cirurgias_anteriores}}</textarea>
		</div>
		<div class="col-sm-6 form-group">
			<label for="internacoes">Internações: </label>
			<textarea class="form-control" id="internacoes" name="internacoes" maxlength="1000" rows="3">{{$fisiologico->internacoes}}</textarea>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4 form-group">
			<label for="alergias">Alergias: </label>
			<textarea class="form-control" id="alergias" name="alergias" maxlength="1000" rows="3">{{$fisiologico->alergias}}</textarea>
		</div>
		<div class="col-sm-4 form-group">
			<label for="primeira_mestruacao">Primeira Mestruação: </label>
			<textarea class="form-control" id="primeira_mestruacao" name="primeira_mestruacao" maxlength="1000" rows="3">{{$fisiologico->primeira_mestruacao}}</textarea>
		</div>
		<div class="col-sm-4 form-group">
			<label for="queixas">Queixas: </label>
			<textarea class="form-control" id="queixas" name="queixas" maxlength="1000" rows="3">{{$fisiologico->queixas}}</textarea>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4">
			<label for="gesta">Gesta: </label>
			<input type="text" name="gesta" id="gesta" value="{{$fisiologico->gesta}}" class="form-control" maxlength="10">
		</div>
		<div class="col-sm-4">
			<label for="para">Para: </label>
			<input type="text" name="para" id="para" value="{{$fisiologico->para}}" class="form-control" maxlength="10">
		</div>
		<div class="col-sm-4">
			<label for="aborto">Aborto: </label>
			<input type="text" name="aborto" id="aborto" value="{{$fisiologico->aborto}}" class="form-control" maxlength="10">
		</div>
	</div>
</div>
<br>
<br>
<hr>
<button type="button" name="prev" class="prev acao btn-previous btn btn-primary">Anterior</button>
<button type="button" name="next3" class="next acao btn-next btn btn-primary">Próximo</button>