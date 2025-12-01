@extends('layout.app')

@section('titulo', $evento->titulo . ' - Expo Digital 2025')

@section('conteudo')
<section class="secao-eventos py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-8">
                <h1 class="titulo-pagina">{{ $evento->titulo }}</h1>
            </div>
            <div class="col-md-4 text-end">
                <a href="{{ route('eventos.editar', $evento->id) }}" class="btn-principal">
                    <i class="fas fa-edit"></i> Editar
                </a>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card-evento-completo">
                    <div class="evento-header mb-3">
                        <span class="badge-categoria">{{ $evento->categoria }}</span>
                        <span class="badge-estado">{{ ucfirst($evento->estado) }}</span>
                    </div>

                    <h3 class="titulo-subsecao">Descrição</h3>
                    <p class="descricao-evento">{{ $evento->descricao }}</p>

                    <div class="evento-details my-4">
                        <div class="detalhe">
                            <i class="fas fa-calendar"></i>
                            <strong>Início:</strong>
                            <span>{{ $evento->data_inicio->format('d/m/Y \à\s H:i') }}</span>
                        </div>
                        <div class="detalhe">
                            <i class="fas fa-calendar-check"></i>
                            <strong>Fim:</strong>
                            <span>{{ $evento->data_fim->format('d/m/Y \à\s H:i') }}</span>
                        </div>
                        <div class="detalhe">
                            <i class="fas fa-map-pin"></i>
                            <strong>Localização:</strong>
                            <span>{{ $evento->localizacao }}</span>
                        </div>
                        <div class="detalhe">
                            <i class="fas fa-users"></i>
                            <strong>Capacidade:</strong>
                            <span>{{ $evento->capacidade }} pessoas</span>
                        </div>
                    </div>
                </div>

                @if($evento->galerias->count() > 0)
                    <h3 class="titulo-subsecao mt-5">Galeria de Fotos</h3>
                    <div class="row g-3">
                        @foreach($evento->galerias as $galeria)
                            <div class="col-md-4">
                                <div class="card-galeria">
                                    <img src="{{ asset('storage/' . $galeria->caminho_imagem) }}" alt="{{ $galeria->titulo }}" class="img-galeria">
                                    <div class="info-galeria">
                                        <h5>{{ $galeria->titulo }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="col-lg-4">
                <div class="card-evento-completo">
                    <h5 class="titulo-subsecao">Ações</h5>
                    <div class="d-grid gap-2">
                        <a href="{{ route('eventos.indice') }}" class="btn-principal">
                            <i class="fas fa-arrow-left"></i> Voltar
                        </a>
                        <form action="{{ route('eventos.eliminar', $evento->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja eliminar?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-principal w-100" style="background-color: #dc3545; border-color: #dc3545;">
                                <i class="fas fa-trash"></i> Eliminar Evento
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
