@extends('layout.app')

@section('titulo', 'Visitante - Expo Digital 2025')

@section('conteudo')
<section class="secao-papel">
    <div class="container py-5">
        <h1 class="titulo-pagina mb-2">{{ $titulo }}</h1>
        <p class="subtitulo-pagina mb-5">{{ $subtitulo }}</p>

        <!-- Informações Práticas -->
        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card-info">
                    <h5><i class="fas fa-bus"></i> Como Chegar</h5>
                    <p>A estação de transportes pública mais próxima fica a 10 minutos da expo. Diversas linhas de ônibus servem o local.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-info">
                    <h5><i class="fas fa-parking"></i> Estacionamento</h5>
                    <p>Disponíveis 500+ vagas de estacionamento com tarifas acessíveis e segurança 24/7.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-info">
                    <h5><i class="fas fa-utensils"></i> Alimentação</h5>
                    <p>Diversas opções de restaurantes, cafés e food trucks dentro do recinto da expo.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-info">
                    <h5><i class="fas fa-accessible-icon"></i> Acessibilidade</h5>
                    <p>Instalações totalmente acessíveis para pessoas com mobilidade reduzida.</p>
                </div>
            </div>
        </div>

        <!-- Horário e Entrada -->
        <div class="info-importante">
            <h3>Informações Importantes</h3>
            <p><strong>Horário:</strong> 09:00 - 18:00 (Segunda a Domingo)</p>
            <p><strong>Entrada:</strong> Gratuita para todos os visitantes</p>
            <p><strong>Local:</strong> Benguela, Angola</p>
            <a href="{{ route('contacto.indice') }}" class="btn-principal">Mais Informações</a>
        </div>
    </div>
</section>
@endsection
