@extends('layout.app')

@section('titulo', 'Agenda de Eventos - Expo Digital 2025')

@section('conteudo')
<section class="secao-eventos py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-8">
                <h1 class="titulo-pagina">Agenda de Eventos</h1>
            </div>
            <div class="col-md-4 text-end">
                @auth
                    @if(Auth::user()->isAdmin())
                        <a href="{{ route('eventos.criar') }}" class="btn-principal">
                            <i class="fas fa-plus"></i> Novo Evento
                        </a>   
                    @endif
                @endauth
            </div>
        </div>

        @if(session('sucesso'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('sucesso') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

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

                        <div class="d-flex gap-2 mt-3">
                            <a href="{{ route('eventos.mostrar', $evento->id) }}" class="btn-pequeno flex-grow-1">
                                Ver Detalhes
                            </a>
                            <a href="{{ route('eventos.editar', $evento->id) }}" class="btn-pequeno flex-grow-1">
                                Editar
                            </a>
                            <form action="{{ route('eventos.eliminar', $evento->id) }}" method="POST" class="flex-grow-1" onsubmit="return confirm('Tem certeza?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-pequeno w-100" style="background-color: #dc3545;">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted py-5">Nenhum evento disponível</p>
                </div>
            @endforelse
        </div>

        <!-- Paginação -->
        <div class="d-flex justify-content-center mt-5">
            {{ $eventos->links('pagination::bootstrap-5') }}
        </div>
    </div>
</section>
@endsection
