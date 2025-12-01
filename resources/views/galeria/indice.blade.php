@extends('layout.app')

@section('titulo', 'Galeria - Expo Digital 2025')

@section('conteudo')
<section class="secao-galeria-completa">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="titulo-pagina mb-0">Galeria de Eventos</h1>
            @auth
                @if(Auth::user()->isAdmin())
                    <a href="{{ route('galeria.criar') }}" class="btn-principal">
                        <i class="fas fa-plus"></i> Adicionar Imagem
                    </a>
                @endif
            @endauth
            
        </div>

        <!-- Filtros por evento em vez de categoria -->
      <div class="filtros-galeria mb-4">
            <form action="{{ route('galeria.indice') }}" method="GET" id="form-filtro-galeria">
                <div class="row">
                    <div class="col-md-4">
                        <label for="evento_id" class="form-label">Filtrar por Evento:</label>
                        <select name="evento_id" id="evento_id" class="form-select" onchange="document.getElementById('form-filtro-galeria').submit();">
                            <option value="">Todos os Eventos</option>
                            @foreach($eventos as $evento)
                                <option value="{{ $evento->id }}" @if(request('evento_id') == $evento->id) selected @endif>
                                    {{ $evento->titulo }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>
        </div>
        @if(session('sucesso'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle"></i> {{ session('sucesso') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('erro'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle"></i> {{ session('erro') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Grid de Galerias -->
        <div class="row g-3">
            @forelse($galerias as $galeria)
                <div class="col-lg-4 col-md-6">
                    <div class="card-galeria-grande position-relative">
                        <img src="{{ asset('storage/' . $galeria->caminho_imagem) }}" alt="{{ $galeria->titulo }}" class="img-galeria">
                        <div class="overlay-galeria">
                            <div class="info-overlay">
                                <h5>{{ $galeria->titulo }}</h5>
                                @if($galeria->evento)
                                    <p><small>{{ $galeria->evento->titulo }}</small></p>
                                @endif
                                <a href="{{ asset('storage/' . $galeria->caminho_imagem) }}" class="btn-expandir" target="_blank" title="Expandir">
                                    <i class="fas fa-expand"></i>
                                </a>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 p-2 d-flex gap-1">
                            <a href="{{ route('galeria.editar', $galeria->id) }}" class="btn btn-sm btn-warning" title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('galeria.eliminar', $galeria->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Tem a certeza que deseja eliminar esta imagem?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" title="Eliminar">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted py-5">Nenhuma imagem encontrada</p>
                </div>
            @endforelse
        </div>

        <div class="d-flex justify-content-center mt-5">
            {{ $galerias->links('pagination::bootstrap-4') }}
        </div>
    </div>
</section>
@endsection
