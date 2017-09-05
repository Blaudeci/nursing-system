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
			<textarea class="form-control" id="outras_doencas" name="outras_doencas" maxlength="1000" value="{{old('outras_doencas')}}" rows="3"></textarea>
		</div>
		<div class="col-sm-6 form-group">
			<label for="uso_medicacao">Uso de medicação continua: </label>
			<textarea class="form-control" id="uso_medicacao" name="uso_medicacao" maxlength="1000" value="{{old('uso_medicacao')}}" rows="3"></textarea>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-6 form-group">
			<label for="cirurgias_anteriores">Cirurgias Anteriores: </label>
			<textarea class="form-control" id="cirurgias_anteriores" name="cirurgias_anteriores" maxlength="1000" value="{{old('cirurgias_anteriores')}}" rows="3"></textarea>
		</div>
		<div class="col-sm-6 form-group">
			<label for="internacoes">Internações: </label>
			<textarea class="form-control" id="internacoes" name="internacoes" maxlength="1000" value="{{old('internacoes')}}" rows="3"></textarea>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4 form-group">
			<label for="alergias">Alergias: </label>
			<textarea class="form-control" id="alergias" name="alergias" maxlength="1000" value="{{old('alergias')}}" rows="3"></textarea>
		</div>
		<div class="col-sm-4 form-group">
			<label for="primeria_mestruacao">Primeira Mestruação: </label>
			<textarea class="form-control" id="primeria_mestruacao" name="primeria_mestruacao" maxlength="1000" value="{{old('primeria_mestruacao')}}" rows="3"></textarea>
		</div>
		<div class="col-sm-4 form-group">
			<label for="queixas">Queixas: </label>
			<textarea class="form-control" id="queixas" name="queixas" maxlength="1000" value="{{old('queixas')}}" rows="3"></textarea>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4">
			<label for="gesta">Gesta: </label>
			<input type="text" name="gesta" id="gesta" value="{{old('gesta')}}" class="form-control" maxlength="10">
		</div>
		<div class="col-sm-4">
			<label for="para">Para: </label>
			<input type="text" name="para" id="para" value="{{old('para')}}" class="form-control" maxlength="10">
		</div>
		<div class="col-sm-4">
			<label for="aborto">Aborto: </label>
			<input type="text" name="aborto" id="aborto" value="{{old('aborto')}}" class="form-control" maxlength="10">
		</div>
	</div>
</div>
<br>
<br>
<hr>
<button type="button" name="prev" class="prev acao btn-previous btn btn-primary">Anterior</button>
<button type="button" name="next3" class="next acao btn-next btn btn-primary">Próximo</button>