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
        <h2>CONOCENOS</h2>
        <p>Somos una escuela de danza dedicada a la enseñanza de diferentes estilos de baile. Nuestro objetivo es promover la pasión por la danza y proporcionar un espacio creativo para nuestros estudiantes.</p>
    </section>

    <section class="container">
        <h2>NUESTRO ESTILOS DE BAILE</h2>
        <ul>
            <li>DANZA DE SALON</li>
            <li>DANZA MODERNA</li>
            <li>JAZZ</li>
        </ul>
    </section>

    <section class="gallery"  >
        <div class="image"><img src="https://imgs.search.brave.com/tEJSs6VJdTqR0hqixL2eIqS9-qVDi3FtwZa6xaoZHpM/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvNTM1/ODUyODk1L2VzL2Zv/dG8vYmFpbGFyaW5h/LW11amVyLWRlLXNp/bHVldGEtYmFpbGFu/ZG8uanBnP3M9NjEy/eDYxMiZ3PTAmaz0y/MCZjPUdKUDNyZ1Zt/RVpWVGpqTGZZNHd6/OTZPdWRtbVRYX29H/MTBvNFFPWXpiLU09" alt="Imagen de baile 3"></div>
        <div class="image" ><img src="https://imgs.search.brave.com/RoHcJxUaqKsLHfrNCUrM1aomOO-9wSfukgKfJ3bJ_fg/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/Zm90by1ncmF0aXMv/Y2xhc2UtYmFpbGUt/bXVqZXJlc18xMzg1/LTMxODQuanBn" alt="Imagen de baile 1"></div>
        <div class="image"><img src="https://imgs.search.brave.com/M5dDBdssEaMOItDWdeyFsEKW2KmJtLvJpaKjPwcye34/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTU3/NTg2Mjg0L2VzL2Zv/dG8vcGFyZWphLWRl/LWJhaWxlLWRlLXNh/bCVDMyVCM24uanBn/P3M9NjEyeDYxMiZ3/PTAmaz0yMCZjPVkw/MXNGVl9NSVJrLUNY/Tko0d2xka3VoTVp2/SmRjN3RXZjB1dk9O/aHUzOFU9" alt="Imagen de baile 2"></div>
    </section>

    <footer>
        <p>&copy; 2023 DANZANDO</p>
    </footer>
</body>
</html>