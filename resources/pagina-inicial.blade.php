@extends('layout.app')

@section('titulo', 'Página Inicial - Expo Digital 2025')

@section('conteudo')
<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-overlay">
        <div class="hero-content">
            <h1 class="hero-titulo">Expo Digital 2025</h1>
            <p class="hero-subtitulo">Tecnologia ao Serviço do Cidadão</p>
            <p class="hero-descricao">Evento informativo do Governo Provincial de Benguela dedicado à transformação digital e inclusão tecnológica</p>
        </div>
    </div>
</section>

<!-- Cards de Papéis -->
<section class="secao-papeis py-5">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Bem-vindo à Expo Digital 2025</h2>
        <div class="row g-4">
            <!-- Card Organizador -->
            <div class="col-md-4">
                <div class="card-papel">
                    <div class="icone-papel">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Organizador</h3>
                    <p>Conheça a infraestrutura completa, facilidades e capacidades da nossa expo</p>
                    <a href="{{ route('organizador.indice') }}" class="btn-papel">Ver Detalhes</a>
                </div>
            </div>

            <!-- Card Expositor -->
            <div class="col-md-4">
                <div class="card-papel">
                    <div class="icone-papel">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Expositor</h3>
                    <p>Oportunidades de negócio, visibilidade e conexão com seu público-alvo</p>
                    <a href="{{ route('expositor.indice') }}" class="btn-papel">Ver Detalhes</a>
                </div>
            </div>

            <!-- Card Visitante -->
            <div class="col-md-4">
                <div class="card-papel">
                    <div class="icone-papel">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Visitante</h3>
                    <p>Informações de acesso, localização, transporte e guia prático</p>
                    <a href="{{ route('visitante.indice') }}" class="btn-papel">Ver Detalhes</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Galeria Destaque -->
<section class="secao-galeria py-5 bg-light">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Galeria de Eventos</h2>
        <div class="row g-3">
            @forelse($galerias as $galeria)
                <div class="col-md-4 col-sm-6">
                    <div class="card-galeria">
                        <img src="{{ asset('storage/' . $galeria->caminho_imagem) }}" alt="{{ $galeria->titulo }}" class="img-galeria">
                        <div class="info-galeria">
                            <h5>{{ $galeria->titulo }}</h5>
                            @if($galeria->evento)
                                <small>{{ $galeria->evento->categoria }}</small>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">Nenhuma imagem disponível no momento</p>
                </div>
            @endforelse
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('galeria.indice') }}" class="btn-principal">Ver Galeria Completa</a>
        </div>
    </div>
</section>

<!-- Eventos Destaque -->
<section class="secao-eventos py-5">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Próximos Eventos</h2>
        <div class="row g-4">
            @forelse($eventosDestaque as $evento)
                <div class="col-md-4">
                    <div class="card-evento">
                        <div class="evento-data">
                            <span class="data">{{ $evento->data_inicio->format('d') }}</span>
                            <span class="mes">{{ $evento->data_inicio->format('M') }}</span>
                        </div>
                        <div class="evento-info">
                            <h5>{{ $evento->titulo }}</h5>
                            <p class="categoria">{{ $evento->categoria }}</p>
                            <small class="localizacao"><i class="fas fa-map-pin"></i> {{ $evento->localizacao }}</small>
                        </div>
                        <a href="{{ route('agenda.mostrar', $evento->id) }}" class="btn-pequeno">Ver Mais</a>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">Nenhum evento confirmado no momento</p>
                </div>
            @endforelse
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('agenda.indice') }}" class="btn-principal">Ver Agenda Completa</a>
        </div>
    </div>
</section>

<!-- Contacto -->
<section class="secao-contacto py-5 bg-light">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Entre em Contacto</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="card-contacto">
                    <i class="fas fa-envelope"></i>
                    <h5>Email</h5>
                    <a href="mailto:contacto@expodigital.ao">contacto@expodigital.ao</a>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card-contacto">
                    <i class="fas fa-phone"></i>
                    <h5>Telefone</h5>
                    <a href="tel:+244272000000">+244 272 XXX XXX</a>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card-contacto">
                    <i class="fas fa-map-marker-alt"></i>
                    <h5>Localização</h5>
                    <p>Benguela, Angola</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
