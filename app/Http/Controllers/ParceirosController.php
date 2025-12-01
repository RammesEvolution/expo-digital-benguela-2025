<?php

namespace App\Http\Controllers;

use App\Models\Parceiro;
use Illuminate\Http\Request;

class ParceirosController extends Controller
{
    public function indice()
    {
        $parceiros = Parceiro::where('ativo', true)
            ->orderBy('ordem')
            ->get();

        return view('parceiros.indice', compact('parceiros'));
    }

    public function criar()
    {
        return view('parceiros.criar');
    }

    public function armazenar(Request $request)
    {
        $validado = $request->validate([
            'nome' => 'required|string|max:255|unique:parceiros',
            'descricao' => 'nullable|string|max:500',
            'caminho_logo' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'url_site' => 'nullable|url',
            'ordem' => 'nullable|integer|min:0',
            'ativo' => 'boolean',
        ]);

        if ($request->hasFile('caminho_logo')) {
            $caminho = $request->file('caminho_logo')->store('parceiros', 'public');
            $validado['caminho_logo'] = $caminho;
        }

        Parceiro::create($validado);

        return redirect()->route('parceiros.indice')->with('sucesso', 'Parceiro adicionado com sucesso!');
    }

    public function editar($id)
    {
        $parceiro = Parceiro::findOrFail($id);
        return view('parceiros.editar', compact('parceiro'));
    }

    public function atualizar(Request $request, $id)
    {
        $parceiro = Parceiro::findOrFail($id);

        $validado = $request->validate([
            'nome' => 'required|string|max:255|unique:parceiros,nome,' . $id,
            'descricao' => 'nullable|string|max:500',
            'caminho_logo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'url_site' => 'nullable|url',
            'ordem' => 'nullable|integer|min:0',
            'ativo' => 'boolean', 
        ]);

        if ($request->hasFile('caminho_logo')) {
            if ($parceiro->caminho_logo && \Storage::disk('public')->exists($parceiro->caminho_logo)) {
                \Storage::disk('public')->delete($parceiro->caminho_logo);
            }
            $caminho = $request->file('caminho_logo')->store('parceiros', 'public');
            $validado['caminho_logo'] = $caminho;
        }

        $parceiro->update($validado);

        return redirect()->route('parceiros.indice')->with('sucesso', 'Parceiro atualizado com sucesso!');
    }

    public function eliminar($id)
    {
        $parceiro = Parceiro::findOrFail($id);

        // 1. Apagar o ficheiro (logo)
        if ($parceiro->caminho_logo && \Storage::disk('public')->exists($parceiro->caminho_logo)) {
            \Storage::disk('public')->delete($parceiro->caminho_logo);
        }

        // 2. APAGAR O REGISTO PERMANENTEMENTE DA BD
        $parceiro->forceDelete(); // <<--- MUDAR de delete() para forceDelete()

        return redirect()->route('parceiros.indice')->with('sucesso', 'Parceiro eliminado com sucesso!');
    }
}
