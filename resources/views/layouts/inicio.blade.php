<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/ini.css'])
</head>

<body>
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>DANZANDO</h3>
        </div>
        <br>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('estudiantes.index') }}">
                    ESTUDIANTES
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profesores.index') }}">
                    PROFESORES
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('estilos.index') }}">
                    ESTILOS
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clases.index') }}">
                    CLASES
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('asistencias.index') }}">
                    ASISTENCIAS
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('inscripciones.index') }}">
                    INSCRIPCIONES
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pagos.index') }}">
                    PAGOS
                </a>
            </li>

        </ul>
    </nav>

    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto"> 
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> <!-- Añadimos dropdown-menu-end -->
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
    </div>
    <div id="prueba">
        <h1 class="mt-5">Bienvenido {{ Auth::user()->name }}</h1>
        <br>
        @yield('content')

    </div>
   
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>