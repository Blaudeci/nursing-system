<div class="row form-group hrs-bottom">
	<div class="col-sm-12">
		<div class="col-sm-12">
			<h1>Hábitos</h1>
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
	<div class="col-sm-12 form-group">
		<div class="col-sm-3 form-group">
			<label for="sono_repouso">Sono e Repouso: <span class="notification-red">*</span></label>
			<select class="form-control" id="sono_repouso" name="sono_repouso">
				<option value="" selected hidden>Selecione</option>
				<option value="Alterado" @if (old('sono_repouso') == 'Alterado') selected="selected" @endif>Alterado</option>
				<option value="Satisfatorio" @if (old('sono_repouso') == 'Satisfatorio') selected="selected" @endif>Satisfatório</option>
			</select>
		</div>
		<div class="col-sm-3 form-group">
			<label for="horas_sono">Horas de Sono: <span class="notification-red">*</span></label>
			<div class="input-group">
				<input type="text" class="form-control input-time" placeholder="00:00" aria-describedby="basic-addon2" id="horas_sono" name="horas_sono" value="{{old('horas_sono')}}">
				<span class="input-group-addon" id="basic-addon2">horas/dia</span>
			</div>
		</div>
		<div class="col-sm-3 form-group">
			<label for="atividade_fisica">Atividade Física: <span class="notification-red">*</span></label>
			<select class="form-control" id="atividade_fisica" name="atividade_fisica">
				<option value="" selected hidden>Selecione</option>
				<option value="Sim" @if (old('atividade_fisica') == 'Sim') selected="selected" @endif>Sim</option>
				<option value="Não" @if (old('atividade_fisica') == 'Não') selected="selected" @endif>Não</option>
			</select>
		</div>
		<div class="col-sm-3 form-group">
			<label for="qtde_atividade_fisica">Qtde Atividade Física: <span class="notification-red">*</span></label>
			<div class="input-group">
				<input type="text" class="form-control" aria-describedby="basic-addon2" id="qtde_atividade_fisica" name="qtde_atividade_fisica" value="{{old('qtde_atividade_fisica')}}">
				<span class="input-group-addon" id="basic-addon2">x semana</span>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12 form-group">
		<div class="col-sm-12">
			<label>Alimentos e liquidos ingeridos:</label>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4 form-group">
			<label for="frutas_verduras">Frutas e verduras: <span class="notification-red">*</span></label>
			<div class="input-group">
				<input type="text" class="form-control" aria-describedby="basic-addon2" id="frutas_verduras" name="frutas_verduras" value="{{old('frutas_verduras')}}">
				<span class="input-group-addon" id="basic-addon2">x semana</span>
			</div>
		</div>
		<div class="col-sm-4 form-group">
			<label for="carne_vermelha">Carne vermelha: <span class="notification-red">*</span></label>
			<div class="input-group">
				<input type="text" class="form-control" aria-describedby="basic-addon2" id="carne_vermelha" name="carne_vermelha" value="{{old('carne_vermelha')}}">
				<span class="input-group-addon" id="basic-addon2">x semana</span>
			</div>
		</div>
		<div class="col-sm-4 form-group">
			<label for="carne_branca">Carne branca: <span class="notification-red">*</span></label>
			<div class="input-group">
				<input type="text" class="form-control" aria-describedby="basic-addon2" id="carne_branca" name="carne_branca" value="{{old('carne_branca')}}">
				<span class="input-group-addon" id="basic-addon2">x semana</span>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4 form-group">
			<label for="suco_habitos">Suco: <span class="notification-red">*</span></label>
			<div class="input-group">
				<input type="text" class="form-control" aria-describedby="basic-addon2" id="suco_habitos" name="suco_habitos" value="{{old('suco_habitos')}}">
				<span class="input-group-addon" id="basic-addon2">copos/dia</span>
			</div>
		</div>

		<div class="col-sm-4 form-group">
			<label for="agua_habitos">Água: <span class="notification-red">*</span></label>
			<div class="input-group">
				<input type="text" class="form-control" aria-describedby="basic-addon2" id="agua_habitos" name="agua_habitos" value="{{old('agua_habitos')}}">
				<span class="input-group-addon" id="basic-addon2">copos/dia</span>
			</div>
		</div>

		<div class="col-sm-4 form-group">
			<label for="cha_habitos">Chá: <span class="notification-red">*</span></label>
			<div class="input-group">
				<input type="text" class="form-control" aria-describedby="basic-addon2" id="cha_habitos" name="cha_habitos" value="{{old('cha_habitos')}}">
				<span class="input-group-addon" id="basic-addon2">copos/dia</span>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12 form-group">
		<div class="col-sm-12">
			<label for="outras_informacoes">Outras Informações:</label>
			<textarea id="outras_informacoes" class="form-control" name="outras_informacoes" rows="4" value="{{old('outras_informacoes')}}"></textarea>
		</div>
	</div>
</div>
<hr>
<button type="button" name="prev" class="prev acao btn-previous btn btn-primary">Anterior</button>
<button type="submit" id="btn-submit__patient" class="btn-register btn btn-primary">Cadastrar</button>