<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SWEP</title>

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/menu/navbar-top.css') }}" rel="stylesheet">
        <link href="{{ asset('css/menu/navbar-side.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chicle|Days+One|Emblema+One|Goblin+One|Montserrat+Subrayada|Oxygen|Rye|Shojumaru|Shrikhand" rel="stylesheet">
        
        <!-- Scripts -->
        <script src="{{ asset('js/jquery-3.1.1.js.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery.maskedinput.js') }}"></script>
        <script src="{{ asset('js/mask.js') }}"></script>
        <script src="{{ asset('dist/sweetalert.min.js')}}"></script>
        <script src="{{ asset('js/js.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('dist/sweetalert.css')}}">

        @stack('links')

        <!-- Icons -->
        <link rel="icon" href="img/logotipo.jpg">     
    </head>
    <body>
        <!-- Verifica se o usuario esta logado -->
        @if(Auth::check())
            @include('includes.navbar-top')
            @yield('content')   
        @else
            @yield('content')
        @endif
    </body>
</html>