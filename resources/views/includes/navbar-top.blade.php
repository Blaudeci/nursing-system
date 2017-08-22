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
                    <img src="img/logo-side.png">
                </div>
            </a>
        </div>
        <div class="collapse navbar-collapse navbar-main" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="display-none--li_menu">
                    <a href="#">
                        <i class="glyphicon glyphicon-user"></i> Perfil
                    </a>
                </li>
                <li>
                    <a href="/home">
                        <i class="glyphicon glyphicon glyphicon-home"></i> Home
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="glyphicon glyphicon-user"></i> Usuário <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ url('/usuario/create') }}">
                                <i class="glyphicon glyphicon-edit"></i> Cadastrar 
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/usuario') }}">
                                <i class="glyphicon glyphicon-search"></i>  Consultar 
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="glyphicon glyphicon-user"></i> Paciente <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="">
                                <i class="glyphicon glyphicon-edit"></i> Cadastrar 
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="glyphicon glyphicon-search"></i>  Consultar
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="glyphicon glyphicon-list-alt"></i> Ocorrência 
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="">
                                <i class="glyphicon glyphicon-edit"></i> Cadastrar 
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="glyphicon glyphicon-search"></i>  Consultar 
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="glyphicon glyphicon-book"></i> Curso
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="">
                                <i class="glyphicon glyphicon-edit"></i> Cadastrar 
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="glyphicon glyphicon-search"></i>  Consultar
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="glyphicon glyphicon-align-left"></i> Relatório
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="">
                                <i class="glyphicon glyphicon-search"></i> Ocorrência 
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="/home">
                        <i class="glyphicon glyphicon-picture"></i> Gráfico
                    </a>
                </li>
                <li class="display-none--li_menu">
                    <a href="#">
                        <i class="glyphicon glyphicon-off"></i>Sair
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav perfil">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="#">Perfil</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                Sair
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>