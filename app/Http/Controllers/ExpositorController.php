<?php

namespace App\Http\Controllers;

class ExpositorController extends Controller
{
    public function indice()
    {
        return view('papeis.expositor', [
            'titulo' => 'Expositor',
            'subtitulo' => 'Oportunidades de Negócio e Visibilidade',
        ]);
    }
}
