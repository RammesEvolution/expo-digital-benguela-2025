<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Exibe a página inicial do painel de administração.
     * Requer os middlewares 'auth' e 'admin' para acesso.
     *
     * @return \Illuminate\View\View
     */
    public function indice()
    {
        return view('admin.dashboard');
    }
}