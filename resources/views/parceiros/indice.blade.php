@extends('layout.app')

@section('titulo', 'Gestão de Parceiros')

@section('conteudo')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Parceiros</h2>
        @auth
                @if(Auth::user()->isAdmin())
                     <a href="{{ route('parceiros.criar') }}" class="btn btn-primary">+ Novo Parceiro</a>
                @endif
        @endauth
       
    </div>

    @if(session('sucesso'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('sucesso') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('erro'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('erro') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Logo</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ordem</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($parceiros as $parceiro)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $parceiro->caminho_logo) }}" alt="{{ $parceiro->nome }}" style="max-width: 80px; height: auto;">
                        </td>
                        <td>{{ $parceiro->nome }}</td>
                        <td>{{ Str::limit($parceiro->descricao, 50) }}</td>
                        <td>{{ $parceiro->ordem }}</td>
                        <td>
                            <span class="badge {{ $parceiro->ativo ? 'bg-success' : 'bg-danger' }}">
                                {{ $parceiro->ativo ? 'Ativo' : 'Inativo' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('parceiros.mostrar', $parceiro->id) }}" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('parceiros.editar', $parceiro->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('parceiros.eliminar', $parceiro->id) }}" method="POST" style="display:inline;">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem a certeza?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            Nenhum parceiro registado. <a href="{{ route('parceiros.criar') }}">Criar um novo</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
