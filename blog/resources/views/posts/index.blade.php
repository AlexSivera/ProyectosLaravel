@extends('plantilla')

@section('titulo', 'Listado de posts')

@section('contenido')
    <h1>Listado de posts</h1>

    @if(session()->has('mensaje'))
        <div class="alert alert-info">
            {{ session('mensaje') }}
        </div>
    @endif

    <a href="{{ route('posts.nuevoPrueba') }}" class="btn btn-primary mb-3">
        Crear post de prueba
    </a>

    <ul class="list-group">
        @forelse ($posts as $post)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    {{ $post->titulo }}
                    <br>
                    <small class="text-muted">
                        Creado: {{ $post->created_at->format('d/m/Y H:i') }}
                    </small>
                </div>
                <div>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-info btn-sm">
                        Ver
                    </a>
                    <a href="{{ route('posts.editarPrueba', $post) }}" class="btn btn-warning btn-sm">
                        Editar prueba
                    </a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline;">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Eliminar este post?')">
                            Borrar
                        </button>
                    </form>
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
