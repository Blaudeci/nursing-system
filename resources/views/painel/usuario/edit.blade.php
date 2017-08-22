@extends('layouts.template')

@push('links')
    <link href="{{ asset('css/painel/usuario/create.css') }}" rel="stylesheet">
@endpush

@section('content')
<header>
	<h2><i class="glyphicon glyphicon glyphicon-edit"></i> Editar Usuário</h2>
</header>
<div id="main" class="container">
	
	<div class="main--form">
		<form method="post" action="{{ route('usuario.update', $user->id) }}" role="form" autocomplete="off">
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
				@if(Session::has('message'))
					<div class="alert alert-success">
 						{{ Session::get('message') }}
					</div>
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
					<div class="col-sm-4 form-group">
						<label for="name_edit">Nome: <span class="notification-red">*</span></label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" value="{{$user->name}}" />
					</div>
					<div class="col-sm-3 form-group">
						<label for="cpf">CPF: <span class="notification-red">*</span></label>
						<input type="text" class="form-control input-cpf" id="cpf" name="cpf" placeholder="Digite seu CPF" value="{{$user->cpf}}"/>
					</div>
					<div class="col-sm-2 form-group">
						<label for="data_nasc">Data Nasc.: <span class="notification-red">*</span></label>
						<input type="text" class="form-control input-data" id="data_nasc" name="data_nasc" placeholder="00/00/0000" value="{{$user->data_nasc}}">
					</div>
					<div class="col-sm-3 form-group">
						<label for="status_user">Status:</label>
						<select class="form-control" id="status_user" name="status_user">
							@if($user->status_user == "Ativo")
								<option value="Ativo" selected>Ativo</option>
								<option value="Inativo">Inativo</option>
							@else
								<option value="Ativo">Ativo</option>
								<option value="Inativo" selected>Inativo</option>
							@endif
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-6 form-group">
						<label for="email">E-mail: <span class="notification-red">*</span></label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" value="{{$user->email}}">
					</div>
					<div class="col-sm-3 form-group">
						<label for="profile">Perfil: <span class="notification-red">*</span></label>
							<select class="form-control" id="profile" name="profile">
								@if($user->profile == "Enfermeiro")
									<option value="admin" selected>Enfermeiro</option>
									<option value="user">Técnico de Enfermagem</option>
								@else
									<option value="admin">Enfermeiro</option>
									<option value="user" selected>Técnico de Enfermagem</option>
								@endif
							</select>
					</div>
					<div class="col-sm-3 form-group">
						<label for="sexo">Sexo: <span class="notification-red">*</span></label>
						<select class="form-control" id="sexo" name="sexo">

							@if($user->sexo == "masculino")
								<option value="masculino" selected>Masculino</option>
								<option value="feminino">Feminino</option>
							@else
								<option value="masculino">Masculino</option>
								<option value="feminino" selected>Feminino</option>
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
						<button class="btn btn-lg btn-primary btn-editar__user" type="submit">Editar</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection