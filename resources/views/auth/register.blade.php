@extends('layouts.template')

@push('links')
    <link href="{{ asset('css/painel/usuario/create.css') }}" rel="stylesheet">
@endpush

@section('content')
<header>
    <h2><i class="glyphicon glyphicon glyphicon-edit"></i> Cadastrar Usuário</h2>
</header>
<div id="main" class="container">
    
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
                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" value="{{old('name')}}" />
                    </div>
                    <div class="col-sm-3 form-group">
                        <label for="cpf">CPF: <span class="notification-red">*</span></label>
                        <input type="text" class="form-control input-cpf" id="cpf" name="cpf" placeholder="Digite seu CPF" value="{{old('cpf')}}"/>
                    </div>
                    <div class="col-sm-3 form-group">
                        <label for="data-nasc">Data Nasc.: <span class="notification-red">*</span></label>
                        <input type="text" class="form-control input-data" id="data-nasc" name="data-nasc" placeholder="00/00/0000" value="{{old('data-nasc')}}">
                    </div>
                    <input type="hidden" class="form-control" id="status_user" name="status_user" value="Ativo">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-6 form-group">
                        <label for="email">E-mail: <span class="notification-red">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" value="{{old('email')}}">
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
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-6 form-group">
                        <label for="senha">Senha: <span class="notification-red">*</span></label>
                        <input type="password" class="form-control" id="password" name="password" maxlength="10" >
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="password-confirm">Senha novamente: <span class="notification-red">*</span></label>
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
                        <button class="btn btn-lg btn-primary btn-registrar__user" type="submit">Cadastrar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection


























<!--
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
-->