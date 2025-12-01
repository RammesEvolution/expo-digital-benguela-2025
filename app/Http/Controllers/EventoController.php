<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function indice()
    {
        $eventos = Evento::orderBy('data_inicio', 'desc')->paginate(12);
        return view('eventos.indice', compact('eventos'));
    }

    public function criar()
    {
        return view('eventos.criar');
    }

    public function armazenar(Request $request)
    {
        $validado = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after:data_inicio',
            'localizacao' => 'required|string|max:255',
            'capacidade' => 'required|integer|min:1',
            'categoria' => 'required|string|max:100',
            'estado' => 'in:planejado,confirmado,concluído,cancelado',
        ]);

        Evento::create($validado);

        return redirect()->route('eventos.indice')->with('sucesso', 'Evento criado com sucesso!');
    }

    public function mostrar($id)
    {
        $evento = Evento::with('galerias')->findOrFail($id);
        return view('eventos.mostrar', compact('evento'));
    }

    public function editar($id)
    {
        $evento = Evento::findOrFail($id);
        return view('eventos.editar', compact('evento'));
    }

    public function atualizar(Request $request, $id)
    {
        $evento = Evento::findOrFail($id);

        $validado = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after:data_inicio',
            'localizacao' => 'required|string|max:255',
            'capacidade' => 'required|integer|min:1',
            'categoria' => 'required|string|max:100',
            'estado' => 'in:planejado,confirmado,concluído,cancelado',
        ]);

        $evento->update($validado);

        return redirect()->route('eventos.indice')->with('sucesso', 'Evento atualizado com sucesso!');
    }

    public function eliminar($id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();

        return redirect()->route('eventos.indice')->with('sucesso', 'Evento eliminado com sucesso!');
    }
}
