@extends('plantilla')

@section('titulo', 'Ficha del post')

@section('contenido')
    <h1>Ficha del post {{ $id }}</h1>
    <p>Aquí se mostrarían los detalles del post con ID: {{ $id }}</p>
    <a href="{{ route('posts.edit', $id) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Volver al listado</a>
@endsection
