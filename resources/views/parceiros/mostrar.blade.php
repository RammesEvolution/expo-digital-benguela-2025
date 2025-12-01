@extends('layout.app')

@section('titulo', $parceiro->nome)

@section('conteudo')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-4">{{ $parceiro->nome }}</h2>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5>Logo</h5>
                            @if($parceiro->caminho_logo)
                                <img src="{{ asset('storage/' . $parceiro->caminho_logo) }}" alt="{{ $parceiro->nome }}" style="max-width: 200px; height: auto;">
                            @else
                                <p class="text-muted">Sem logo</p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <h5>Informações</h5>
                            <p><strong>Descrição:</strong> {{ $parceiro->descricao ?? 'N/A' }}</p>
                            <p><strong>URL:</strong> 
                                @if($parceiro->url_site)
                                    <a href="{{ $parceiro->url_site }}" target="_blank">{{ $parceiro->url_site }}</a>
                                @else
                                    N/A
                                @endif
                            </p>
                            <p><strong>Ordem:</strong> {{ $parceiro->ordem }}</p>
                            <p><strong>Status:</strong> 
                                <span class="badge {{ $parceiro->ativo ? 'bg-success' : 'bg-danger' }}">
                                    {{ $parceiro->ativo ? 'Ativo' : 'Inativo' }}
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <a href="{{ route('parceiros.editar', $parceiro->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('parceiros.eliminar', $parceiro->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem a certeza?')">Eliminar</button>
                        </form>
                        <a href="{{ route('parceiros.indice') }}" class="btn btn-secondary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
