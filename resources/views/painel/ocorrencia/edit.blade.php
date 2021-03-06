@extends('layouts.template')

@push('links')
	<link href="{{ asset('css/painel/formulario.css') }}" rel="stylesheet">
	<link href="{{ asset('css/painel/ocorrencia/create.css') }}" rel="stylesheet">
    <script src="{{ asset('js/ocorrencia-functions.js') }}"></script>
    <script src="{{ asset('js/button-enter.js')}}"></script>
@endpush

@section('content')
<div class="body-main">
	<header>
		<h2><i class="glyphicon glyphicon-edit"></i> Editar Ocorrência</h2>
	</header>
	<div class="container body-main__main" style="margin-top: 70px;">
		<div class="body-main__form">
			<form method="post" action="{{ route('ocorrencia.update', $ocorrencias->id) }}" role="form" autocomplete="off" id="form-main__ocorrencia" name="formulario">
				{!! method_field('PUT') !!}
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
						@include('painel.ocorrencia.fieldset-edit.avaliacao')
					</fieldset>
					<fieldset>
						@include('painel.ocorrencia.fieldset-edit.motivo-consulta')
					</fieldset>
					<fieldset>
						@include('painel.ocorrencia.fieldset-edit.exame-fisico')
					</fieldset>
					<fieldset>
						@include('painel.ocorrencia.fieldset-edit.evolucao-enfermagem')
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
						@include('painel.ocorrencia.fieldset-edit.avaliacao')
					</fieldset>
					<fieldset>
						@include('painel.ocorrencia.fieldset-edit.anotacao-enfermagem')
					</fieldset>
				@endif
			</form>
		</div>
	</div>
</div>
@endsection