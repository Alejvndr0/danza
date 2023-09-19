<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANZANDO</title>
    @vite(['resources/css/wel.css', 'resources/js/app.js'])
</head>
<body>
    <div class="relative min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/users') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">INICIO</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                @endauth
            </div>
        @endif
    </div>
    <header>
        <div class="overlay"></div>
        <h1>DANZANDO</h1>
    </header>

    <section class="container">
        <h2>Conócenos</h2>
        <p>Somos una escuela de danza dedicada a la enseñanza de diferentes estilos de baile. Nuestro objetivo es promover la pasión por la danza y proporcionar un espacio creativo para nuestros estudiantes.</p>
    </section>

    <section class="container">
        <h2>Nuestros Estilos de Baile</h2>
        <ul>
            <li>DANZA DE SALON</li>
            <li>Danza Hip-Hop</li>
            <li>Danza del Vientre</li>
        </ul>
    </section>

    <section class="gallery">
        <h2>Galería de Imágenes</h2>
        <div class="image"><img src="dance-image1.jpg" alt="Imagen de baile 1"></div>
        <div class="image"><img src="dance-image2.jpg" alt="Imagen de baile 2"></div>
        <div class="image"><img src="dance-image3.jpg" alt="Imagen de baile 3"></div>
    </section>

    <footer>
        <p>&copy; 2023 DANZANDO</p>
    </footer>
</body>
</html>