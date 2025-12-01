@extends('layout.app')

@section('title', 'Expo Digital 2025 - Bem-vindo')

@section('content')
<div class="container-fluid px-0">
    <!-- Hero Section -->
    <section class="hero-section bg-dark text-white py-5 position-relative" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://via.placeholder.com/1920x400'); background-size: cover; background-position: center;">
        <div class="container py-5">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">Tecnologia ao Serviço do Cidadão</h1>
                    <p class="lead mb-4">
                        Expo Digital 2025 é um evento informativo do Governo Provincial de Benguela dedicado à transformação digital e à modernização dos serviços públicos.
                    </p>
                    <a href="{{ route('gallery.index') }}" class="btn btn-primary btn-lg me-3">Ver Galeria</a>
                    <a href="{{ route('contact.index') }}" class="btn btn-outline-light btn-lg">Contacte-nos</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Cards de Acesso (Papéis) -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Bem-vindo à Expo Digital 2025</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <h3 class="card-title fw-bold text-danger mb-3">Organizador</h3>
                            <p class="card-text">Plataforma dedicada ao planeamento e coordenação do evento</p>
                            <a href="{{ route('organizer') }}" class="btn btn-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <h3 class="card-title fw-bold text-danger mb-3">Expositor</h3>
                            <p class="card-text">Oportunidades de negócio e demonstrações tecnológicas</p>
                            <a href="{{ route('expositor') }}" class="btn btn-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <h3 class="card-title fw-bold text-danger mb-3">Visitante</h3>
                            <p class="card-text">Informações práticas para visitar e aproveitar o evento</p>
                            <a href="{{ route('visitor') }}" class="btn btn-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Próximos Eventos -->
    <section class="py-5">
        <div class="container">
            <h2 class="mb-5 fw-bold">Próximos Eventos</h2>
            <div class="row g-4">
                @forelse($upcomingEvents as $event)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $event->title }}</h5>
                                <p class="card-text text-muted small">
                                    <i class="far fa-calendar me-2"></i>{{ $event->getDateFormatted() }}
                                </p>
                                <p class="card-text text-muted small">
                                    <i class="fas fa-map-marker-alt me-2"></i>{{ $event->location }}
                                </p>
                                <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                                <a href="{{ route('events.show', $event) }}" class="btn btn-sm btn-outline-primary">Detalhes</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center text-muted">Nenhum evento próximo</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Galeria Prévia -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-5 fw-bold">Galeria de Eventos</h2>
            <div class="row g-3">
                @forelse($recentGalleries as $item)
                    <div class="col-md-4 col-lg-3">
                        <a href="{{ route('gallery.index') }}" class="gallery-item position-relative overflow-hidden d-block" style="height: 250px; border-radius: 8px; background-size: cover; background-position: center; background-image: url('{{ asset('storage/' . $item->image_path) }}')">
                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 transition"></div>
                        </a>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center text-muted">Galeria vazia</p>
                    </div>
                @endforelse
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('gallery.index') }}" class="btn btn-primary">Ver Galeria Completa</a>
            </div>
        </div>
    </section>

    <!-- Contacto CTA -->
    <section class="py-5 bg-danger text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3 class="fw-bold mb-2">Tem perguntas sobre o evento?</h3>
                    <p class="mb-0">Entre em contacto connosco ou subscreva a nossa newsletter para receber as últimas novidades.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="{{ route('contact.index') }}" class="btn btn-light btn-lg me-2">Contacte-nos</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
