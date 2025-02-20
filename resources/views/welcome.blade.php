<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANZANDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
header {
    background-image: url('img/da.jpeg');
    background-size: contain; /* Asegura que toda la imagen sea visible */
    background-position: center;
    background-repeat: no-repeat;
    background-color: #03678b; /* Color de fondo si la imagen no carga */
    height: 100vh; /* Ocupa toda la altura de la ventana */
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    object-fit: contain; /* Hace que la imagen se ajuste sin recortarse */
}

@media (max-width: 768px) {
    header {
        height: auto; /* Ajuste automático para pantallas pequeñas */
        min-height: 60vh; /* Se asegura de que la imagen tenga un tamaño adecuado en móviles */
    }
}




 

        header h1 {
            margin: 0;
            font-size: 3rem;
            font-weight: bold;
        }

        section {
            padding: 4rem 0;
        }

        .gallery img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        footer {
            background-color: #035474;
            color: white;
            text-align: center;
            padding: 1rem;
        }
    </style>
</head>
<body>
    <!-- Navbar con autenticación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">DANZANDO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/users') }}" class="nav-link">Inicio</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Iniciar Sesion</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link">Regístrate</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <header>
       
    </header>

    <section class="container text-center">
        <h2>CONÓCENOS</h2>
        <p class="mt-3">
            Somos una escuela de danza dedicada a la enseñanza de diferentes estilos de baile. Nuestro objetivo es 
            promover la pasión por la danza y proporcionar un espacio creativo para nuestros estudiantes.
        </p>
    </section>

    <section class="container text-center">
        <h2>NUESTROS ESTILOS DE BAILE</h2>
        <ul class="list-group list-group-flush mt-3">
            <li class="list-group-item">Danza de Salón</li>
            <li class="list-group-item">Danza Moderna</li>
            <li class="list-group-item">Jazz</li>
        </ul>
    </section>

    <section class="container">
        <h2 class="text-center mb-4">GALERÍA</h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="https://imgs.search.brave.com/tEJSs6VJdTqR0hqixL2eIqS9-qVDi3FtwZa6xaoZHpM/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvNTM1/ODUyODk1L2VzL2Zv/dG8vYmFpbGFyaW5h/LW11amVyLWRlLXNp/bHVldGEtYmFpbGFu/ZG8uanBnP3M9NjEy/eDYxMiZ3PTAmaz0y/MCZjPUdKUDNyZ1Zt/RVpWVGpqTGZZNHd6/OTZPdWRtbVRYX29H/MTBvNFFPWXpiLU09" alt="Baile 1" class="gallery img-fluid">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="https://imgs.search.brave.com/RoHcJxUaqKsLHfrNCUrM1aomOO-9wSfukgKfJ3bJ_fg/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/Zm90by1ncmF0aXMv/Y2xhc2UtYmFpbGUt/bXVqZXJlc18xMzg1/LTMxODQuanBn" alt="Baile 2" class="gallery img-fluid">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="https://imgs.search.brave.com/M5dDBdssEaMOItDWdeyFsEKW2KmJtLvJpaKjPwcye34/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTU3/NTg2Mjg0L2VzL2Zv/dG8vcGFyZWphLWRl/LWJhaWxlLWRlLXNh/bCVDMyVCM24uanBn/P3M9NjEyeDYxMiZ3/PTAmaz0yMCZjPVkw/MXNGVl9NSVJrLUNY/Tko0d2xka3VoTVp2/SmRjN3RXZjB1dk9O/aHUzOFU9" alt="Baile 3" class="gallery img-fluid">
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 DANZANDO</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
