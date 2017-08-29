@extends('layouts.template')

@push('links')
    <script src="{{ asset('js/functions.js') }}"></script>
    <link href="{{ asset('css/painel/paciente/create.css') }}" rel="stylesheet">
    <link href="{{ asset('css/painel/usuario/create.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="body_main">
	<header>
		<h2><i class="glyphicon glyphicon glyphicon-edit"></i> Cadastrar Paciente</h2>
	</header>
	<div id="main" class="container body_main--main" style="margin-top: 70px;">
		<div class="main--form">
			<form method="post" action="" role="form" autocomplete="off" id="formulario" enctype="multipart/form-data" name="formulario">
				{{ csrf_field() }}
					<ul id="progress">
						<li class="ativo">Dados Pessoais</li>
						<li>Contato</li>
						<li>Fisiológicos</li>
						<li>Mórbida</li>
						<li>Hábitos</li>
					</ul>
				<div class="error-fieldset">
				</div>
				<fieldset>
					@include('painel.paciente.fieldset-create.dados-pessoais')
				</fieldset>

				<fieldset>
					@include('painel.paciente.fieldset-create.contato-responsavel')
				</fieldset>

				<fieldset>
					@include('painel.paciente.fieldset-create.evento-fisiologico')
				</fieldset>

				<fieldset>
					@include('painel.paciente.fieldset-create.historia-morbida')
				</fieldset>

				<fieldset>
					@include('painel.paciente.fieldset-create.habitos')					
				</fieldset>
			</form>
		</div>
	</div>
</div>
@endsection
