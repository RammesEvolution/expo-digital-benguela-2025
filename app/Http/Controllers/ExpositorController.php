<?php

namespace App\Http\Controllers;

use App\Models\Expositor;
use Illuminate\Http\Request;

class ExpositorController extends Controller
{
    // Método para exibir o formulário de inscrição (será embutido na view 'inscricoes')
    // Não é necessário um método 'criar' separado se for embutido.

    // Método para armazenar a inscrição
    public function armazenarInscricao(Request $request)
    {
        $validado = $request->validate([
            'nome_completo' => 'required|string|max:255',
            'nif_bi' => 'required|string|max:50|unique:expositores,nif_bi',
            'email' => 'required|email|max:255|unique:expositores,email',
            'telefone' => 'nullable|string|max:50',
            'manifestacao_interesse' => 'required|string',
            'projeto_apresentar' => 'required|string',
            'tipo_entidade' => 'required|in:singular,coletiva',
        ], [
            'nif_bi.unique' => 'Este NIF/BI já se encontra registado como expositor.',
            'email.unique' => 'Este email já foi usado para uma inscrição.',
        ]);

        Expositor::create($validado);

        return redirect()->route('inscricoes')->with('sucesso', 'Sua candidatura foi submetida com sucesso! Aguarde o nosso contacto.');
    }

    public function indiceAdmin()
    {
        // Ordena por data de criação (mais recente primeiro) e pagina
        $expositores = Expositor::orderBy('created_at', 'desc')->paginate(15);

        return view('admin.expositores.indice', compact('expositores'));
    }

    public function mostrar($id)
    {
        $expositor = Expositor::findOrFail($id);

        return view('admin.expositores.mostrar', compact('expositor'));
    }

    public function atualizarStatus(Request $request, $id)
    {
        $expositor = Expositor::findOrFail($id);

        $request->validate([
            'status' => 'required|in:pendente,aprovado,rejeitado',
        ]);

        $expositor->status = $request->input('status');
        $expositor->save();

        return redirect()->route('admin.expositores.mostrar', $expositor->id)->with('sucesso', 'Status do expositor atualizado com sucesso!');
    }
}