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
			<label for="sono_repouso">Sono e Repouso:</label>
			<select class="form-control" id="sono_repouso" name="sono_repouso">
				<option value="" @if ($habito->sono_repouso == '')  selected="selected" @endif>Selecione</option>
				<option value="Alterado" @if ($habito->sono_repouso == 'Alterado')  selected="selected" @endif>Alterado</option>
				<option value="Satisfatorio" @if ($habito->sono_repouso == 'Satisfatorio')  selected="selected" @endif>Satisfatório</option>
			</select>
		</div>
		<div class="col-sm-3 form-group" id="horas-sono__display">
			<label for="horas_sono">Horas de Sono: <span class="notification-red">*</span></label>
			<div class="input-group">
				<input type="text" class="form-control input-time" placeholder="00:00" aria-describedby="basic-addon2" id="horas_sono" name="horas_sono" value="{{$habito->horas_sono}}">
				<span class="input-group-addon" id="basic-addon2">horas/dia</span>
			</div>
		</div>
		<div class="col-sm-3 form-group">
			<label for="atividade_fisica">Atividade Física:</label>
			<select class="form-control" id="atividade_fisica" name="atividade_fisica">
				<option value="" @if ($habito->atividade_fisica == '')  selected="selected" @endif>Selecione</option>
				<option value="Sim" @if ($habito->atividade_fisica == 'Sim')  selected="selected" @endif>Sim</option>
				<option value="Não" @if ($habito->atividade_fisica == 'Não')  selected="selected" @endif>Não</option>
			</select>
		</div>
		<div class="col-sm-3 form-group" id="qtde-atividade-fisica__display">
			<label for="qtde_atividade_fisica">Qtde Atividade Física: <span class="notification-red">*</span></label>
			<div class="input-group">
				<input type="number" class="form-control" aria-describedby="basic-addon2" id="qtde_atividade_fisica" name="qtde_atividade_fisica" value="{{$habito->qtde_atividade_fisica}}" min="0">
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
			<label for="frutas_verduras">Frutas e verduras:</label>
			<div class="input-group">
				<input type="number" class="form-control" aria-describedby="basic-addon2" id="frutas_verduras" name="frutas_verduras" value="{{$habito->frutas_verduras}}" min="0">
				<span class="input-group-addon" id="basic-addon2">x semana</span>
			</div>
		</div>
		<div class="col-sm-4 form-group">
			<label for="carne_vermelha">Carne vermelha:</label>
			<div class="input-group">
				<input type="number" class="form-control" aria-describedby="basic-addon2" id="carne_vermelha" name="carne_vermelha" value="{{$habito->carne_vermelha}}" min="0">
				<span class="input-group-addon" id="basic-addon2">x semana</span>
			</div>
		</div>
		<div class="col-sm-4 form-group">
			<label for="carne_branca">Carne branca:</label>
			<div class="input-group">
				<input type="number" class="form-control" aria-describedby="basic-addon2" id="carne_branca" name="carne_branca" value="{{$habito->carne_branca}}" min="0">
				<span class="input-group-addon" id="basic-addon2">x semana</span>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-4 form-group">
			<label for="suco_habitos">Suco:</label>
			<div class="input-group">
				<input type="number" class="form-control" aria-describedby="basic-addon2" id="suco_habitos" name="suco_habitos" value="{{$habito->suco_habitos}}" min="0">
				<span class="input-group-addon" id="basic-addon2">copos/dia</span>
			</div>
		</div>
		<div class="col-sm-4 form-group">
			<label for="agua_habitos">Água:</label>
			<div class="input-group">
				<input type="number" class="form-control" aria-describedby="basic-addon2" id="agua_habitos" name="agua_habitos" value="{{$habito->agua_habitos}}" min="0">
				<span class="input-group-addon" id="basic-addon2">copos/dia</span>
			</div>
		</div>
		<div class="col-sm-4 form-group">
			<label for="cha_habitos">Chá:</label>
			<div class="input-group">
				<input type="number" class="form-control" aria-describedby="basic-addon2" id="cha_habitos" name="cha_habitos" value="{{$habito->cha_habitos}}" min="0">
				<span class="input-group-addon" id="basic-addon2">copos/dia</span>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12 form-group">
		<div class="col-sm-12">
			<label for="outras_informacoes">Outras Informações:</label>
			<textarea id="outras_informacoes" class="form-control" name="outras_informacoes" rows="4">{{$habito->outras_informacoes}}</textarea>
		</div>
	</div>
</div>
<hr>
<button type="button" name="prev" class="prev acao btn-previous btn btn-primary">Anterior</button>
<button type="submit" id="btn-submit__patient" class="btn-register btn btn-primary" onclick="document.form.submit();">Editar</button>