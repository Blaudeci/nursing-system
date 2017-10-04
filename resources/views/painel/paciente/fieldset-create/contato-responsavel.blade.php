<div class="row form-group hrs-bottom">
	<div class="col-sm-12">
		<div class="col-sm-12">
			<h1>Responsável a serem Contactados em Casos de Urgência ou Emergência</h1>
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
		<div class="col-sm-4 form-group">
			<label for="nome_resp_one">Nome do responsável: <span class="notification-red">*</span></label>
			<input type="text" class="form-control" id="nome_resp_one" name="nome_resp_one" maxlength="100" value="{{old('nome_resp_one')}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="parentesco_resp_one">Parentesco: <span class="notification-red">*</span></label>
			<select class="form-control" id="parentesco_resp_one" name="parentesco_resp_one">
				<option value="" hidden selected>Selecione</option>
				<option value="Pai" @if (old('parentesco_resp_one') == 'Pai') selected="selected" @endif>Pai</option>
				<option value="Mãe" @if (old('parentesco_resp_one') == 'Mãe') selected="selected" @endif>Mãe</option>
				<option value="Tio(a)" @if (old('parentesco_resp_one') == 'Tio(a)') selected="selected" @endif>Tio(a)</option>
				<option value="Avô" @if (old('parentesco_resp_one') == 'Avô') selected="selected" @endif>Avô</option>
				<option value="Avó" @if (old('parentesco_resp_one') == 'Avó') selected="selected" @endif>Avó</option>
				<option value="Primo(a)" @if (old('parentesco_resp_one') == 'Primo(a)') selected="selected" @endif>Primo(a)</option>
				<option value="Irmão" @if (old('parentesco_resp_one') == 'Irmão') selected="selected" @endif>Irmão</option>
				<option value="Irmã" @if (old('parentesco_resp_one') == 'Irmã') selected="selected" @endif>Irmã</option>
				<option value="Amigo(a)" @if (old('parentesco_resp_one') == 'Amigo(a)') selected="selected" @endif>Amigo(a)</option>
			</select>
		</div>
		<div class="col-sm-3 form-group">
			<label for="fone_resp_one">Fone:</label>
			<input type="text" class="form-control input-tel" id="fone_resp_one" name="fone_resp_one" value="{{old('fone_resp_one')}}">
		</div>
		<div class="col-sm-3 form-group">
			<label for="cel_resp_one">Celular: <span class="notification-red">*</span></label>
			<input type="text" class="form-control input-cel" id="cel_resp_one" name="cel_resp_one" value="{{old('cel_resp_one')}}">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4 form-group">
			<label for="nome_resp_two">Nome do responsável:</label>
			<input type="text" class="form-control" id="nome_resp_two" name="nome_resp_two" maxlength="100" value="{{old('nome_resp_two')}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="parentesco_resp_two">Parentesco:</label>
			<select class="form-control" id="parentesco_resp_two" name="parentesco_resp_two">
				<option value="" selected>Selecione</option>
				<option value="Pai" @if (old('parentesco_resp_two') == 'Pai') selected="selected" @endif>Pai</option>
				<option value="Mãe" @if (old('parentesco_resp_two') == 'Mãe') selected="selected" @endif>Mãe</option>
				<option value="Tio(a)" @if (old('parentesco_resp_two') == 'Tio(a)') selected="selected" @endif>Tio(a)</option>
				<option value="Avô" @if (old('parentesco_resp_two') == 'Avô') selected="selected" @endif>Avô</option>
				<option value="Avó" @if (old('parentesco_resp_two') == 'Avó') selected="selected" @endif>Avó</option>
				<option value="Primo(a)" @if (old('parentesco_resp_two') == 'Primo(a)') selected="selected" @endif>Primo(a)</option>
				<option value="Irmão" @if (old('parentesco_resp_two') == 'Irmão') selected="selected" @endif>Irmão</option>
				<option value="Irmã" @if (old('parentesco_resp_two') == 'Irmã') selected="selected" @endif>Irmã</option>
				<option value="Amigo(a)" @if (old('parentesco_resp_two') == 'Amigo(a)') selected="selected" @endif>Amigo(a)</option>
			</select>
		</div>
		<div class="col-sm-3 form-group">
			<label for="fone_resp_two">Fone:</label>
			<input type="text" class="form-control input-tel" id="fone_resp_two" name="fone_resp_two" value="{{old('fone_resp_two')}}">
		</div>
		<div class="col-sm-3 form-group">
			<label for="cel_resp_two">Celular:</label>
			<input type="text" class="form-control input-cel" id="cel_resp_two" name="cel_resp_two" value="{{old('cel_resp_two')}}">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4 form-group">
			<label for="nome_resp_three">Nome do responsável:</label>
			<input type="text" class="form-control" id="nome_resp_three" name="nome_resp_three" maxlength="100" value="{{old('nome_resp_three')}}">
		</div>
		<div class="col-sm-2 form-group">
			<label for="parentesco_resp_three">Parentesco:</label>
			<select class="form-control" id="parentesco_resp_three" name="parentesco_resp_three">
				<option value="" selected>Selecione</option>
				<option value="Pai" @if (old('parentesco_resp_three') == 'Pai') selected="selected" @endif>Pai</option>
				<option value="Mãe" @if (old('parentesco_resp_three') == 'Mãe') selected="selected" @endif>Mãe</option>
				<option value="Tio(a)" @if (old('parentesco_resp_three') == 'Tio(a)') selected="selected" @endif>Tio(a)</option>
				<option value="Avô" @if (old('parentesco_resp_three') == 'Avô') selected="selected" @endif>Avô</option>
				<option value="Avó" @if (old('parentesco_resp_three') == 'Avó') selected="selected" @endif>Avó</option>
				<option value="Primo(a)" @if (old('parentesco_resp_three') == 'Primo(a)') selected="selected" @endif>Primo(a)</option>
				<option value="Irmão" @if (old('parentesco_resp_three') == 'Irmão') selected="selected" @endif>Irmão</option>
				<option value="Irmã" @if (old('parentesco_resp_three') == 'Irmã') selected="selected" @endif>Irmã</option>
				<option value="Amigo(a)" @if (old('parentesco_resp_three') == 'Amigo(a)') selected="selected" @endif>Amigo(a)</option>
			</select>
		</div>
		<div class="col-sm-3 form-group">
			<label for="fone_resp_three">Fone:</label>
			<input type="text" class="form-control input-tel" id="fone_resp_three" name="fone_resp_three" value="{{old('fone_resp_three')}}">
		</div>
		<div class="col-sm-3 form-group">
			<label for="cel_resp_three">Celular:</label>
			<input type="text" class="form-control input-cel" id="cel_resp_three" name="cel_resp_three" value="{{old('cel_resp_three')}}">
		</div>
	</div>
</div>
<br>
<br>
<hr>
<button type="button" name="prev" class="prev acao btn-previous btn btn-primary">Anterior</button>
<button type="button" name="next2" class="next acao btn-next btn btn-primary">Próximo</button>