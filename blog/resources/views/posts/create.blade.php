@extends('plantilla')

@section('titulo', 'Crear post')

@section('contenido')
    <h1>Crear post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control"
                   value="{{ old('titulo') }}">
            @if ($errors->has('titulo'))
                <div class="text-danger">{{ $errors->first('titulo') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="contenido">Contenido</label>
            <textarea name="contenido" id="contenido" class="form-control" rows="6">{{ old('contenido') }}</textarea>
            @if ($errors->has('contenido'))
                <div class="text-danger">{{ $errors->first('contenido') }}</div>
            @endif
        </div>

        <input type="hidden" name="usuario" value="{{ $usuario?->id ?? 1 }}">

        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
