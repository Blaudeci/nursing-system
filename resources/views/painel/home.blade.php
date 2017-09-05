@extends('layouts.template')

@push('links')
    <link href="{{ asset('css/painel/home.css') }}" rel="stylesheet">
@endpush

@section('content')
	<div class="body-main">
		<header>
			<h2><i class="glyphicon glyphicon glyphicon-home"></i> Home</h2>
		</header>
		<div id="home-img__logotipo" >
    		<h1>Sejá Bem Vindo!</h1>
			<img src="img/logotipo.jpg">
		</div>
	</div>
@endsection
