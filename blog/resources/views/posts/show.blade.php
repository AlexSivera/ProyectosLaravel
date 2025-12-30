@extends('plantilla')

@section('titulo', 'Ficha del post')

@section('contenido')
    <h1>Ficha del post {{ $id }}</h1>
    <p>Aquí se mostrarán los detalles del post con id {{ $id }}.</p>
    <a href="{{ route('posts.index') }}">Volver al listado</a>
@endsection
