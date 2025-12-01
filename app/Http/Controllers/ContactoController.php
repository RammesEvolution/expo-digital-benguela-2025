<?php

namespace App\Http\Controllers;

use App\Models\SubmissaoContacto;
use App\Models\Inscricao;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function indice()
    {
        return view('contacto.indice');
    }

    public function armazenar(Request $request)
    {
        $validado = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'nullable|string|max:20',
            'assunto' => 'required|string|max:255',
            'mensagem' => 'required|string|min:10',
            'tipo_utilizador' => 'required|in:visitante,expositor,organizador',
        ]);

        SubmissaoContacto::create($validado);

        return redirect()->back()->with('sucesso', 'Mensagem enviada com sucesso! Entraremos em contacto em breve.');
    }

    public function inscrever(Request $request)
    {
        $validado = $request->validate([
            'email' => 'required|email|max:255|unique:inscricoes,email',
        ]);

        Inscricao::create($validado);

        return redirect()->back()->with('sucesso', 'Inscrito na newsletter com sucesso!');
    }

    public function listarMensagens()
    {
        $mensagens = SubmissaoContacto::orderBy('created_at', 'desc')->paginate(20);
        return view('contacto.mensagens', compact('mensagens'));
    }

    public function eliminarMensagem($id)
    {
        $mensagem = SubmissaoContacto::findOrFail($id);
        $mensagem->delete();

        return redirect()->back()->with('sucesso', 'Mensagem eliminada com sucesso!');
    }
}
