<div class="row form-group hrs-bottom">
	<div class="col-sm-12">
		<div class="col-sm-12">
			<h1>Exame Fisíco</h1>
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
		<div class="col-sm-12 form-group">
			<label for="prescricao_enfermagem">Prescrição de Enfermagem:</label>
			<textarea class="form-control" rows="5" name="prescricao_enfermagem" id="prescricao_enfermagem">{{$ocorrencias->prescricao_enfermagem}}</textarea>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="col-sm-12 form-group">
			<label for="evolucao_enfermagem">Evolução de Enfermagem:</label>
			<textarea class="form-control" rows="5" name="evolucao_enfermagem" id="evolucao_enfermagem">{{$ocorrencias->evolucao_enfermagem}}</textarea>
		</div>
	</div>
</div>
<br>
<br>
<hr>
<button type="button" name="prev" class="prev acao btn-previous btn btn-primary">Anterior</button>
<button type="submit" class="btn-register btn btn-primary" onclick="document.form.submit();">Editar</button>