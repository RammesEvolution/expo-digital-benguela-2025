@extends('layout.app')

@section('titulo', 'Organizador - Expo Digital 2025')

@section('conteudo')
<section class="secao-papel">
    <div class="container py-5">
        <h1 class="titulo-pagina mb-2">{{ $titulo }}</h1>
        <p class="subtitulo-pagina mb-5">{{ $subtitulo }}</p>

        <!-- Grid de Facilidades -->
        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card-facilidade">
                    <i class="fas fa-wifi"></i>
                    <h5>Infraestrutura Completa</h5>
                    <p>Wifi de alta velocidade, energia elétrica estável e internet de banda larga em toda a área</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-facilidade">
                    <i class="fas fa-parking"></i>
                    <h5>Estacionamento Amplo</h5>
                    <p>Mais de 500 vagas disponíveis, com fácil acesso integrado ao centro de eventos</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-facilidade">
                    <i class="fas fa-utensils"></i>
                    <h5>Alimentação e Bebidas</h5>
                    <p>Opções diversificadas de catering e bebidas para seus convidados e participantes</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-facilidade">
                    <i class="fas fa-cube"></i>
                    <h5>Espaços Versáteis</h5>
                    <p>Salas moduláveis e áreas multifuncionais para diversos tipos de eventos e apresentações</p>
                </div>
            </div>
        </div>

        <!-- Localização -->
        <div class="mapa-container mb-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.1234567890!2d13.8344!3d-12.3745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0!2s0x0!5e0!3m2!1spt!2sao!4v1234567890" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <!-- CTA -->
        <div class="text-center">
            <a href="{{ route('contacto.indice') }}" class="btn-principal btn-lg">
                Entre em Contacto Para Mais Informações
            </a>
        </div>
    </div>
</section>
@endsection
