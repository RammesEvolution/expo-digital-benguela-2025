<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EventoController extends Controller
{
    public function indice(Request $request)
    {
        $estadoFiltro = $request->input('estado_filtro');
        $query = Evento::orderBy('data_inicio', 'desc');
        $today = Carbon::now();

        if ($estadoFiltro) {
            
            if ($estadoFiltro === 'realizado') {
                // Lógica de Evento Realizado (Confirmado E já terminou)
                $query->where('estado', 'confirmado')
                      ->where('data_fim', '<', $today);

            } elseif ($estadoFiltro === 'proximo') {
                // Lógica de Evento Próximo (Futuro ou A Decorrer)
                $query->where('data_fim', '>=', $today)
                      ->where('estado', 'confirmado'); // Apenas futuros confirmados

            } elseif (in_array($estadoFiltro, ['planejado', 'confirmado', 'cancelado'])) {
                // Filtros diretos da base de dados (Planejado, Confirmado, Cancelado)
                $query->where('estado', $estadoFiltro);
            }
        }
        
        $eventos = $query->paginate(12);
        
        // Passa o filtro atual para a view para manter a seleção no dropdown
        return view('eventos.indice', compact('eventos', 'estadoFiltro'));
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
        $today = Carbon::now(); // <--- NOVO: Obtém a data/hora atual

        // Passa o evento E a data atual para a view
        return view('eventos.mostrar', compact('evento', 'today')); 
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
