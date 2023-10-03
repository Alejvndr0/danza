<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
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
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>DANZANDO</h3>
        </div>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto"> <!-- Utilizamos ms-auto para alinear a la derecha -->
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

        <h1 class="mt-5">¡Bienvenido!</h1>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>