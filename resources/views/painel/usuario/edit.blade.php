@extends('layouts.template')

@push('links')
	<link href="{{ asset('css/painel/formulario.css') }}" rel="stylesheet">
	<script src="{{ asset('js/button-enter.js') }}"></script>
@endpush

@section('content')
<div class="body-main">
	<header>
		<h2><i class="glyphicon glyphicon glyphicon-edit"></i> Editar Usuário</h2>
	</header>
	<div class="container body-main__main">
		<div class="body-main__form">
			<form method="post" action="{{ route('usuario.update', $user->id) }}" role="form" autocomplete="off" id="formulario">
				{!! method_field('PUT') !!}
				{{ csrf_field() }}
				<div class="row form-group hrs-bottom">
					<div class="col-sm-12">
						<div class="col-sm-12">
							<h1>Formulário do Usuário</h1>
						</div>
					</div>
				</div>
				<br>
				<div class="col-sm-12">
					@if(Session::has('errors_password'))
						<div class="alert alert-danger">
							<p>A senha não corresponde!</p>
						</div>
					@endif
				</div>
				<div class="col-sm-12">
					@if(Session::has('errors_password_all'))
						<div class="alert alert-danger">
							<p>Todos os campos de senhas devem ser preenchidos!</p>
						</div>
					@endif
				</div>
				<div class="col-sm-12">
					@if(Session::has('message'))
						<script type="text/javascript">
							swal("Usuário editado com sucesso!", "", "success");
						</script>
					@endif
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
							<input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" maxlength="100" value="{{$user->name}}">

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
							<input type="text" class="form-control input-cpf" id="cpf" name="cpf" placeholder="Digite seu CPF" value="{{$user->cpf}}">

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
							<input type="text" class="form-control input-data" id="data_nasc" name="data_nasc" placeholder="00/00/0000" value="{{$user->data_nasc}}">

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
							<input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" maxlength="100" value="{{$user->email}}">

							@if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="col-sm-3 form-group">
							<label for="profile">Perfil: <span class="notification-red">*</span></label>
							<select class="form-control" id="profile" name="profile">
								@if($user->profile == "Enfermeiro")
									<option value="Enfermeiro" selected>Enfermeiro</option>
									<option value="Técnico">Técnico de Enfermagem</option>
								@elseif($user->profile == "Admin")
									<option value="Admin" selected>Admin</option>
								@else
									<option value="Enfermeiro">Enfermeiro</option>
									<option value="Técnico" selected>Técnico de Enfermagem</option>
								@endif
							</select>
						</div>
						<div class="col-sm-3 form-group">
							<label for="sexo">Sexo: <span class="notification-red">*</span></label>
							<select class="form-control" id="sexo" name="sexo">
								@if($user->sexo == "Masculino")
									<option value="Masculino" selected>Masculino</option>
									<option value="Feminino">Feminino</option>
								@else
									<option value="Masculino">Masculino</option>
									<option value="Feminino" selected>Feminino</option>
								@endif
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-4 form-group">
							<label for="password_old">Senha Antiga: </label>
							<input type="password" class="form-control" id="password_old" name="password_old" maxlength="10" >

							@if(Session::has('password_old_message'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_old_message') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="col-sm-4 form-group">
							<label for="password_new">Nova Senha: </label>
							<input type="password" class="form-control" id="password_new" name="password_new" maxlength="10">
						</div>
						<div class="col-sm-4 form-group">
							<label for="password_new_confirm">Confirmar Senha Nova:</label>
							<input type="password" class="form-control" id="password_new_confirm" name="password_new_confirm" maxlength="10">
						</div>
					</div>
				</div>
				<br>
				<br>
				<br>
				<div class="row form-group hrs-top">
					<div class="col-sm-12">
						<div class="col-sm-12">
							<br>
							<button class="btn btn-lg btn-primary btn-edit" type="submit" onclick="document.form.submit();">Editar</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection