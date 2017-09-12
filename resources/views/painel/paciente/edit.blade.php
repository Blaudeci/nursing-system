@extends('layouts.template')

@push('links')
	<link href="{{ asset('css/painel/formulario.css') }}" rel="stylesheet">
    <script src="{{ asset('js/paciente-functions.js') }}"></script>
@endpush

@section('content')
<div class="body-main body-main__patient">
	<header>
		<h2><i class="glyphicon glyphicon glyphicon-edit"></i> Editar Paciente</h2>
	</header>
	<div class="container body-main__main" style="margin-top: 70px;">
		<div class="body-main__form">
			<form method="post" action="{{ route('paciente.update', $pacient->id) }}" role="form" autocomplete="off" id="form-main__patient" name="formulario">
				{!! method_field('PUT') !!}
				{{ csrf_field() }}
					<ul id="progress">
						<li class="active">Dados Pessoais</li>
						<li>Contato</li>
						<li>Fisiológicos</li>
						<li>Mórbida</li>
						<li>Hábitos</li>
					</ul>
				<div class="error-fieldset">
				</div>
				<fieldset>
					@include('painel.paciente.fieldset-edit.dados-pessoais')
				</fieldset>
				<fieldset>
					@include('painel.paciente.fieldset-edit.contato-responsavel')
				</fieldset>
				<fieldset>
					@include('painel.paciente.fieldset-edit.evento-fisiologico')
				</fieldset>
			</form>
		</div>
	</div>
</div>
@endsection