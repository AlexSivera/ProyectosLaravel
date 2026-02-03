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
            @if(auth()->check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.create') }}">Crear nuevo</a>
                </li>
            @endif
        </ul>
        <ul class="navbar-nav ml-auto">
            @if(auth()->check())
                <li class="nav-item">
                    <span class="navbar-text mr-3">{{ auth()->user()->login }}</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Cerrar sesión</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
