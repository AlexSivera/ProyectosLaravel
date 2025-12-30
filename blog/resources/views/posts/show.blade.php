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
@endsection
