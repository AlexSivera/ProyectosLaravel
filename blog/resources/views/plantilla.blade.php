<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        @include('partials.nav')

        <main class="py-4">
            @yield('contenido')
        </main>

        <footer class="mt-4 text-right">
            <small>Fecha actual: {{ fechaActual('d/m/Y') }}</small>
        </footer>
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
