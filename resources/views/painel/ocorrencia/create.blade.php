@extends('layouts.template')

@push('links')
	<link href="{{ asset('css/painel/formulario.css') }}" rel="stylesheet">
	<link href="{{ asset('css/painel/ocorrencia.css') }}" rel="stylesheet">
    <script src="{{ asset('js/ocorrencia-functions.js') }}"></script>
@endpush

@section('content')
<div class="body-main">
	<header>
		<h2><i class="glyphicon glyphicon-edit"></i> Cadastrar Ocorrência</h2>
	</header>
	<div class="container body-main__main" style="margin-top: 70px;">
		<div class="body-main__form">
			<form method="post" action="{{ route('ocorrencia.store') }}" role="form" autocomplete="off" id="form-main__ocorrencia" name="formulario">
				{{ csrf_field() }}
				@if(Auth::user()->profile == "Admin" || Auth::user()->profile == "Enfermeiro")
					<ul id="progress">
						<li class="active"></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
					<br>
					<div class="error-fieldset">
					</div>
					<fieldset>
						@include('painel.ocorrencia.fieldset-create.avaliacao')
					</fieldset>
					
					<fieldset>
						@include('painel.ocorrencia.fieldset-create.motivo-consulta')
					</fieldset>
					
					<fieldset>
						@include('painel.ocorrencia.fieldset-create.exame-fisico')
					</fieldset>
					
					<fieldset>
						@include('painel.ocorrencia.fieldset-create.evolucao-enfermagem')
					</fieldset>
				@else
					<ul id="progress" class="progress-two">
						<li class="active"></li>
						<li></li>
					</ul>
					<br>
					<div class="error-fieldset">
					</div>
					<fieldset>
						@include('painel.ocorrencia.fieldset-create.avaliacao')
					</fieldset>
					<fieldset>
						@include('painel.ocorrencia.fieldset-create.anotacao-enfermagem')
					</fieldset>
				@endif
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("form").bind("keypress", function (e) {
		if (e.keyCode == 13) {
			return false;
		}
	});

	$('button[type=submit]').keypress(function (e) {
    	if (e.keyCode == 13) {
    		$("#form-main__patient").submit();
    	}
   	});
</script>
@endsection