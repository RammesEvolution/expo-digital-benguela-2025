@extends('layout.app')

@section('titulo', 'Agenda de Eventos - Expo Digital 2025')

@section('conteudo')
<section class="secao-agenda">
    <div class="container py-5">
        <h1 class="titulo-pagina mb-4">Agenda de Eventos</h1>

        <div class="row g-4">
            @forelse($eventos as $evento)
                <div class="col-lg-4 col-md-6">
                    <div class="card-evento-completo">
                        <div class="evento-header">
                            <span class="badge-categoria">{{ $evento->categoria }}</span>
                            <span class="badge-estado">{{ ucfirst($evento->estado) }}</span>
                        </div>
                        <h5 class="titulo-evento">{{ $evento->titulo }}</h5>
                        <p class="descricao-evento">{{ Str::limit($evento->descricao, 100) }}</p>
                        
                        <div class="evento-details">
                            <div class="detalhe">
                                <i class="fas fa-calendar"></i>
                                <span>{{ $evento->data_inicio->format('d/m/Y H:i') }}</span>
                            </div>
                            <div class="detalhe">
                                <i class="fas fa-map-pin"></i>
                                <span>{{ $evento->localizacao }}</span>
                            </div>
                            <div class="detalhe">
                                <i class="fas fa-users"></i>
                                <span>Capacidade: {{ $evento->capacidade ?? 'N/A' }}</span>
                            </div>
                        </div>

                        <a href="{{ route('agenda.mostrar', $evento->id) }}" class="btn-principal w-100">
                            Ver Detalhes
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted py-5">Nenhum evento confirmado no momento</p>
                </div>
            @endforelse
        </div>

        <!-- Paginação -->
        <div class="d-flex justify-content-center mt-5">
            {{ $eventos->links('pagination::bootstrap-4') }}
        </div>
    </div>
</section>
@endsection
