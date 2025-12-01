<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            return redirect()->route('pagina-inicial')->with('erro', 'Acesso negado. Apenas administradores podem acessar.');
        }

        return $next($request);
    }
}
