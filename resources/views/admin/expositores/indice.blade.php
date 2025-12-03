@extends('layout.app')

@section('titulo', 'Gestão de Expositores - Admin')

@section('conteudo')
<section class="secao-admin-expositores py-5">
    <div class="container">
        <h1 class="titulo-pagina mb-4">Gestão de Candidaturas de Expositores</h1>
        
        @if(session('sucesso'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('sucesso') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th>ID</th>
                                <th>Nome / Empresa</th>
                                <th>Entidade</th>
                                <th>NIF/BI</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Data Inscrição</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($expositores as $expositor)
                                <tr>
                                    <td>{{ $expositor->id }}</td>
                                    <td>{{ $expositor->nome_completo }}</td>
                                    <td>{{ ucfirst($expositor->tipo_entidade) }}</td>
                                    <td>{{ $expositor->nif_bi }}</td>
                                    <td>{{ $expositor->email }}</td>
                                    <td>
                                        @php
                                            $badge_class = match($expositor->status) {
                                                'aprovado' => 'bg-success',
                                                'rejeitado' => 'bg-danger',
                                                default => 'bg-warning text-dark',
                                            };
                                        @endphp
                                        <span class="badge {{ $badge_class }}">{{ ucfirst($expositor->status) }}</span>
                                    </td>
                                    <td>{{ $expositor->created_at->format('d/m/Y H:i') }}</td>
                                    <td>
                                        <a href="{{ route('admin.expositores.mostrar', $expositor->id) }}" class="btn btn-sm btn-info text-white">
                                            <i class="fas fa-eye"></i> Ver
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center py-4">Nenhuma candidatura de expositor encontrada.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $expositores->links('pagination::bootstrap-5') }}
        </div>
        
        <div class="mt-5">
            <a href="{{ route('dashboard.indice') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Voltar ao Dashboard
            </a>
        </div>
    </div>
</section>
@endsection