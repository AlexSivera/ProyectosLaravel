@extends('plantilla')

@section('titulo', 'Listado de posts')

@section('contenido')
    <h1>Listado de posts</h1>

    @if(session()->has('mensaje'))
        <div class="alert alert-info">
            {{ session('mensaje') }}
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <ul class="list-group">
        @forelse ($posts as $post)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    {{ $post->titulo }} ({{ optional($post->usuario)->login }})
                    <br>
                    <small class="text-muted">
                        Creado: {{ $post->created_at->format('d/m/Y H:i') }}
                    </small>
                </div>
                <div>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-info btn-sm">
                        Ver
                    </a>
                    @if(auth()->check() && auth()->user()->id === $post->usuario_id)
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">
                            Editar
                        </a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Eliminar este post?')">
                                Borrar
                            </button>
                        </form>
                    @endif
                </div>
            </li>
        @empty
            <li class="list-group-item">No hay posts para mostrar.</li>
        @endforelse
    </ul>

    <div class="mt-3">
        {{ $posts->links() }}
    </div>
@endsection
