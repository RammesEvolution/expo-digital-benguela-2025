@extends('layout.app')

@section('titulo', 'Agenda de Eventos - Expo Digital 2025')

@section('conteudo')
<section class="secao-eventos py-5">
    <div class="container">
        
        <div class="row mb-4">
            <div class="col-md-6">
                <h1 class="titulo-pagina">Gestão de Eventos</h1>
            </div>
            
            <div class="col-md-6 text-end d-flex justify-content-end align-items-center gap-3">
                <form id="filtro-form" action="{{ route('eventos.indice') }}" method="GET" class="d-flex align-items-center gap-2">
                    <label for="estado_filtro" class="form-label mb-0">Filtrar por:</label>
                    <select name="estado_filtro" id="estado_filtro" class="form-select" style="width: 150px;" onchange="document.getElementById('filtro-form').submit();">
                        <option value="">Todos</option>
                        <option value="proximo" {{ ($estadoFiltro ?? '') == 'proximo' ? 'selected' : '' }}>Próximos (Confirmados)</option>
                        <option value="realizado" {{ ($estadoFiltro ?? '') == 'realizado' ? 'selected' : '' }}>Realizados</option>
                        <option value="confirmado" {{ ($estadoFiltro ?? '') == 'confirmado' ? 'selected' : '' }}>Confirmados (DB)</option>
                        <option value="planejado" {{ ($estadoFiltro ?? '') == 'planejado' ? 'selected' : '' }}>Planejados</option>
                        <option value="cancelado" {{ ($estadoFiltro ?? '') == 'cancelado' ? 'selected' : '' }}>Cancelados</option>
                    </select>
                </form>
                
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
                
                @php
                    use Carbon\Carbon;
                    // Certifica-se de que o campo é um objeto Carbon para usar isPast()
                    // Se o seu modelo Evento usa $dates ou $casts, Carbon::parse pode ser redundante, mas é mais seguro.
                    $data_fim = Carbon::parse($evento->data_fim); 
                    $estado_visual = ucfirst($evento->estado);
                    $cor_badge = 'bg-secondary'; // Default para 'Planejado'

                    if ($evento->estado == 'confirmado') {
                        if ($data_fim->isPast()) {
                            // Se Confirmado E já passou, é Realizado
                            $estado_visual = 'Realizado';
                            $cor_badge = 'bg-success';
                        } else {
                            // Se Confirmado E ainda não passou, é Confirmado (Próximo)
                            $estado_visual = 'Confirmado';
                            $cor_badge = 'bg-primary';
                        }
                    } elseif ($evento->estado == 'cancelado') {
                        $cor_badge = 'bg-danger';
                    }
                @endphp
                
                <div class="col-lg-4 col-md-6">
                    <div class="card-evento-completo">
                        <div class="evento-header">
                            <span class="badge-categoria">{{ $evento->categoria }}</span>
                            <span class="badge-estado {{ $cor_badge }}">{{ $estado_visual }}</span> 
                        </div>

                        <h5 class="titulo-evento">{{ $evento->titulo }}</h5>
                        <p class="descricao-evento">{{ \Illuminate\Support\Str::limit($evento->descricao, 100) }}</p>
                        
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
                            
                            @auth
                                @if(Auth::user()->isAdmin())
                                    <a href="{{ route('eventos.editar', $evento->id) }}" class="btn-pequeno flex-grow-1">
                                        Editar
                                    </a>
                                    <form action="{{ route('eventos.eliminar', $evento->id) }}" method="POST" class="flex-grow-1" onsubmit="return confirm('Tem certeza que deseja eliminar?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-pequeno w-100" style="background-color: #dc3545;">
                                            Eliminar
                                        </button>
                                    </form>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted py-5">Nenhum evento disponível</p>
                </div>
            @endforelse
        </div>

        <div class="d-flex justify-content-center mt-5">
            {{ $eventos->links('pagination::bootstrap-5') }}
        </div>
    </div>
</section>
@endsection