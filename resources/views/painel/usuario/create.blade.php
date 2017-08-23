@extends('layouts.template')

@push('links')
    <link href="{{ asset('css/painel/usuario/create.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="body_main">
	<header>
		<h2><i class="glyphicon glyphicon glyphicon-edit"></i> Cadastrar Usuário</h2>
	</header>
	<div id="main" class="container body_main--main">
		<div class="main--form">
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
				<div class="col-sm-12">
					@if(Session::has('message'))
						<script type="text/javascript">
							swal("Usuário cadastrado com sucesso!", "", "success");
						</script>
					@endif
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
						<div class="col-sm-6 form-group">
							<label for="name">Nome: <span class="notification-red">*</span></label>
							<input type="text" class="form-control" id="name" name="name" maxlength="100" placeholder="Digite seu nome" value="{{old('name')}}" />
						</div>
						<div class="col-sm-3 form-group">
							<label for="cpf">CPF: <span class="notification-red">*</span></label>
							<input type="text" class="form-control input-cpf" id="cpf" name="cpf" placeholder="Digite seu CPF" value="{{old('cpf')}}"/>
						</div>
						<div class="col-sm-3 form-group">
							<label for="data_nasc">Data Nasc.: <span class="notification-red">*</span></label>
							<input type="text" class="form-control input-data" id="data_nasc" name="data_nasc" placeholder="00/00/0000" value="{{old('data_nasc')}}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-6 form-group">
							<label for="email">E-mail: <span class="notification-red">*</span></label>
							<input type="email" class="form-control" id="email" name="email" maxlength="100" placeholder="Digite seu e-mail" value="{{old('email')}}">
						</div>
						<div class="col-sm-3 form-group">
							<label for="profile">Perfil: <span class="notification-red">*</span></label>
								<select class="form-control" id="profile" name="profile">
									<option value="" selected disabled>Selecione: </option>
									<option value="admin">Enfermeiro</option>
									<option value="user">Técnico de Enfermagem</option>
								</select>
						</div>
						<div class="col-sm-3 form-group">
							<label for="sexo">Sexo: <span class="notification-red">*</span></label>
							<select class="form-control" id="sexo" name="sexo">
								<option selected disabled>Selecione</option>
								<option value="Masculino">Masculino</option>
								<option value="Feminino">Feminino</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-6 form-group">
							<label for="password">Senha: <span class="notification-red">*</span></label>
							<input type="password" class="form-control" id="password" name="password" maxlength="10">
						</div>
						<div class="col-sm-6 form-group">
							<label for="password-confirm">Confirmar Senha: <span class="notification-red">*</span></label>
							<input type="password" class="form-control" id="password-confirm" name="password_confirmation" maxlength="10">
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
							<button class="btn btn-lg btn-primary btn-registrar__user" onclick="validator()" type="submit">Cadastrar</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection