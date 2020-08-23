<!DOCTYPE html>
<html>
<head>
    <title>@yield('titulo', '88Pasteis')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <link rel="shortcut icon" href="{{ asset('educ_Icon.ico') }}"> --}}
    <style>
        html, body {
            background-color: #949296;
        }
        @yield('style')
    </style>
</head>

<body @yield('load')>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        
        <div class="navbar-header">
            <a href="/" class="navbar-brand">88Pasteis</a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuPrincipal">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="menuPrincipal">


            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item"> 
                    <a class="nav-link" href="#">Fazer um pedido</a> 
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toogle" href="#" data-toggle="dropdown">Pasteis</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" >Cadastrar</a>
                        <a class="dropdown-item" >Listar</a>
                    </div>
                </li>
            </ul>


            {{-- <ul class="navbar-nav navbar-right mr-2">
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toogle" href="#" data-toggle="dropdown">{{Auth::user()->nome}}</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            <a class="dropdown-item" href="{{route('user.show',Auth::user()->id )}}">Meu perfil</a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                            </form>
                        </div>
                    </li>                       
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toogle" href="#" data-toggle="dropdown">Acessar</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                            <a class="dropdown-item" href="{{ route('register') }}">Registrar</a>
                        </div>
                   </li> 
                @endif
            </ul> --}}
        </div>
    </nav>
    
    @yield('breadcrumb')

    @if( Session::has('mensagem') )
    <div class="container alert alert-secondary alert-dismissible fade show mt-0" role="alert">
        <h6 class="align-middle">{{ Session::get('mensagem') }}</h6>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif

    @yield('conteudo')  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">$('.alert').alert()</script>
    @yield('script')
</body>

</html>