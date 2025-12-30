@extends('plantilla')

@section('titulo', 'Listado de posts')

@section('contenido')
    <h1>Listado de posts</h1>
    <ul class="list-group">
        @forelse ($posts as $post)
            <li class="list-group-item">
                <a href="{{ route('posts.show', $post['id']) }}">
                    {{ $post['titulo'] }}
                </a>
            </li>
        @empty
            <li class="list-group-item">No hay posts que mostrar</li>
        @endforelse
    </ul>
@endsection
