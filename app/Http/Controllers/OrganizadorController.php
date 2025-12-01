<?php

namespace App\Http\Controllers;

class OrganizadorController extends Controller
{
    public function indice()
    {
        return view('papeis.organizador', [
            'titulo' => 'Organizador',
            'subtitulo' => 'Infraestrutura Completa para Seus Eventos',
        ]);
    }
}
