<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Usuario extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $table = 'usuarios';
    protected $fillable = ['login', 'password'];

    // Relación uno a muchos con Post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
