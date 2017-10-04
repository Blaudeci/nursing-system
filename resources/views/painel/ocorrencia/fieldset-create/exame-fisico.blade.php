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
		<div class="col-sm-3 form-group">
			<label for="peso">Peso: <span class="notification-red">*</span></label>
			<div class="input-group">
				<input type="number" class="form-control" name="peso" id="peso" aria-describedby="basic-addon2" onblur="calcularIMC()">
				<span class="input-group-addon" id="basic-addon2">kg</span>
			</div>
		</div>
		<div class="col-sm-3 form-group">
			<label for="altura">Altura: <span class="notification-red">*</span></label>
			<div class="input-group">
				<input type="text" class="form-control input-altura" name="altura" id="altura" aria-describedby="basic-addon2" onblur="calcularIMC()">
				<span class="input-group-addon" id="basic-addon2">cm</span>
			</div>
		</div>
		<div class="col-sm-3 form-group">
			<label for="valor_imc">Valor IMC:</label>
			<input type="hidden" class="form-control" name="valor_imc" id="valor_imc">
			<input type="text" class="form-control" name="valor_imc2" id="valor_imc2" disabled="disabled">
		</div>
		<div class="col-sm-3 form-group">
			<label for="imc">IMC:</label>
			<input type="hidden" class="form-control" name="imc" id="imc">
			<input type="text" class="form-control" name="imc2" id="imc2" disabled="disabled">
		</div>
	</div>
	<div class="col-sm-12">
		<div class="col-sm-3 form-group">
			<label for="perimetro_abdominal">Perimetro Abdominal:</label>
			<div class="input-group">
				<input type="text" class="form-control" name="perimetro_abdominal" id="perimetro_abdominal" aria-describedby="basic-addon2">
				<span class="input-group-addon" id="basic-addon2">cm</span>
			</div>
		</div>
		<div class="col-sm-3 form-group">
			<label for="pressao_arterial">Pressão Arterial:</label>
			<div class="input-group">
				<input type="text" class="form-control" name="pressao_arterial" id="pressao_arterial" aria-describedby="basic-addon2">
				<span class="input-group-addon" id="basic-addon2">mmhg</span>
			</div>
		</div>
		<div class="col-sm-3 form-group">
			<label for="temperatura">Temperatura:</label>
			<div class="input-group">
				<input type="text" class="form-control" name="temperatura" id="temperatura" aria-describedby="basic-addon2">
				<span class="input-group-addon" id="basic-addon2">ºC</span>
			</div>
		</div>
		<div class="col-sm-3 form-group">
			<label for="frequencia_cardiaca">Frequência Cardiaca:</label>
			<div class="input-group">
				<input type="text" class="form-control" name="frequencia_cardiaca" id="frequencia_cardiaca" aria-describedby="basic-addon2">
				<span class="input-group-addon" id="basic-addon2">bpm</span>
			</div>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="col-sm-3 form-group">
			<label for="frequencia_respiratoria">Frequência Respiratória:</label>
			<div class="input-group">
				<input type="text" class="form-control" name="frequencia_respiratoria" id="frequencia_respiratoria" aria-describedby="basic-addon2">
				<span class="input-group-addon" id="basic-addon2">mpm</span>
			</div>
		</div>
		<div class="col-sm-3 form-group">
			<label for="glicemia">Glicemia:</label>
			<div class="input-group">
				<input type="text" class="form-control" name="glicemia" id="glicemia" aria-describedby="basic-addon2">
				<span class="input-group-addon" id="basic-addon2">mg/dl</span>
			</div>
		</div>
		<div class="col-sm-6 form-group">
			<label for="estagio_tanner">Avaliação dos Estágios de Tanner:</label>
			<select name="estagio_tanner" id="estagio_tanner" class="form-control">
				<option value="" @if (old('estagio_tanner') == "") selected="selected" @endif>Selecione</option>
				<option value="Estagio I" @if (old('estagio_tanner') == "Estagio I") selected="selected" @endif>Estagio I</option>
				<option value="Estagio II" @if (old('estagio_tanner') == "Estagio II") selected="selected" @endif>Estagio II</option>
				<option value="Estagio III" @if (old('estagio_tanner') == "Estagio III") selected="selected" @endif>Estagio III</option>
				<option value="Estagio IV" @if (old('estagio_tanner') == "Estagio IV") selected="selected" @endif>Estagio IV</option>
				<option value="Estagio V" @if (old('estagio_tanner') == "Estagio V") selected="selected" @endif>Estagio V</option>
			</select>
		</div>
	</div>
	<div class="col-sm-12 form-group">
		<div class="col-sm-12 form-group">
			<label for="diagnostico_enfermagem">Diagnósticos de Enfermagem:</label>
			<textarea class="form-control" rows="7" name="diagnostico_enfermagem" id="diagnostico_enfermagem"></textarea>
		</div>
	</div>
</div>
<hr>
<button type="button" name="prev" class="prev acao btn-previous btn btn-primary">Anterior</button>
<button type="button" name="next3" class="next acao btn-next btn btn-primary">Próximo</button>

<script type="text/javascript">
	function calcularIMC() {
		var peso 	= $("#peso").val();
		var alt 	= $("#altura").val();

		if(peso != "" && alt != ""){

			var altura = alt.replace(',','.');

			var valorIMC = peso / (altura * altura);

			var imc = IMC(valorIMC);

			document.getElementById('valor_imc').value = valorIMC.toFixed(2);
			document.getElementById('valor_imc2').value = valorIMC.toFixed(2);
			document.getElementById('imc').value = imc;
			document.getElementById('imc2').value = imc;
		}
	}

	function IMC(valor){
		if(valor < 16.00){
			return "Baixo peso Grau III";
		}
		if(valor >= 16.00 && valor <= 16.90){
			return "Baixo peso Grau II";
		}
		if(valor >= 17.00 && valor <= 18.49){
			return "Baixo peso Grau I";
		}
		if(valor >= 18.50 && valor <= 24.99){
			return "Peso ideal";
		}
		if(valor >= 25.00 && valor <= 29.99){
			return "Sobrepeso";
		}
		if(valor >= 30.00 && valor <= 34.99){
			return "Obesidade Grau I";
		}
		if(valor >= 35.00 && valor <= 39.99){
			return "Obesidade Grau II";
		}
		if(valor >= 40.00){
			return "Obesidade Grau III";
		}
	}
</script>