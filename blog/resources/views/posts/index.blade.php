@extends('plantilla')

@section('titulo', 'Listado de posts')

@section('contenido')
    <h1>Listado de posts</h1>
    <ul>
        @forelse ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post['id']) }}">
                    {{ $post['titulo'] }}
                </a>
            </li>
        @empty
            <li>No hay posts para mostrar</li>
        @endforelse
    </ul>
@endsection
