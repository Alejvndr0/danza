<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANZANDO</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        h2{
            color: #f5f7f8b6;
        }
    </style>
</head>
<body style="background-color:  #33393fb6;">
    <div class="container mt-5">
        <div class="row">
            @yield('content') 
        </div>
        
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>