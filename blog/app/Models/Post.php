<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'contenido', 'usuario_id'];

    // Relación inversa: un post pertenece a un usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
