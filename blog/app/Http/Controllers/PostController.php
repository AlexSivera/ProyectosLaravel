<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Usuario;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // Método index: Listado paginado y ordenado
    public function index()
    {
        $posts = Post::with('usuario')->orderBy('titulo', 'asc')->paginate(5);
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
        $post = Post::findOrFail($id);

        // Validar que el usuario es el propietario del post o es admin
        $user = Auth::user();
        if (!($user->rol === 'admin' || $post->usuario_id === $user->id)) {
            return redirect()->route('posts.index')
                ->with('error', 'No tienes permiso para eliminar este post');
        }

        $post->delete();

        return redirect()->route('posts.index')
            ->with('mensaje', 'Post eliminado correctamente');
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('posts.create');
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        // Validar que el usuario es el propietario del post o es admin
        $user = Auth::user();
        if (!($user->rol === 'admin' || $post->usuario_id === $user->id)) {
            return redirect()->route('posts.index')
                ->with('error', 'No tienes permiso para editar este post');
        }

        return view('posts.edit', compact('post'));
    }

    // Métodos store y update
    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->titulo = $request->get('titulo');
        $post->contenido = $request->get('contenido');
        $post->usuario_id = Auth::id();
        $post->save();

        return redirect()->route('posts.index')
            ->with('mensaje', 'Post creado correctamente');
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);

        // Validar que el usuario es el propietario del post o es admin
        $user = Auth::user();
        if (!($user->rol === 'admin' || $post->usuario_id === $user->id)) {
            return redirect()->route('posts.index')
                ->with('error', 'No tienes permiso para editar este post');
        }

        $post->titulo = $request->get('titulo');
        $post->contenido = $request->get('contenido');
        $post->save();

        return redirect()->route('posts.show', $post)
            ->with('mensaje', 'Post actualizado correctamente');
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
