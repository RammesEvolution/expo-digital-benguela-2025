@extends('layout.app')

@section('titulo', 'Detalhes do Expositor - Admin')

@section('conteudo')
<section class="secao-detalhes-expositor py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-8">
                <h1 class="titulo-pagina">Detalhes da Candidatura</h1>
                <h3 class="text-color-primary">{{ $expositor->nome_completo }}</h3>
            </div>
            <div class="col-md-4 text-end">
                <a href="{{ route('admin.expositores.indice') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Voltar à Lista
                </a>
            </div>
        </div>
        
        @if(session('sucesso'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('sucesso') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-body">
                <h5 class="card-title text-color-primary mb-3"><i class="fas fa-user-circle me-2"></i> Informações Pessoais / Corporativas</h5>
                <dl class="row">
                    <dt class="col-sm-3">Entidade:</dt>
                    <dd class="col-sm-9">{{ ucfirst($expositor->tipo_entidade) }}</dd>

                    <dt class="col-sm-3">NIF / B.I.:</dt>
                    <dd class="col-sm-9">{{ $expositor->nif_bi }}</dd>

                    <dt class="col-sm-3">Email:</dt>
                    <dd class="col-sm-9"><a href="mailto:{{ $expositor->email }}">{{ $expositor->email }}</a></dd>

                    <dt class="col-sm-3">Telefone:</dt>
                    <dd class="col-sm-9">{{ $expositor->telefone ?? 'N/A' }}</dd>
                    
                    <dt class="col-sm-3">Data Inscrição:</dt>
                    <dd class="col-sm-9">{{ $expositor->created_at->format('d/m/Y H:i') }}</dd>
                </dl>

                <hr>

                <h5 class="card-title text-color-primary mt-4 mb-3"><i class="fas fa-lightbulb me-2"></i> Detalhes da Proposta</h5>
                
                <p class="fw-bold">Manifestação de Interesse:</p>
                <p class="border p-3 rounded bg-light">{{ $expositor->manifestacao_interesse }}</p>

                <p class="fw-bold mt-4">Projeto ou Solução Tecnológica a Apresentar:</p>
                <p class="border p-3 rounded bg-light">{{ $expositor->projeto_apresentar }}</p>

                <hr>
                
                <h5 class="card-title text-color-primary mt-4 mb-3"><i class="fas fa-check-circle me-2"></i> Status da Candidatura</h5>
                
                <dl class="row">
                    <dt class="col-sm-3">Status Atual:</dt>
                    <dd class="col-sm-9">
                        @php
                            $badge_class = match($expositor->status) {
                                'aprovado' => 'bg-success',
                                'rejeitado' => 'bg-danger',
                                default => 'bg-warning text-dark',
                            };
                        @endphp
                        <span class="badge {{ $badge_class }} fs-6">{{ ucfirst($expositor->status) }}</span>
                    </dd>
                </dl>

                <div class="mt-3">
                    <p class="fw-bold">Alterar Status:</p>
                    <form action="{{ route('admin.expositores.atualizarStatus', $expositor->id) }}" method="POST" class="d-flex gap-2">
                        @csrf
                        @method('PUT')
                        <select name="status" class="form-select w-auto" required>
                            <option value="pendente" {{ $expositor->status == 'pendente' ? 'selected' : '' }}>Pendente</option>
                            <option value="aprovado" {{ $expositor->status == 'aprovado' ? 'selected' : '' }}>Aprovado</option>
                            <option value="rejeitado" {{ $expositor->status == 'rejeitado' ? 'selected' : '' }}>Rejeitado</option>
                        </select>
                        <button type="submit" class="btn btn-sm btn-primary">
                            Atualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection