<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('inicio') }}">Mi Blog</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">Listado de posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.create') }}">Crear nuevo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.nuevoPrueba') }}">Crear post prueba</a>
            </li>
        </ul>
    </div>
</nav>
