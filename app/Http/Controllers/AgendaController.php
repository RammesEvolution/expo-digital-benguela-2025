<?php

namespace App\Http\Controllers;

use App\Models\Evento;

class AgendaController extends Controller
{
    public function index()
    {
        $eventos = Evento::where('estado', 'confirmado')
            ->orderBy('data_inicio')
            ->paginate(12);

        return view('agenda.indice', compact('eventos'));
    }

    public function mostrar($id)
    {
        $evento = Evento::with('galerias')->findOrFail($id);

        return view('agenda.mostrar', compact('evento'));
    }
}
