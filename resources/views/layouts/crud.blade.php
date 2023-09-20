<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANZANDO</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: rgba(1, 50, 75, 0.5);">
    <div class="container mt-5">
        @yield('content') 
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>