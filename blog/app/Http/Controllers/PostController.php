<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Método index: Listado paginado y ordenado
    public function index()
    {
        $posts = Post::orderBy('titulo', 'asc')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    // Método show: Ficha individual
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    // Método destroy: Eliminar post
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();

        return redirect()->route('posts.index')
            ->with('mensaje', 'Post eliminado correctamente');
    }

    // Métodos create y edit (temporales)
    public function create()
    {
        return redirect()->route('inicio')
            ->with('mensaje', 'Redirigido desde creación de post');
    }

    public function edit($id)
    {
        return redirect()->route('inicio')
            ->with('mensaje', 'Redirigido desde edición de post ' . $id);
    }

    // Métodos store y update (vacíos por ahora)
    public function store(Request $request)
    {
        // Vacío por ahora
    }

    public function update(Request $request, $id)
    {
        // Vacío por ahora
    }

    // MÉTODOS TEMPORALES DE PRUEBA

    // Crear post de prueba
    public function nuevoPrueba()
    {
        $numero = rand(1, 1000);

        $post = new Post();
        $post->titulo = "Título " . $numero;
        $post->contenido = "Contenido " . $numero;
        $post->save();

        return redirect()->route('posts.index')
            ->with('mensaje', 'Post de prueba creado: Título ' . $numero);
    }

    // Editar post de prueba
    public function editarPrueba($id)
    {
        $post = Post::findOrFail($id);
        $numero = rand(1, 1000);

        $post->titulo = "Título editado " . $numero;
        $post->contenido = "Contenido editado " . $numero;
        $post->save();

        return redirect()->route('posts.index')
            ->with('mensaje', 'Post de prueba editado: Título ' . $numero);
    }
}
