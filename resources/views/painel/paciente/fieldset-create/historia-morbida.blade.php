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
			      			<option value="" selected hidden>Selecione</option>
			      			<option value="Sim" @if (old('acidente_vascular') == 'Sim') selected="selected" @endif>Sim</option>
							<option value="Nao" @if (old('acidente_vascular') == 'Nao') selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Câncer:
			      		</span>
			      		<select class="form-control" id="cancer" name="cancer">
			      			<option value="" selected hidden>Selecione</option>
			      			<option value="Sim" @if (old('cancer') == 'Sim') selected="selected" @endif>Sim</option>
							<option value="Nao" @if (old('cancer') == 'Nao') selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Hipertensão:
			      		</span>
			      		<select class="form-control" id="hipertensao" name="hipertensao">
			      			<option value="" selected hidden>Selecione</option>
			      			<option value="Sim" @if (old('hipertensao') == 'Sim') selected="selected" @endif>Sim</option>
							<option value="Nao" @if (old('hipertensao') == 'Nao') selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Cardiopatia:
			      		</span>
			      		<select class="form-control" id="cardiopatia" name="cardiopatia">
			      			<option value="" selected hidden>Selecione</option>
							<option value="cardiopatia_congenita" @if (old('cardiopatia') == 'cardiopatia_congenita') selected="selected" @endif>Cardiopatia congênita</option>
							<option value="doencas_miocardio" @if (old('cardiopatia') == 'doencas_miocardio') selected="selected" @endif>Doenças no miocárdio</option>
                			<option value="infeccao_coracao" @if (old('cardiopatia') == 'infeccao_coracao') selected="selected" @endif>Infecção no coração</option>
                			<option value="cardiopatia_valvulas" @if (old('cardiopatia') == 'cardiopatia_valvulas') selected="selected" @endif>Cardiopatia de válvulas</option>
                			<option value="cardiopatia_hipertensiva" @if (old('cardiopatia') == 'cardiopatia_hipertensiva') selected="selected" @endif>Cardiopatia hipertensiva</option>
                			<option value="cardiopatia_isquemica" @if (old('cardiopatia') == 'cardiopatia_isquemica') selected="selected" @endif>Cardiopatia Isquêmica</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Diabetes:
			      		</span>
			      		<select class="form-control" id="diabetes" name="diabetes">
			      			<option value="" selected hidden>Selecione</option>
							<option value="Tipo-I" @if (old('diabetes') == 'Tipo-I') selected="selected" @endif>Tipo I</option>
                			<option value="Tipo-II" @if (old('diabetes') == 'Tipo-II') selected="selected" @endif>Tipo II</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Doença Renal:
			      		</span>
			      		<select class="form-control" id="doenca_renal" name="doenca_renal">
			      			<option value="" selected hidden>Selecione</option>
			      			<option value="calculos_renais" @if (old('doenca_renal') == 'calculos_renais') selected="selected" @endif>Cálculos renais</option>
			      			<option value="infeccao_renal" @if (old('doenca_renal') == 'infeccao_renal') selected="selected" @endif>Infecção renal ou Pielonefrite</option>
			      			<option value="cistos_renais" @if (old('doenca_renal') == 'cistos_renais') selected="selected" @endif>Cistos renais</option>
			      			<option value="perda_funcao_renal" @if (old('doenca_renal') == 'perda_funcao_renal') selected="selected" @endif>Perda da função renal</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Pneumopatia:
			      		</span>
			      		<select class="form-control" id="pneumopatia" name="pneumopatia">
			      			<option value="" selected hidden>Selecione</option>
							<option value="pneumopatia_intersticial" @if (old('pneumopatia') == 'pneumopatia_intersticial') selected="selected" @endif>Pneumopatia Intersticial</option>
							<option value="pneumopatia_aguda" @if (old('pneumopatia') == 'pneumopatia_aguda') selected="selected" @endif>Pneumopatia Aguda</option>
							<option value="pneumopatia_cronica" @if (old('pneumopatia') == 'pneumopatia_cronica') selected="selected" @endif>Pneumopatia Crônica</option>
							<option value="pneumopatia_ocupacional" @if (old('pneumopatia') == 'pneumopatia_ocupacional') selected="selected" @endif>Pneumopatia Ocupacional</option>
							<option value="pneumopatia_parasitaria" @if (old('pneumopatia') == 'pneumopatia_parasitaria') selected="selected" @endif>Pneumopatia Parasitária</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<label for="outros_pre_existentes">Outros:</label>
					<textarea class="form-control" id="outros_pre_existentes" name="outros_pre_existentes" rows="3"></textarea>
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
			      			<option value="" selected hidden>Selecione</option>
			      			<option value="Sim" @if (old('drogas') == 'Sim') selected="selected" @endif>Sim</option>
							<option value="Nao" @if (old('drogas') == 'Nao') selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Alimentos:
			      		</span>
			      		<select class="form-control" id="alimentos" name="alimentos">
			      			<option value="" selected hidden>Selecione</option>
			      			<option value="Sim" @if (old('alimentos') == 'Sim') selected="selected" @endif>Sim</option>
							<option value="Nao" @if (old('alimentos') == 'Nao') selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Cosméticos:
			      		</span>
			      		<select class="form-control" id="cosmeticos" name="cosmeticos">
			      			<option value="" selected hidden>Selecione</option>
			      			<option value="Sim" @if (old('cosmeticos') == 'Sim') selected="selected" @endif>Sim</option>
							<option value="Nao" @if (old('cosmeticos') == 'Nao') selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Esparadrapo:
			      		</span>
			      		<select class="form-control" id="esparadrapo" name="esparadrapo">
			      			<option value="" selected hidden>Selecione</option>
			      			<option value="Sim" @if (old('esparadrapo') == 'Sim') selected="selected" @endif>Sim</option>
							<option value="Nao" @if (old('esparadrapo') == 'Nao') selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Lã:
			      		</span>
			      		<select class="form-control" id="la_alergico" name="la_alergico">
			      			<option value="" selected hidden>Selecione</option>
                			<option value="Sim" @if (old('la_alergico') == 'Sim') selected="selected" @endif>Sim</option>
                			<option value="Nao" @if (old('la_alergico') == 'Nao') selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<label for="outros_alergicos">Outros:</label>
					<textarea class="form-control" id="outros_alergicos" name="outros_alergicos" rows="3"></textarea>
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
			      			<option value="" selected hidden>Selecione</option>
			      			<option value="Sim" @if (old('tabagismo') == 'Sim') selected="selected" @endif>Sim</option>
							<option value="Nao" @if (old('tabagismo') == 'Nao') selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>	
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Etilismo:
			      		</span>
			      		<select class="form-control" id="etilismo" name="etilismo">
			      			<option value="" selected hidden>Selecione</option>
			      			<option value="Sim" @if (old('etilismo') == 'Sim') selected="selected" @endif>Sim</option>
							<option value="Nao" @if (old('etilismo') == 'Nao') selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Quimioterapia:
			      		</span>
			      		<select class="form-control" id="quimioterapia" name="quimioterapia">
			      			<option value="" selected hidden>Selecione</option>
			      			<option value="Sim" @if (old('quimioterapia') == 'Sim') selected="selected" @endif>Sim</option>
							<option value="Nao" @if (old('quimioterapia') == 'Nao') selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Radioterapia:
			      		</span>
			      		<select class="form-control" id="radioterapia" name="radioterapia">
			      			<option value="" selected hidden>Selecione</option>
			      			<option value="Sim" @if (old('radioterapia') == 'Sim') selected="selected" @endif>Sim</option>
							<option value="Nao" @if (old('radioterapia') == 'Nao') selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Dependência Química:
			      		</span>
			      		<select class="form-control" id="dependencia_quimica" name="dependencia_quimica">
			      			<option value="" selected hidden>Selecione</option>
			      			<option value="Sim" @if (old('dependencia_quimica') == 'Sim') selected="selected" @endif>Sim</option>
							<option value="Nao" @if (old('dependencia_quimica') == 'Nao') selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Violência:
			      		</span>
			      		<select class="form-control" id="violencia" name="violencia">
			      			<option value="" selected hidden>Selecione</option>
			      			<option value="Sim" @if (old('violencia') == 'Sim') selected="selected" @endif>Sim</option>
							<option value="Nao" @if (old('violencia') == 'Nao') selected="selected" @endif>Não</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<label for="outros_fatores_riscos">Outros:</label>
					<textarea class="form-control" id="outros_fatores_riscos" name="outros_fatores_riscos" rows="3"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>
<hr>
<button type="button" name="prev" class="prev acao btn-previous btn btn-primary">Anterior</button>
<button type="button" name="next4" class="next acao btn-next btn btn-primary">Próximo</button>