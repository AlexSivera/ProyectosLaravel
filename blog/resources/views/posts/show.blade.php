@extends('plantilla')

@section('titulo', 'Ficha del post')

@section('contenido')
    <h1>{{ $post->titulo }}</h1>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Contenido:</h5>
            <p class="card-text">{{ $post->contenido }}</p>
        </div>
        <div class="card-footer text-muted">
            Creado: {{ $post->created_at->format('d/m/Y H:i') }}
            @if($post->created_at != $post->updated_at)
                <br>Última modificación: {{ $post->updated_at->format('d/m/Y H:i') }}
            @endif
        </div>
    </div>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">
        Volver al listado
    </a>
    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning mt-3">Editar</a>

    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-3"
                onclick="return confirm('¿Eliminar este post?')">Borrar</button>
    </form>
@endsection
