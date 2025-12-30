<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.nav')
    <main class="container mt-4">
        @yield('contenido')
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
