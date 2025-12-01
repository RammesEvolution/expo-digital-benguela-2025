@extends('layout.app')

@section('titulo', 'Sobre - Expo Digital 2025')

@section('conteudo')
<!-- Hero Section for Sobre with parallax -->
<section class="hero-section-sobre" style="background: linear-gradient(rgba(0, 51, 102, 0.6), rgba(0, 51, 102, 0.6)), url('/images/banner-sobre.jpg') center / cover; background-attachment: fixed; min-height: 400px; display: flex; align-items: center;">
    <div class="container w-100">
        <div class="hero-content text-white">
            <h1 class="hero-titulo-page">Sobre a Expo Digital 2025</h1>
            <p class="hero-subtitulo-page">Transformando Benguela Através da Inovação e Tecnologia</p>
        </div>
    </div>
</section>

<!-- Missão & Visão -->
<section class="secao-sobre py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <h3 class="titulo-subsecao">Missão</h3>
                <p class="texto-secao">Garantir uma divulgação ampla, eficiente e uniforme da Expo Digital 2025, orientando tecnicamente os expositores, instituições públicas e participantes para promover a adoção de ferramentas digitais.</p>

                <h3 class="titulo-subsecao mt-5">Visão</h3>
                <p class="texto-secao">Consolidar Benguela como referência nacional em transformação digital, promovendo a inovação e o acesso à tecnologia para todos os cidadãos.</p>
            </div>

            <div class="col-lg-6">
                <h3 class="titulo-subsecao">Lema da Expo</h3>
                <p class="texto-destaque">"Tecnologia ao Serviço do Cidadão"</p>
                
                <div class="info-institucional mt-4">
                    <h4 class="titulo-subsecao">Informação Institucional</h4>
                    <ul class="lista-info">
                        <li><strong>Organizador:</strong> Governo Provincial de Benguela</li>
                        <li><strong>Realizador:</strong> Gabinete Provincial de Comunicação e Imagem</li>
                        <li><strong>Ano:</strong> 2025</li>
                        <li><strong>Local:</strong> Benguela, Angola</li>
                        <li><strong>Datas:</strong> 18 a 19 de Dezembro de 2025</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Objetivos Principais -->
<section class="secao-objetivos py-5 bg-light">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Objetivos Principais da Expo</h2>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card-objetivo">
                    <div class="objetivo-numero">1</div>
                    <h4>Garantir Divulgação Ampla</h4>
                    <p>Assegurar divulgação eficiente e uniforme do evento, alcançando o máximo de beneficiários em toda a província de Benguela.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-objetivo">
                    <div class="objetivo-numero">2</div>
                    <h4>Reforçar Imagem Institucional</h4>
                    <p>Reforçar a imagem institucional do Governo Provincial como promotor de transformação digital e modernização.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-objetivo">
                    <div class="objetivo-numero">3</div>
                    <h4>Aumentar Alfabetização Digital</h4>
                    <p>Aumentar a literacia digital da população e facilitar acesso aos serviços públicos online, reduzindo exclusão digital.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Públicos-Alvo -->
<section class="secao-publicos-alvo py-5">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Públicos-Alvo da Expo Digital</h2>
        
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card-publico">
                    <div class="publico-titulo">
                        <i class="fas fa-users"></i>
                        <h4>Públicos Principais</h4>
                    </div>
                    <ul class="lista-publico">
                        <li><strong>População em Geral</strong> - Cidadãos interessados em conhecer tecnologias</li>
                        <li><strong>Instituições Públicas</strong> - Órgãos governamentais em busca de transformação digital</li>
                        <li><strong>Estudantes & Jovens</strong> - Formandos e profissionais em início de carreira</li>
                        <li><strong>Expositores Tecnológicos</strong> - Empresas com soluções inovadoras</li>
                        <li><strong>Profissionais de Comunicação Social</strong> - Jornalistas e comunicadores digitais</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-publico">
                    <div class="publico-titulo">
                        <i class="fas fa-star"></i>
                        <h4>Públicos Secundários</h4>
                    </div>
                    <ul class="lista-publico">
                        <li><strong>Empresas Privadas</strong> - Organizações buscando inovação</li>
                        <li><strong>Parceiros Tecnológicos</strong> - Fornecedores de soluções digitais</li>
                        <li><strong>Organizações Juvenis</strong> - Associações e coletivos de jovens</li>
                        <li><strong>Influenciadores Digitais</strong> - Criadores de conteúdo e comunicadores</li>
                        <li><strong>Investidores & Empreendedores</strong> - Pessoas interessadas em oportunidades</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Por que Participar -->
<section class="secao-por-que-participar py-5 bg-light">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Por Que Participar?</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-beneficio">
                    <i class="fas fa-brain"></i>
                    <h5>Aprender</h5>
                    <p>Adquira conhecimentos sobre transformação digital, ferramentas modernas e melhores práticas.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-beneficio">
                    <i class="fas fa-network-wired"></i>
                    <h5>Conectar</h5>
                    <p>Conheça profissionais, expositores, parceiros e crie oportunidades de colaboração.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-beneficio">
                    <i class="fas fa-rocket"></i>
                    <h5>Inovar</h5>
                    <p>Descubra as últimas inovações tecnológicas e explore soluções para seus desafios.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-beneficio">
                    <i class="fas fa-certificate"></i>
                    <h5>Certificar</h5>
                    <p>Obtenha certificado de participação válido pelo Governo Provincial de Benguela.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-beneficio">
                    <i class="fas fa-briefcase"></i>
                    <h5>Crescer</h5>
                    <p>Expanda sua rede profissional e descubra novas oportunidades de carreira.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-beneficio">
                    <i class="fas fa-globe"></i>
                    <h5>Transformar</h5>
                    <p>Seja parte do movimento de transformação digital em Benguela e em Angola.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Para Inscrição -->
<section class="secao-cta-sobre py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="mb-3">Faça Parte da Transformação Digital!</h2>
        <p class="texto-grande mb-4">Inscreva-se agora na Expo Digital 2025 e prepare-se para o futuro.</p>
        <div>
            <a href="{{ route('inscricoes') }}" class="btn btn-light btn-lg me-3">Inscrições</a>
            <a href="{{ route('programa') }}" class="btn btn-outline-light btn-lg">Ver Programa</a>
        </div>
    </div>
</section>
@endsection
