@extends('layouts.template')

@push('links')
	<link href="{{ asset('css/painel/formulario.css') }}" rel="stylesheet">
	<script src="{{ asset('js/button-enter.js')}}"></script>
@endpush

@section('content')
<div class="body-main">
	<header>
		<h2><i class="glyphicon glyphicon glyphicon-edit"></i> Cadastrar Usuário</h2>
	</header>
	<div class="container body-main__main">
		<div class="body-main__form">
			<form method="post" action="{{ route('usuario.store') }}" role="form" autocomplete="off">
				{{ csrf_field() }}
				<div class="row form-group hrs-bottom">
					<div class="col-sm-12">
						<div class="col-sm-12">
							<h1>Formulário do Usuário</h1>
						</div>
					</div>
				</div>
				<br>
				<div class="row form-group">
					<div class="col-sm-12">
						<div class="col-sm-12">
							<p class="notification-red">Os campos que possuem (*) são obrigatórios.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-6 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="name" class="{{ $errors->has('name') ? ' help-block' : '' }}">
								Nome: 
								<span class="notification-red">*</span>
							</label>
							<input type="text" class="form-control" id="name" name="name" maxlength="100" placeholder="Digite seu nome" value="{{old('name')}}" />

							@if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="col-sm-3 form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">
							<label for="cpf" class="{{ $errors->has('cpf') ? ' help-block' : '' }}">
								CPF: 
								<span class="notification-red">*</span>
							</label>
							<input type="text" class="form-control input-cpf" id="cpf" name="cpf" placeholder="Digite seu CPF" value="{{old('cpf')}}">

							@if ($errors->has('cpf'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cpf') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="col-sm-3 form-group{{ $errors->has('data_nasc') ? ' has-error' : '' }}">
							<label for="data_nasc" class="{{ $errors->has('data_nasc') ? ' help-block' : '' }}">
								Data Nasc.: 
								<span class="notification-red">*</span>
							</label>
							<input type="text" class="form-control input-data" id="data_nasc" name="data_nasc" placeholder="00/00/0000" value="{{old('data_nasc')}}">

							@if ($errors->has('data_nasc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('data_nasc') }}</strong>
                                </span>
                            @endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-6 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="{{ $errors->has('email') ? ' help-block' : '' }}">
								E-mail: 
								<span class="notification-red">*</span>
							</label>
							<input type="email" class="form-control" id="email" name="email" maxlength="100" placeholder="Digite seu e-mail" value="{{old('email')}}">

							@if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="col-sm-3 form-group{{ $errors->has('profile') ? ' has-error' : '' }}">
							<label for="profile" class="{{ $errors->has('profile') ? ' help-block' : '' }}">
								Perfil: 
								<span class="notification-red">*</span>
							</label>
							<select class="form-control" id="profile" name="profile" value="{{old('profile')}}">
								<option value="" selected hidden>Selecione</option>
								<option value="Enfermeiro" @if (old('profile') == 'Enfermeiro') selected="selected" @endif>Enfermeiro</option>
                				<option value="Técnico" @if (old('profile') == 'Técnico') selected="selected" @endif>Técnico de Enfermagem</option>
							</select>

							@if ($errors->has('profile'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('profile') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="col-sm-3 form-group{{ $errors->has('sexo') ? ' has-error' : '' }}">
							<label for="sexo" class="{{ $errors->has('sexo') ? ' help-block' : '' }}">Sexo: 
								<span class="notification-red">*</span>
							</label>
							<select class="form-control" id="sexo" name="sexo">
								<option value="" selected hidden>Selecione</option>
								<option value="Masculino" @if (old('sexo') == 'Masculino') selected="selected" @endif>Masculino</option>
                				<option value="Feminino" @if (old('sexo') == 'Feminino') selected="selected" @endif>Feminino</option>
							</select>

							@if ($errors->has('sexo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sexo') }}</strong>
                                </span>
                            @endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-6 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password" class="{{ $errors->has('password') ? ' help-block' : '' }}">
								Senha: 
								<span class="notification-red">*</span>
							</label>
							<input type="password" class="form-control" id="password" name="password" maxlength="10">

							@if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="col-sm-6 form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
							<label for="password_confirmation" class="{{ $errors->has('password_confirmation') ? ' help-block' : '' }}">
								Confirmar Senha: 
								<span class="notification-red">*</span>
							</label>
							<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" maxlength="10">

							@if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
						</div>
					</div>
				</div>
				<br>
				<br>
				<div class="row form-group hrs-top">
					<div class="col-sm-12">
						<div class="col-sm-12">
							<br>
							<button class="btn btn-lg btn-primary btn-register" type="submit" onclick="document.form.submit();">Cadastrar</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection