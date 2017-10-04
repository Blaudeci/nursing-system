@extends('layouts.template')

@push('links')
	<link href="{{ asset('css/painel/formulario.css') }}" rel="stylesheet">
    <script src="{{ asset('js/paciente-functions.js') }}"></script>
@endpush

@section('content')
<div class="body-main">
	<header>
		<h2><i class="glyphicon glyphicon-edit"></i> Cadastrar Paciente</h2>
	</header>
	<div class="container body-main__main" style="margin-top: 70px;">
		<div class="body-main__form">
			<form method="post" action="{{ route('paciente.store') }}" role="form" autocomplete="off" id="form-main__patient" name="formulario">
				{{ csrf_field() }}
					<ul id="progress">
						<li class="active"><span>Dados Pessoais</span></li>
						<li><span>Contato</span></li>
						<li><span>Fisiológicos</span></li>
						<li><span>Mórbida</span></li>
						<li><span>Hábitos</span></li>
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