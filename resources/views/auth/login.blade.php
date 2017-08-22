@extends('layouts.template')

@push('links')
    <link href="{{ asset('css/auth/login.css') }}" rel="stylesheet">
@endpush

@section('content')

    @if (Auth::check())
        <script> 
            window.location="/home";
        </script> 
    @else
        <div class="main-login container clearfix">
            <div class="row">
                <div class="col-sm-12">
                    <div class="account-wall">
                        <img class="main-login__logo" src="img/logotipo.jpg" alt="Sistema Web para Enfermaria Pública">
                        <hr class="hrs"/>
                        <form class="form-signin" method="POST" action="{{ route('login') }}" autocomplete="off">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-sm-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Senha" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <button type="submit" class="btn btn-primary main-login__button--submit">
                                        Entrar
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <a class="btn btn-link main-login__recover" href="{{ route('password.request') }}">
                                        Esqueceu sua senha?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection