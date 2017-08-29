<div class="row form-group hrs-bottom">
	<div class="col-sm-12">
		<div class="col-sm-12">
			<h1>Responsável a serem Contactados em Casos de Urgência ou Emergência</h1>
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
		<div class="col-sm-4 form-group">
			<label for="nome-responsavel-one">Nome do responsável:<span class="notification-red">*</span></label>
			<input type="text" class="form-control" id="nome-responsavel-one" name="nome-responsavel-one" maxlength="100" value="{{old('nome-responsavel-one')}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="parentesco-responsavel-one">Parentesco:<span class="notification-red">*</span></label>
			<select name="parentesco-responsavel-one" id="parentesco-responsavel-one" class="form-control" required>
				<option selected disabled>Selecione</option>
				<option value="Pai" @if (old('parentesco-responsavel-one') == 'Pai') selected="selected" @endif>Pai</option>
				<option value="Mãe" @if (old('parentesco-responsavel-one') == 'Mãe') selected="selected" @endif>Mãe</option>
				<option value="Tio" @if (old('parentesco-responsavel-one') == 'Tio') selected="selected" @endif>Tio (a)</option>
				<option value="Avô" @if (old('parentesco-responsavel-one') == 'Avô') selected="selected" @endif>Avô</option>
				<option value="Avó" @if (old('parentesco-responsavel-one') == 'Avó') selected="selected" @endif>Avó</option>
				<option value="Primo" @if (old('parentesco-responsavel-one') == 'Primo') selected="selected" @endif>Primo (a)</option>
				<option value="Outro" @if (old('parentesco-responsavel-one') == 'Outro') selected="selected" @endif>Outro</option>
			</select>
		</div>
		<div class="col-sm-3 form-group">
			<label for="fone-reponsavel-one">Fone:</label>
			<input type="text" class="form-control input-tel" id="fone-reponsavel-one" name="fone-reponsavel-one" value="{{old('fone-reponsavel-one')}}">
		</div>
		<div class="col-sm-3 form-group">
			<label for="cel-reponsavel-one">Celular:<span class="notification-red">*</span></label>
			<input type="text" class="form-control input-cel" id="cel-reponsavel-one" name="cel-reponsavel-one" value="{{old('cel-reponsavel-one')}}">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4 form-group">
			<label for="nome-responsavel-two">Nome do responsável:</label>
			<input type="text" class="form-control" id="nome-responsavel-two" name="nome-responsavel-two" maxlength="100" value="{{old('nome-responsavel-two')}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="parentesco-responsavel-two">Parentesco:</label>
			<select name="parentesco-responsavel-two" id="parentesco-responsavel-two" class="form-control" required>
				<option selected disabled>Selecione</option>
				<option value="Pai" @if (old('parentesco-responsavel-two') == 'Pai') selected="selected" @endif>Pai</option>
				<option value="Mãe" @if (old('parentesco-responsavel-two') == 'Mãe') selected="selected" @endif>Mãe</option>
				<option value="Tio" @if (old('parentesco-responsavel-two') == 'Tio') selected="selected" @endif>Tio (a)</option>
				<option value="Avô" @if (old('parentesco-responsavel-two') == 'Avô') selected="selected" @endif>Avô</option>
				<option value="Avó" @if (old('parentesco-responsavel-two') == 'Avó') selected="selected" @endif>Avó</option>
				<option value="Primo" @if (old('parentesco-responsavel-two') == 'Primo') selected="selected" @endif>Primo (a)</option>
				<option value="Outro" @if (old('parentesco-responsavel-two') == 'Outro') selected="selected" @endif>Outro</option>
			</select>
		</div>
		<div class="col-sm-3 form-group">
			<label for="fone-reponsavel-two">Fone:</label>
			<input type="text" class="form-control input-tel" id="fone-reponsavel-two" name="fone-reponsavel-two" value="{{old('fone-reponsavel-two')}}">
		</div>
		<div class="col-sm-3 form-group">
			<label for="cel-reponsavel-two">Celular:</label>
			<input type="text" class="form-control input-cel" id="cel-reponsavel-two" name="cel-reponsavel-two" value="{{old('cel-reponsavel-two')}}">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4 form-group">
			<label for="nome-responsavel-three">Nome do responsável:</label>
			<input type="text" class="form-control" id="nome-responsavel-three" name="nome-responsavel-three" maxlength="100" value="{{old('nome-responsavel-three')}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="parentesco-responsavel-three">Parentesco:</label>
			<select name="parentesco-responsavel-three" id="parentesco-responsavel-three" class="form-control" required>
				<option selected disabled>Selecione</option>
				<option value="Pai" @if (old('parentesco-responsavel-three') == 'Pai') selected="selected" @endif>Pai</option>
				<option value="Mãe" @if (old('parentesco-responsavel-three') == 'Mãe') selected="selected" @endif>Mãe</option>
				<option value="Tio" @if (old('parentesco-responsavel-three') == 'Tio') selected="selected" @endif>Tio (a)</option>
				<option value="Avô" @if (old('parentesco-responsavel-three') == 'Avô') selected="selected" @endif>Avô</option>
				<option value="Avó" @if (old('parentesco-responsavel-three') == 'Avó') selected="selected" @endif>Avó</option>
				<option value="Primo" @if (old('parentesco-responsavel-three') == 'Primo') selected="selected" @endif>Primo (a)</option>
				<option value="Outro" @if (old('parentesco-responsavel-three') == 'Outro') selected="selected" @endif>Outro</option>
			</select>
		</div>
		<div class="col-sm-3 form-group">
			<label for="fone-reponsavel-three">Fone:</label>
			<input type="text" class="form-control input-tel" id="fone-reponsavel-three" name="fone-reponsavel-three" value="{{old('fone-reponsavel-three')}}">
		</div>
		<div class="col-sm-3 form-group">
			<label for="cel-reponsavel-three">Celular:</label>
			<input type="text" class="form-control input-cel" id="cel-reponsavel-three" name="cel-reponsavel-three" value="{{old('cel-reponsavel-three')}}">
		</div>
	</div>
</div>
<br>
<br>
<hr>
<button type="button" name="prev" class="prev acao btn-anterior btn btn-primary">Anterior</button>
<button type="button" name="next2" class="next acao btn-proximo btn btn-primary">Próximo</button>