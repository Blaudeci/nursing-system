<div class="row form-group hrs-bottom">
	<div class="col-sm-12">
		<div class="col-sm-12">
			<h1>Motivo da Consulta</h1>
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
		<div class="col-sm-6 form-group">
			<label for="tipo_queixa">Tipo da Queixa: <span class="notification-red">*</span></label>
			<select name="tipo_queixa" id="tipo_queixa" class="form-control">
				<option value="" hidden @if ($ocorrencias->tipo_queixa == '')  selected="selected" @endif>Selecione</option>
				<option value="Exame Preventivo" @if ($ocorrencias->tipo_queixa == 'Preventivo')  selected="selected" @endif>Exame Preventivo</option>
				<option value="Febre" @if ($ocorrencias->tipo_queixa == 'Febre')  selected="selected" @endif>Febre</option>
				<option value="Picada Inseto" @if ($ocorrencias->tipo_queixa == 'Picada Inseto')  selected="selected" @endif>Picada Inseto</option>
				<option value="Geniturinária" @if ($ocorrencias->tipo_queixa == 'Geniturinária')  selected="selected" @endif>Geniturinária</option>
				<option value="Orientação" @if ($ocorrencias->tipo_queixa == 'Orientação')  selected="selected" @endif>Orientação</option>
				<option value="Ocular/Auricular" @if ($ocorrencias->tipo_queixa == 'Ocular/Auricular')  selected="selected" @endif>Ocular/Auricular</option>
				<option value="Cólica Mestrual" @if ($ocorrencias->tipo_queixa == 'Cólica Mestrual')  selected="selected" @endif>Cólica Mestrual</option>
				<option value="Lesão" @if ($ocorrencias->tipo_queixa == 'Lesão')  selected="selected" @endif>Lesão</option>
				<option value="Gastrintestinal" @if ($ocorrencias->tipo_queixa == 'Gastrintestinal')  selected="selected" @endif>Gastrintestinal</option>
				<option value="Tontura/Mal Estar" @if ($ocorrencias->tipo_queixa == 'Tontura/Mal Estar')  selected="selected" @endif>Tontura/Mal Estar</option>
				<option value="Cefaléia" @if ($ocorrencias->tipo_queixa == 'Cefaléia')  selected="selected" @endif>Cefaléia</option>
			</select>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="col-sm-12 form-group">
			<label for="motivo_consulta">Motivo da consulta/Queixa principal: <span class="notification-red">*</span></label>
			<textarea class="form-control" name="motivo_consulta" id="motivo_consulta" rows="7">{{$ocorrencias->motivo_consulta}}</textarea>
		</div>
	</div>
</div>
<br>
<br>
<hr>
<button type="button" name="prev" class="prev acao btn-previous btn btn-primary">Anterior</button>
<button type="button" name="next2" class="next acao btn-next btn btn-primary">Próximo</button>