@extends('plantilla')

@section('titulo', 'Inicio')

@section('contenido')
    <h1>Blog de Alex</h1>
    <p>Bienvenidos al blog</p>

    <!-- Esto es para mostrar mensajes cuando rediriges -->
    @if(session()->has('mensaje'))
        <div class="alert alert-info">
            {{ session('mensaje') }}
        </div>
    @endif
@endsection
