<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danzando</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-dark text-light flex-shrink-0 p-3" style="width: 250px; height: 100vh;">
            <div class="sidebar-header text-center mb-4">
                <h3>DANZANDO</h3>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a class="nav-link text-light" href="{{ route('estudiantes.index') }}">
                        ESTUDIANTES
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-light" href="{{ route('profesores.index') }}">
                        PROFESORES
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-light" href="{{ route('estilos.index') }}">
                        ESTILOS
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-light" href="{{ route('clases.index') }}">
                        CLASES
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-light" href="{{ route('asistencias.index') }}">
                        ASISTENCIAS
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-light" href="{{ route('inscripciones.index') }}">
                        INSCRIPCIONES
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-light" href="{{ route('pagos.index') }}">
                        PAGOS
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main content -->
        <div class="flex-grow-1">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('users.edit', $user->id) }}">Editar Perfil</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('users.create') }}">Agregar nuevo usuario</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Main Content Area -->
            <div class="container mt-4">
                <h1 class="mb-4">Bienvenido, {{ Auth::user()->name }}</h1>
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
