<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <style>
        /* Estilos para la barra lateral */
        #sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }

        #sidebar .nav-link {
            color: #ffffff;
        }

        #sidebar .nav-link:hover {
            background-color: #1d2124;
        }

        #content {
            margin-left: 250px;
            padding: 15px;
        }
        h3 {
            color: #ffffff;
        }
    </style>
</head>
<body>
    <!-- Barra lateral -->
    <nav id="sidebar">
        <div class="sidebar-header" >
            <h3 >DANZANDO</h3>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('estudiantes.index')}}">
                    ESTUDIANTES
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('profesores.index')}}">
                    PROFESORES
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('estilos.index')}}">
                    ESTILOS
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('clases.index')}}">
                    CLASES
                </a>
            </li>
        </ul>
    </nav>
    
    <!-- Contenido principal -->
    <div id="content">
        <!-- Navbar de Bootstrap 4 -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('users.edit', $user->id) }}">Editar Perfil</a>
                            <a class="dropdown-item" href="{{ route('users.create') }}">agregar nuevo usuario</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('salir') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        
        <h1 class="mt-5">¡Bienvenido!</h1>
        @yield('content')
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>