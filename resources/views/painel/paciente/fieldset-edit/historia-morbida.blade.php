<div class="row form-group hrs-bottom">
	<div class="col-sm-12">
		<div class="col-sm-12">
			<h1>História Mórbida Pregressa</h1>
		</div>
	</div>
</div>
<div class="row forms-morbidas">
	<div class="col-sm-12">
		<!-- Doenças Pré-Existentes -->
		<div class="col-sm-4 form-group">
			<p >Doenças Pré-existentes</p>
			<div class="col-sm-12 form-morbida">
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Acidente Vascular:
			      		</span>
			      		<select class="form-control" id="acidente_vascular" name="acidente_vascular">
			      			<option value="" @if ($morbida->acidente_vascular == '')  selected="selected" @endif>Selecione</option>
			      			<option value="Sim" @if ($morbida->acidente_vascular == 'Sim')  selected="selected" @endif>Sim</option>
							<option value="Não" @if ($morbida->acidente_vascular == 'Não')  selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Câncer:
			      		</span>
			      		<select class="form-control" id="cancer" name="cancer">
			      			<option value="" @if ($morbida->cancer == '')  selected="selected" @endif>Selecione</option>
			      			<option value="Sim" @if ($morbida->cancer == 'Sim')  selected="selected" @endif>Sim</option>
							<option value="Não" @if ($morbida->cancer == 'Não')  selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Hipertensão:
			      		</span>
			      		<select class="form-control" id="hipertensao" name="hipertensao">
			      			<option value="" @if ($morbida->hipertensao == '')  selected="selected" @endif>Selecione</option>
			      			<option value="Sim" @if ($morbida->hipertensao == 'Sim')  selected="selected" @endif>Sim</option>
							<option value="Não" @if ($morbida->hipertensao == 'Não')  selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Cardiopatia:
			      		</span>
			      		<select class="form-control" id="cardiopatia" name="cardiopatia">
			      			<option value="" @if ($morbida->cardiopatia == '')  selected="selected" @endif>Selecione</option>
							<option value="Cardiopatia congênita" @if ($morbida->cardiopatia == 'Cardiopatia congênita')  selected="selected" @endif>Cardiopatia congênita</option>
							<option value="Doenças no miocárdio" @if ($morbida->cardiopatia == 'Doenças no miocárdio')  selected="selected" @endif>Doenças no miocárdio</option>
                			<option value="Infecção no coração" @if ($morbida->cardiopatia == 'Infecção no coração')  selected="selected" @endif>Infecção no coração</option>
                			<option value="Cardiopatia de válvulas" @if ($morbida->cardiopatia == 'Cardiopatia de válvulas')  selected="selected" @endif>Cardiopatia de válvulas</option>
                			<option value="Cardiopatia hipertensiva" @if ($morbida->cardiopatia == 'Cardiopatia hipertensiva')  selected="selected" @endif>Cardiopatia hipertensiva</option>
                			<option value="Cardiopatia isquêmica" @if ($morbida->cardiopatia == 'Cardiopatia isquêmica')  selected="selected" @endif>Cardiopatia Isquêmica</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Diabetes:
			      		</span>
			      		<select class="form-control" id="diabetes" name="diabetes">
			      			<option value="" @if ($morbida->diabetes == '')  selected="selected" @endif>Selecione</option>
							<option value="Tipo-I" @if ($morbida->diabetes == 'Tipo-I')  selected="selected" @endif>Tipo I</option>
                			<option value="Tipo-II" @if ($morbida->diabetes == 'Tipo II')  selected="selected" @endif>Tipo II</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Doença Renal:
			      		</span>
			      		<select class="form-control" id="doenca_renal" name="doenca_renal">
			      			<option value="" @if ($morbida->doenca_renal == '')  selected="selected" @endif>Selecione</option>
			      			<option value="Cálculos renais" @if ($morbida->doenca_renal == 'Cálculos renais')  selected="selected" @endif>Cálculos renais</option>
			      			<option value="Infecção renal ou Pielonefrite" @if ($morbida->doenca_renal == 'Infecção renal ou Pielonefrite')  selected="selected" @endif>Infecção renal ou Pielonefrite</option>
			      			<option value="Cistos renais" @if ($morbida->doenca_renal == 'Cistos renais')  selected="selected" @endif>Cistos renais</option>
			      			<option value="Perda da função renal" @if ($morbida->doenca_renal == 'Perda da função renal')  selected="selected" @endif>Perda da função renal</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Pneumopatia:
			      		</span>
			      		<select class="form-control" id="pneumopatia" name="pneumopatia">
			      			<option value="" @if ($morbida->pneumopatia == '')  selected="selected" @endif>Selecione</option>
							<option value="Pneumopatia Intersticial" @if ($morbida->pneumopatia == 'Pneumopatia Intersticial')  selected="selected" @endif>Pneumopatia Intersticial</option>
							<option value="Pneumopatia Aguda" @if ($morbida->pneumopatia == 'Pneumopatia Aguda')  selected="selected" @endif>Pneumopatia Aguda</option>
							<option value="Pneumopatia Crônica" @if ($morbida->pneumopatia == 'Pneumopatia Crônica')  selected="selected" @endif>Pneumopatia Crônica</option>
							<option value="Pneumopatia Ocupacional" @if ($morbida->pneumopatia == 'Pneumopatia Ocupacional')  selected="selected" @endif>Pneumopatia Ocupacional</option>
							<option value="Pneumopatia Parasitária" @if ($morbida->pneumopatia == 'Pneumopatia Parasitária')  selected="selected" @endif>Pneumopatia Parasitária</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<label for="outros_pre_existentes">Outros:</label>
					<textarea class="form-control" id="outros_pre_existentes" name="outros_pre_existentes" rows="3">{{$morbida->outros_pre_existentes}}</textarea>
				</div>
			</div>
		</div>

		<!-- Transtornos Alérgicos -->
		<div class="col-sm-4 form-group">
				<p>Transtornos Alérgicos</p>
			<div class="col-sm-12 form-morbida">
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Drogas:
			      		</span>
			      		<select class="form-control" id="drogas" name="drogas">
			      			<option value="" @if ($morbida->drogas == '')  selected="selected" @endif>Selecione</option>
			      			<option value="Sim" @if ($morbida->drogas == 'Sim')  selected="selected" @endif>Sim</option>
							<option value="Não" @if ($morbida->drogas == 'Não')  selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Alimentos:
			      		</span>
			      		<select class="form-control" id="alimentos" name="alimentos">
			      			<option value="" @if ($morbida->alimentos == '')  selected="selected" @endif>Selecione</option>
			      			<option value="Sim" @if ($morbida->alimentos == 'Sim')  selected="selected" @endif>Sim</option>
							<option value="Não" @if ($morbida->alimentos == 'Não')  selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Cosméticos:
			      		</span>
			      		<select class="form-control" id="cosmeticos" name="cosmeticos">
			      			<option value="" @if ($morbida->cosmeticos == '')  selected="selected" @endif>Selecione</option>
			      			<option value="Sim" @if ($morbida->cosmeticos == 'Sim')  selected="selected" @endif>Sim</option>
							<option value="Não" @if ($morbida->cosmeticos == 'Não')  selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Esparadrapo:
			      		</span>
			      		<select class="form-control" id="esparadrapo" name="esparadrapo">
			      			<option value="" @if ($morbida->esparadrapo == '')  selected="selected" @endif>Selecione</option>
			      			<option value="Sim" @if ($morbida->esparadrapo == 'Sim')  selected="selected" @endif>Sim</option>
							<option value="Não" @if ($morbida->esparadrapo == 'Não')  selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Lã:
			      		</span>
			      		<select class="form-control" id="la_alergico" name="la_alergico">
			      			<option value="" @if ($morbida->la_alergico == '')  selected="selected" @endif>Selecione</option>
                			<option value="Sim" @if ($morbida->la_alergico == 'Sim')  selected="selected" @endif>Sim</option>
                			<option value="Não" @if ($morbida->la_alergico == 'Não')  selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<label for="outros_alergicos">Outros:</label>
					<textarea class="form-control" id="outros_alergicos" name="outros_alergicos" rows="3">{{$morbida->outros_alergicos}}</textarea>
				</div>
			</div>
		</div>
		<!-- Fatores de Risco -->
		<div class="col-sm-4 form-group">
				<p>Fatores de Risco</p>
			<div class="col-sm-12 form-morbida">
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Tabagismo:
			      		</span>
			      		<select class="form-control" id="tabagismo" name="tabagismo">
			      			<option value="" @if ($morbida->tabagismo == '')  selected="selected" @endif>Selecione</option>
			      			<option value="Sim" @if ($morbida->tabagismo == 'Sim')  selected="selected" @endif>Sim</option>
							<option value="Não" @if ($morbida->tabagismo == 'Não')  selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>	
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Etilismo:
			      		</span>
			      		<select class="form-control" id="etilismo" name="etilismo">
			      			<option value="" @if ($morbida->etilismo == '')  selected="selected" @endif>Selecione</option>
			      			<option value="Sim" @if ($morbida->etilismo == 'Sim')  selected="selected" @endif>Sim</option>
							<option value="Não" @if ($morbida->etilismo == 'Não')  selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Quimioterapia:
			      		</span>
			      		<select class="form-control" id="quimioterapia" name="quimioterapia">
			      			<option value="" @if ($morbida->quimioterapia == '')  selected="selected" @endif>Selecione</option>
			      			<option value="Sim" @if ($morbida->quimioterapia == 'Sim')  selected="selected" @endif>Sim</option>
							<option value="Não" @if ($morbida->quimioterapia == 'Não')  selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Radioterapia:
			      		</span>
			      		<select class="form-control" id="radioterapia" name="radioterapia">
			      			<option value="" @if ($morbida->radioterapia == '')  selected="selected" @endif>Selecione</option>
			      			<option value="Sim" @if ($morbida->radioterapia == 'Sim')  selected="selected" @endif>Sim</option>
							<option value="Não" @if ($morbida->radioterapia == 'Não')  selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Dependência Química:
			      		</span>
			      		<select class="form-control" id="dependencia_quimica" name="dependencia_quimica">
			      			<option value="" @if ($morbida->dependencia_quimica == '')  selected="selected" @endif>Selecione</option>
			      			<option value="Sim" @if ($morbida->dependencia_quimica == 'Sim')  selected="selected" @endif>Sim</option>
							<option value="Não" @if ($morbida->dependencia_quimica == 'Não')  selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Violência:
			      		</span>
			      		<select class="form-control" id="violencia" name="violencia">
			      			<option value="" @if ($morbida->violencia == '')  selected="selected" @endif>Selecione</option>
			      			<option value="Sim" @if ($morbida->violencia == 'Sim')  selected="selected" @endif>Sim</option>
							<option value="Não" @if ($morbida->violencia == 'Não')  selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<label for="outros_fatores_riscos">Outros:</label>
					<textarea class="form-control" id="outros_fatores_riscos" name="outros_fatores_riscos" rows="3">{{$morbida->outros_fatores_riscos}}</textarea>
				</div>
			</div>
		</div>
	</div>
</div>
<hr>
<button type="button" name="prev" class="prev acao btn-previous btn btn-primary">Anterior</button>
<button type="button" name="next4" class="next acao btn-next btn btn-primary">Próximo</button>