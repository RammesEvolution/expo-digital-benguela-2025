<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use App\Models\Evento;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function indice()
    {
        $galerias = Galeria::with('evento');
        
        if (request('evento_id')) {
            $galerias = $galerias->where('evento_id', request('evento_id'));
        }
        
        $galerias = $galerias->paginate(18);
        
        // Passar eventos para filtro
        $eventos = Evento::where('estado', 'confirmado')->get();

        return view('galeria.indice', compact('galerias', 'eventos'));
    }

    public function criar()
    {
        $eventos = Evento::where('estado', 'confirmado')->get();
        return view('galeria.criar', compact('eventos'));
    }

    public function armazenar(Request $request)
    {
        $validado = $request->validate([
            'evento_id' => 'required|exists:eventos,id',
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'caminho_imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ordem' => 'nullable|integer|min:0',
        ]);

        if ($request->hasFile('caminho_imagem')) {
            $caminho = $request->file('caminho_imagem')->store('galerias', 'public');
            $validado['caminho_imagem'] = $caminho;
        }

        Galeria::create($validado);

        return redirect()->route('galeria.indice')->with('sucesso', 'Imagem adicionada com sucesso!');
    }

    public function editar($id)
    {
        $galeria = Galeria::findOrFail($id);
        $eventos = Evento::where('estado', 'confirmado')->get();
        return view('galeria.editar', compact('galeria', 'eventos'));
    }

    public function atualizar(Request $request, $id)
    {
        $galeria = Galeria::findOrFail($id);

        $validado = $request->validate([
            'evento_id' => 'required|exists:eventos,id',
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'caminho_imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ordem' => 'nullable|integer|min:0',
        ]);

        if ($request->hasFile('caminho_imagem')) {
            if ($galeria->caminho_imagem && \Storage::disk('public')->exists($galeria->caminho_imagem)) {
                \Storage::disk('public')->delete($galeria->caminho_imagem);
            }
            $caminho = $request->file('caminho_imagem')->store('galerias', 'public');
            $validado['caminho_imagem'] = $caminho;
        }

        $galeria->update($validado);

        return redirect()->route('galeria.indice')->with('sucesso', 'Imagem atualizada com sucesso!');
    }

    public function eliminar($id)
    {
        $galeria = Galeria::findOrFail($id);

        if ($galeria->caminho_imagem && \Storage::disk('public')->exists($galeria->caminho_imagem)) {
            \Storage::disk('public')->delete($galeria->caminho_imagem);
        }

        $galeria->delete();

        return redirect()->route('galeria.indice')->with('sucesso', 'Imagem eliminada com sucesso!');
    }
}
