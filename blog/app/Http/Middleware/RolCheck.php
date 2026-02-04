<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RolCheck
{
    public function handle(Request $request, Closure $next, $rol): Response
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        if ($user->rol !== $rol) {
            return redirect()->route('posts.index')->with('error', 'No tienes permiso para acceder a esta sección');
        }

        return $next($request);
    }
}
