<div class="row form-group hrs-bottom">
	<div class="col-sm-12">
		<div class="col-sm-12">
			<h1>História Mórbida Pregressa</h1>
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
<div class="row morbida">
	<div class="col-sm-12">
		<!-- Doenças Pré-Existentes -->
		<div class="col-sm-4 form-group">
				<p >Doenças Pré-existentes</p>
			<div class="col-sm-12 morbida_form">
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Acidente Vascular:
			      		</span>
			      		<select name="acidente-vascular" id="acidente-vascular" class="form-control">
							<option value="Não" @if (old('acidente-vascular') == 'Não') selected="selected" @endif>Não</option>
                			<option value="Sim" @if (old('acidente-vascular') == 'Sim') selected="selected" @endif>Sim</option>
						</select>
			     	</div>
				</div>

				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Câncer:
			      		</span>
			      		<select name="cancer" id="cancer" class="form-control">
							<option value="Não" @if (old('cancer') == 'Não') selected="selected" @endif>Não</option>
                			<option value="Sim" @if (old('cancer') == 'Sim') selected="selected" @endif>Sim</option>
						</select>
			     	</div>
				</div>

				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Hipertensão:
			      		</span>
			      		<select name="hipertensao" id="hipertensao" class="form-control">
							<option value="Não" @if (old('hipertensao') == 'Não') selected="selected" @endif>Não</option>
                			<option value="Sim" @if (old('hipertensao') == 'Sim') selected="selected" @endif>Sim</option>
						</select>
			     	</div>
				</div>

				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Cardiopatia:
			      		</span>
			      		<select name="cardiopatia" id="cardiopatia" class="form-control">
			      			<option value="" selected disabled>Selecione </option>
							<option value="Cardiopatia_congenita" @if (old('cardiopatia') == 'Cardiopatia_congenita') selected="selected" @endif>Cardiopatia congênita</option>
							<option value="doencas_miocardio" @if (old('cardiopatia') == 'doencas_miocardio') selected="selected" @endif>Doenças no miocárdio</option>
                			<option value="infeccão_coracao" @if (old('cardiopatia') == 'infeccão_coracao') selected="selected" @endif>Infecção no coração</option>
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
			      		<select name="diabetes" id="diabetes" class="form-control">
			      			<option value="" selected disabled>Selecione </option>
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
			      		<select name="doenca-renal" id="doenca-renal" class="form-control">
			      			<option value="" selected disabled>Selecione </option>
			      			<option value="calculos-renais" @if (old('doenca-renal') == 'calculos-renais') selected="selected" @endif>Cálculos renais</option>
			      			<option value="infeccao-renal" @if (old('doenca-renal') == 'infeccao-renal') selected="selected" @endif>Infecção renal ou Pielonefrite</option>
			      			<option value="cistos-renais" @if (old('doenca-renal') == 'cistos-renais') selected="selected" @endif>Cistos renais</option>
			      			<option value="perda-funcao-renal" @if (old('doenca-renal') == 'perda-funcao-renal') selected="selected" @endif>Perda da função renal</option>
						</select>
			     	</div>
				</div>


				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Pneumopatia:
			      		</span>
			      		<select name="pneumopatia" id="pneumopatia" class="form-control">
			      			<option value="" selected disabled>Selecione </option>
							<option value="pneumopatia-intersticial" @if (old('pneumopatia') == 'pneumopatia-intersticial') selected="selected" @endif>Pneumopatia Intersticial</option>

							<option value="pneumopatia-aguda" @if (old('pneumopatia') == 'pneumopatia-aguda') selected="selected" @endif>Pneumopatia Aguda</option>

							<option value="pneumopatia-cronica" @if (old('pneumopatia') == 'pneumopatia-cronica') selected="selected" @endif>Pneumopatia Crônica</option>

							<option value="pneumopatia-ocupacional" @if (old('pneumopatia') == 'pneumopatia-ocupacional') selected="selected" @endif>Pneumopatia Ocupacional</option>

							<option value="pneumopatia-parasitaria" @if (old('pneumopatia') == 'pneumopatia-parasitaria') selected="selected" @endif>Pneumopatia Parasitária</option>
                			
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<label for="outros-pre-existentes">Outros:</label>
					<textarea class="form-control" id="outros-pre-existentes" name="outros-pre-existentes" rows="3"></textarea>
				</div>
			</div>
		</div>

		<!-- Transtornos Alérgicos -->
		<div class="col-sm-4 form-group">
				<p>Transtornos Alérgicos</p>
			<div class="col-sm-12 morbida_form">
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Drogas:
			      		</span>
			      		<select name="drogas" id="drogas" class="form-control">
							<option value="Não" @if (old('drogas') == 'Não') selected="selected" @endif>Não</option>
                			<option value="Sim" @if (old('drogas') == 'Sim') selected="selected" @endif>Sim</option>
						</select>
			     	</div>
				</div>

				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Alimentos:
			      		</span>
			      		<select name="alimentos" id="alimentos" class="form-control">
							<option value="Não" @if (old('alimentos') == 'Não') selected="selected" @endif>Não</option>
                			<option value="Sim" @if (old('alimentos') == 'Sim') selected="selected" @endif>Sim</option>
						</select>
			     	</div>
				</div>

				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Cosméticos:
			      		</span>
			      		<select name="cosmeticos" id="cosmeticos" class="form-control">
							<option value="Não" @if (old('cosmeticos') == 'Não') selected="selected" @endif>Não</option>
                			<option value="Sim" @if (old('cosmeticos') == 'Sim') selected="selected" @endif>Sim</option>
						</select>
			     	</div>
				</div>

				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Esparadrapo:
			      		</span>
			      		<select name="esparadrapo" id="esparadrapo" class="form-control">
							<option value="Não" @if (old('esparadrapo') == 'Não') selected="selected" @endif>Não</option>
                			<option value="Sim" @if (old('esparadrapo') == 'Sim') selected="selected" @endif>Sim</option>
						</select>
			     	</div>
				</div>

				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Lã:
			      		</span>
			      		<select name="la" id="la" class="form-control">
							<option value="Não" @if (old('la') == 'Não') selected="selected" @endif>Não</option>
                			<option value="Sim" @if (old('la') == 'Sim') selected="selected" @endif>Sim</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<label for="outros-alergicos">Outros:</label>
					<textarea class="form-control" id="outros-alergicos" name="outros-alergicos" rows="3"></textarea>
				</div>
			</div>
		</div>

		<!-- Fatores de Risco -->
		<div class="col-sm-4 form-group">
				<p>Fatores de Risco</p>
			<div class="col-sm-12 morbida_form">
				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Tabagismo:
			      		</span>
			      		<select name="tabagismo" id="tabagismo" class="form-control">
							<option value="Não" @if (old('tabagismo') == 'Não') selected="selected" @endif>Não</option>
                			<option value="Sim" @if (old('tabagismo') == 'Sim') selected="selected" @endif>Sim</option>
						</select>
			     	</div>
				</div>

				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Etilismo:
			      		</span>
			      		<select name="etilismo" id="etilismo" class="form-control">
							<option value="Não" @if (old('etilismo') == 'Não') selected="selected" @endif>Não</option>
                			<option value="Sim" @if (old('etilismo') == 'Sim') selected="selected" @endif>Sim</option>
						</select>
			     	</div>
				</div>

				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Quimioterapia:
			      		</span>
			      		<select name="quimioterapia" id="quimioterapia" class="form-control">
							<option value="Não" @if (old('quimioterapia') == 'Não') selected="selected" @endif>Não</option>
                			<option value="Sim" @if (old('quimioterapia') == 'Sim') selected="selected" @endif>Sim</option>
						</select>
			     	</div>
				</div>

				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Radioterapia:
			      		</span>
			      		<select name="radioterapia" id="radioterapia" class="form-control">
							<option value="Não" @if (old('radioterapia') == 'Não') selected="selected" @endif>Não</option>
                			<option value="Sim" @if (old('radioterapia') == 'Sim') selected="selected" @endif>Sim</option>
						</select>
			     	</div>
				</div>

				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Dependência Química:
			      		</span>
			      		<select name="dependencia-quimica" id="dependencia-quimica" class="form-control">
							<option value="Não" @if (old('dependencia-quimica') == 'Não') selected="selected" @endif>Não</option>
                			<option value="Sim" @if (old('dependencia-quimica') == 'Sim') selected="selected" @endif>Sim</option>
						</select>
			     	</div>
				</div>

				<div class="col-sm-12 form-group">
					<div class="input-group">
						<span class="input-group-addon">
				    		Violência:
			      		</span>
			      		<select name="violencia" id="violencia" class="form-control">
							<option value="Não" @if (old('violencia') == 'Não') selected="selected" @endif>Não</option>
                			<option value="Sim" @if (old('violencia') == 'Sim') selected="selected" @endif>Sim</option>
						</select>
			     	</div>
				</div>
				<div class="col-sm-12 form-group">
					<label for="outros-fatores-risco">Outros:</label>
					<textarea class="form-control" id="outros-fatores-risco" name="outros-fatores-risco" rows="3"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>
<hr>
<button type="button" name="prev" class="prev acao btn-anterior btn btn-primary">Anterior</button>
<button type="button" name="next4" class="next acao btn-proximo btn btn-primary">Próximo</button>