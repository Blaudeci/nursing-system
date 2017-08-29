<div class="row form-group hrs-bottom">
	<div class="col-sm-12">
		<div class="col-sm-12">
			<h1>Antecedentes e eventos fisiológicos/patológicos</h1>
		</div>
	</div>
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
<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-6 form-group">
			<label for="outras-doencas_fisiologicas">Outras Doenças: </label>
			<textarea class="form-control" id="outras-doencas_fisiologicas" name="outras-doencas_fisiologicas" maxlength="1000" value="{{old('outras-doencas_fisiologicas')}}"></textarea>
		</div>
		<div class="col-sm-6 form-group">
			<label for="uso-medicacao_fisiologicas">Uso de medicação continua: </label>
			<textarea class="form-control" id="uso-medicacao_fisiologicas" name="uso-medicacao_fisiologicas" maxlength="1000" value="{{old('uso-medicacao_fisiologicas')}}"></textarea>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-6 form-group">
			<label for="cirurgias-anteriores_fisiologicas">Cirurgias Anteriores: </label>
			<textarea class="form-control" id="cirurgias-anteriores_fisiologicas" name="cirurgias-anteriores_fisiologicas" maxlength="1000" value="{{old('cirurgias-anteriores_fisiologicas')}}"></textarea>
		</div>
		<div class="col-sm-6 form-group">
			<label for="internacoes_fisiologicas">Internações: </label>
			<textarea class="form-control" id="internacoes_fisiologicas" name="internacoes_fisiologicas" maxlength="1000" value="{{old('internacoes_fisiologicas')}}"></textarea>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4 form-group">
			<label for="alergias_fisiologicas">Alergias: </label>
			<textarea class="form-control" id="alergias_fisiologicas" name="alergias_fisiologicas" maxlength="1000" value="{{old('alergias_fisiologicas')}}"></textarea>
		</div>
		<div class="col-sm-4 form-group">
			<label for="primeria-mestruacao_fisiologicas">Primeira Mestruação: </label>
			<textarea class="form-control" id="primeria-mestruacao_fisiologicas" name="internacoes_fisiologicas" maxlength="1000" value="{{old('primeria-mestruacao_fisiologicas')}}"></textarea>
		</div>
		<div class="col-sm-4 form-group">
			<label for="queixas_fisiologicas">Queixas: </label>
			<textarea class="form-control" id="queixas_fisiologicas" name="queixas_fisiologicas" maxlength="1000" value="{{old('queixas_fisiologicas')}}"></textarea>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4">
			<label for="gesta_fisiologicas">Gesta: </label>
			<select class="form-control" id="gesta_fisiologicas" name="gesta_fisiologicas">
				<option selected disabled>Selecione</option>
				<option value="I" @if (old('gesta_fisiologicas') == 'I') selected="selected" @endif>I</option>
				<option value="II" @if (old('gesta_fisiologicas') == 'II') selected="selected" @endif>II</option>
				<option value="III" @if (old('gesta_fisiologicas') == 'III') selected="selected" @endif>III</option>
				<option value="IV" @if (old('gesta_fisiologicas') == 'IV') selected="selected" @endif>IV</option>
				<option value="V" @if (old('gesta_fisiologicas') == 'V') selected="selected" @endif>V</option>
			</select>
		</div>
		<div class="col-sm-4">
			<label for="para_fisiologicas">Para: </label>
			<select class="form-control" id="para_fisiologicas" name="para_fisiologicas">
				<option selected disabled>Selecione</option>
				<option value="I" @if (old('para_fisiologicas') == 'I') selected="selected" @endif>I</option>
				<option value="II" @if (old('para_fisiologicas') == 'II') selected="selected" @endif>II</option>
				<option value="III" @if (old('para_fisiologicas') == 'III') selected="selected" @endif>III</option>
				<option value="IV" @if (old('para_fisiologicas') == 'IV') selected="selected" @endif>IV</option>
				<option value="V" @if (old('para_fisiologicas') == 'V') selected="selected" @endif>V</option>
			</select>
		</div>
		<div class="col-sm-4">
			<label for="aborto_fisiologicas">Aborto: </label>
			<select class="form-control" id="aborto_fisiologicas" name="aborto_fisiologicas">
				<option selected disabled>Selecione</option>
				<option value="I" @if (old('aborto_fisiologicas') == 'I') selected="selected" @endif>I</option>
				<option value="II" @if (old('aborto_fisiologicas') == 'II') selected="selected" @endif>II</option>
				<option value="III" @if (old('aborto_fisiologicas') == 'III') selected="selected" @endif>III</option>
				<option value="IV" @if (old('aborto_fisiologicas') == 'IV') selected="selected" @endif>IV</option>
				<option value="V" @if (old('aborto_fisiologicas') == 'V') selected="selected" @endif>V</option>
			</select>
		</div>
	</div>
</div>
<br>
<br>
<hr>
<button type="button" name="prev" class="prev acao btn-anterior btn btn-primary">Anterior</button>
<button type="button" name="next3" class="next acao btn-proximo btn btn-primary">Próximo</button>