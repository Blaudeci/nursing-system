<nav class="navbar navbar-top navbar-fixed-top">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="fa fa-bars fa-2x"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/home') }}">
                <div class="brand">
                    <span style="color:red">SW</span><span style="color:#4876FF">EP</span>
                    <img src="{{ asset('img/logo-side.png')}}">
                </div>
            </a>
        </div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="navbar-main">
            <ul class="nav navbar-nav perfil">
                <li class="dropdown">
                    <a href="#">
                        {{ Auth::user()->name }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- ************************************************************************************** -->

<div class="nav-side-menu">
    <div class="menu-list">
        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <a href="/home">
                    <i class="glyphicon glyphicon glyphicon-home"></i> Home
                </a>
            </li>
            @if(Auth::user()->profile == "Admin")
                <li  data-toggle="collapse" data-target="#usuario" class="collapsed">
                    <a href="#"><i class="glyphicon glyphicon-user"></i> Usuário<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="usuario">
                    <li>
                        <a href="{{ url('/usuario/create') }}">
                            Cadastrar 
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/usuario') }}">
                            Consultar 
                        </a>
                    </li>
                </ul>
            @endif
            <li data-toggle="collapse" data-target="#paciente" class="collapsed">
                <a href="#">
                    <i class="glyphicon glyphicon-user"></i> Paciente <span class="arrow"></span>
                </a>
            </li>  
            <ul class="sub-menu collapse" id="paciente">
                <li>
                    <a href="{{ url('/paciente/create') }}">
                        Cadastrar 
                    </a>
                </li>
                <li>
                    <a href="{{ url('/paciente') }}">
                        Consultar
                    </a>
                </li>
            </ul>
            <li data-toggle="collapse" data-target="#ocorrencia" class="collapsed">
                <a href="#">
                    <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Ocorrência <span class="arrow"></span>
                </a>
            </li>
            <ul class="sub-menu collapse" id="ocorrencia">
                <li>
                    <a href="{{ url('/ocorrencia/create') }}">
                        Cadastrar 
                    </a>
                </li>
                <li>
                    <a href="{{ url('/ocorrencia') }}">
                        Consultar 
                    </a>
                </li>
            </ul>
            <li data-toggle="collapse" data-target="#relatorio" class="collapsed">
                <a href="#">
                    <i class="glyphicon glyphicon-align-left" aria-hidden="true"></i> Relatório <span class="arrow"></span>
                </a>
            </li>
            <ul class="sub-menu collapse" id="relatorio">
                <li>
                    <a href="#">
                        Ocorrência 
                    </a>
                </li>
            </ul>
            <li class="dropdown">
                <a href="#">
                    <i class="glyphicon glyphicon-picture"></i> Gráfico
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-user"></i> Perfil
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    <i class="glyphicon glyphicon-off"></i> Sair
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
</div>