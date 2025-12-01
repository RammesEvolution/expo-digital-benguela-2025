@extends('layout.app')

@section('titulo', 'Expositor - Expo Digital 2025')

@section('conteudo')
<section class="secao-papel">
    <div class="container py-5">
        <h1 class="titulo-pagina mb-2">{{ $titulo }}</h1>
        <p class="subtitulo-pagina mb-5">{{ $subtitulo }}</p>

        <!-- Pacotes -->
        <h3 class="titulo-subsecao mb-4">Nossos Pacotes</h3>
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card-pacote">
                    <div class="pacote-badge">Básico</div>
                    <h5>Espaço Pequeno</h5>
                    <p class="preco">Consulte</p>
                    <ul class="lista-beneficios">
                        <li><i class="fas fa-check"></i> 10m² de espaço</li>
                        <li><i class="fas fa-check"></i> Decoração básica</li>
                        <li><i class="fas fa-check"></i> Suporte técnico</li>
                    </ul>
                    <a href="{{ route('contacto.indice') }}" class="btn-principal w-100">Informações</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-pacote destaque">
                    <div class="pacote-badge">Recomendado</div>
                    <h5>Espaço Médio</h5>
                    <p class="preco">Consulte</p>
                    <ul class="lista-beneficios">
                        <li><i class="fas fa-check"></i> 20m² de espaço</li>
                        <li><i class="fas fa-check"></i> Decoração personalizada</li>
                        <li><i class="fas fa-check"></i> Suporte prioritário</li>
                    </ul>
                    <a href="{{ route('contacto.indice') }}" class="btn-principal w-100">Informações</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-pacote">
                    <div class="pacote-badge">Premium</div>
                    <h5>Espaço Grande</h5>
                    <p class="preco">Consulte</p>
                    <ul class="lista-beneficios">
                        <li><i class="fas fa-check"></i> 50m² de espaço</li>
                        <li><i class="fas fa-check"></i> Decoração premium</li>
                        <li><i class="fas fa-check"></i> Suporte VIP 24/7</li>
                    </ul>
                    <a href="{{ route('contacto.indice') }}" class="btn-principal w-100">Informações</a>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="cta-expositor text-center">
            <h3>Pronto para Participar?</h3>
            <a href="{{ route('contacto.indice') }}" class="btn-principal btn-lg">Solicite Mais Informações</a>
        </div>
    </div>
</section>
@endsection
