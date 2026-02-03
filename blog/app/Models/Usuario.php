<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $fillable = ['login', 'password'];

    // Relación uno a muchos con Post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
