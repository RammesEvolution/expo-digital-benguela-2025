<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Galeria;
use App\Models\Parceiro;

class PaginaInicialController extends Controller
{
    public function indice()
    {
        $eventosDestaque = Evento::where('estado', 'confirmado')
            ->orderBy('data_inicio')
            ->limit(3)
            ->get();

        $galerias = Galeria::with('evento')
            ->orderBy('ordem')
            ->limit(12)
            ->get();

        $parceiros = Parceiro::where('ativo', true)
            ->orderBy('ordem')
            ->limit(6)
            ->get();

        return view('pagina-inicial', compact('eventosDestaque', 'galerias', 'parceiros'));
    }
}
