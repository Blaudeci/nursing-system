@extends('layouts.template')
@push('links')
    <link href="{{ asset('css/auth/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/auth/recover-password.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container" id="recover-password">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Recuperar Senha</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-sm-12">
                                <label for="email">E-mail:</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <a href="/" class="btn btn-primary" style="color: white; text-decoration: none;">Voltar</a>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary" style="float: right;">
                                    Enviar
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
