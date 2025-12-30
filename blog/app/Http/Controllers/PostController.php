<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Por ahora, usamos un array de ejemplo para los posts
        $posts = [
            ['id' => 1, 'titulo' => 'Primer post', 'contenido' => 'Contenido del primer post'],
            ['id' => 2, 'titulo' => 'Segundo post', 'contenido' => 'Contenido del segundo post'],
            ['id' => 3, 'titulo' => 'Tercer post', 'contenido' => 'Contenido del tercer post'],
        ];

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return redirect()->route('inicio')
        ->with('mensaje', 'Redirigido desde creación de post');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Por ahora, pasamos el id a la vista
        return view('posts.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    return redirect()->route('inicio')
        ->with('mensaje', 'Redirigido desde edición de post ' . $id);
}
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
