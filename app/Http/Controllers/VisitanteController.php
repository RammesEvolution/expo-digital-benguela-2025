<?php

namespace App\Http\Controllers;

class VisitanteController extends Controller
{
    public function indice()
    {
        return view('papeis.visitante', [
            'titulo' => 'Visitante',
            'subtitulo' => 'Informações de Acesso e Localização',
        ]);
    }
}
