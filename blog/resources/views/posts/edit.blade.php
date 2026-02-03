@extends('plantilla')

@section('titulo', 'Editar post')

@section('contenido')
    <h1>Editar post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control"
                   value="{{ old('titulo', $post->titulo) }}">
            @if ($errors->has('titulo'))
                <div class="text-danger">{{ $errors->first('titulo') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="contenido">Contenido</label>
            <textarea name="contenido" id="contenido" class="form-control" rows="6">{{ old('contenido', $post->contenido) }}</textarea>
            @if ($errors->has('contenido'))
                <div class="text-danger">{{ $errors->first('contenido') }}</div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('posts.show', $post) }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
