<div class="row form-group hrs-bottom">
	<div class="col-sm-12">
		<div class="col-sm-12">
			<h1>Formulário de Ocorrência</h1>
		</div>
	</div>
</div>
<div class="col-sm-12">
	@if(Session::has('message'))
		<script type="text/javascript">
			swal("Ocorrência editada com sucesso!", "", "success");
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
		<div class="col-sm-2 form-group">
			<label for="id_paciente">Código:</label>
			<input type="text" class="form-control" name="id_paciente" id="id_paciente" value="{{$paciente->id}}" disabled="disabled">
			<input type="hidden" class="form-control" name="id_paciente" id="id_paciente" value="{{$paciente->id}}">
		</div>
		<div class="col-sm-4 form-group">
			<label>Nome do Paciente:</label>
			<input type="text" class="form-control" id="nome" name="nome" value="{{$paciente->nome}}" disabled/>
		</div>
		<div class="col-sm-2 form-group">
			<label>Sexo:</label>
			<input type="text" class="form-control" id="sexo" name="sexo" value="{{$paciente->sexo}}" disabled/>
		</div>
		<div class="col-sm-2 form-group">
			<label>Perfil:</label>
			<input type="text" class="form-control" id="perfil" name="perfil" value="{{$paciente->perfil}}" disabled/>
		</div>
		<div class="col-sm-2 form-group">
			<label>Data Nasc.:</label>
			<input type="text" class="form-control" id="data_nasc" name="data_nasc" value="{{$paciente->data_nasc}}" disabled/>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="col-sm-4 form-group">
			<label>Acompanhamento:</label>
			<input type="text" class="form-control" id="acompanhamento" name="acompanhamento" value="{{$ocorrencias->acompanhante}}">
		</div>
		<div class="col-sm-4 form-group">
			<label for="encaminhamento">Encaminhamento: <span class="notification-red">*</span></label>
			<select class="form-control" id="encaminhamento" name="encaminhamento">
				<option value="" hidden @if ($ocorrencias->encaminhamento == '')  selected="selected" @endif>Selecione</option>
				<option value="Hospital" @if ($ocorrencias->encaminhamento == 'Hospital')  selected="selected" @endif>Hospital</option>
				<option value="ESF" @if ($ocorrencias->encaminhamento == 'ESF')  selected="selected" @endif>ESF</option>
				<option value="Família" @if ($ocorrencias->encaminhamento == 'Família')  selected="selected" @endif>Família</option>
				<option value="Psicóloga" @if ($ocorrencias->encaminhamento == 'Psicóloga')  selected="selected" @endif>Psicóloga</option>
			</select>
		</div>
		<div class="col-sm-4 form-group">
			<label for="conduta_enfermagem">Conduta de Enfermagem: <span class="notification-red">*</span></label>
			<select class="form-control" id="conduta_enfermagem" name="conduta_enfermagem">
				<option value="" hidden @if ($ocorrencias->conduta_enfermagem == '')  selected="selected" @endif>Selecione</option>
				<option value="Orientações" @if ($ocorrencias->conduta_enfermagem == 'Orientações')  selected="selected" @endif>Orientações</option>
				<option value="Procedimentos/Observação" @if ($ocorrencias->conduta_enfermagem == 'Procedimentos/Observação')  selected="selected" @endif>Procedimentos/Observação</option>
				<option value="Encaminhamentos" @if ($ocorrencias->conduta_enfermagem == 'Encaminhamentos')  selected="selected" @endif>Encaminhamentos</option>
			</select>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="col-sm-12 form-group">
			<label for="avaliacao_consulta_anterior">Avaliação da consulta anterior:</label>
			<textarea class="form-control" name="avaliacao_consulta_anterior" id="avaliacao_consulta_anterior" rows="8">{{$ocorrencias->consulta_anterior}}</textarea>
		</div>
	</div>
</div>
<br>
<br>
<hr>
<button type="button" name="next1" class="next acao btn-next btn btn-primary">Próximo</button>