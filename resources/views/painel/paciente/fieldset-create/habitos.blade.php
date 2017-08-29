<div class="row form-group hrs-bottom">
	<div class="col-sm-12">
		<div class="col-sm-12">
			<h1>Hábitos</h1>
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
<div class="row">
	<div class="col-sm-12 form-group">
		<div class="col-sm-6">
			<div class="col-sm-6">
				<label for="sono-repouso">Sono e Repouso:</label>
				<select class="form-control" id="sono-repouso" name="sono-repouso">
					<option selected disabled>Selecione</option>
					<option value="Alterado" @if (old('sono-repouso') == 'Alterado') selected="selected" @endif>Alterado</option>
					<option value="Satisfatorio" @if (old('sono-repouso') == 'Satisfatorio') selected="selected" @endif>Satisfatório</option>
				</select>
			</div>
			<div class="col-sm-6">
				<label for="horas-sono">Horas de Sono:</label>
				<div class="input-group">
					<input type="text" class="form-control input-time" placeholder="00:00" aria-describedby="basic-addon2" name="horas-sono">
					<span class="input-group-addon" id="basic-addon2">horas/dia</span>
				</div>
			</div>
		</div>
		
		
	</div>
</div>