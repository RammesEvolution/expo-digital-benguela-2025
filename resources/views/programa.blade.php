@extends('layout.app')

@section('titulo', 'Programa e Temas - Expo Digital 2025')

@section('conteudo')
<!-- Hero Section with Background Image -->
<section class="hero-section" style="background: linear-gradient(rgba(51, 51, 51, 0.5), rgba(51, 51, 51, 0.5)), url('/images/banner-principal.jpg') center / cover; background-attachment: fixed;">
    <div class="hero-overlay">
        <div class="hero-content">
            
            <h1 class="hero-titulo">Programa e Temas</h1>
            <p class="hero-descricao">Descobrindo o Futuro Digital em Três Dias Transformadores</p>
        </div>
    </div>
</section>


<!-- Introdução -->
<section class="secao-programa-intro py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <h2 class="titulo-secao">Programa da Expo Digital 2025</h2>
                <p class="texto-grande">A Expo Digital 2025 apresenta três dias de atividades dedicadas à transformação digital, inovação tecnológica e modernização dos serviços públicos em Benguela.</p>
                <p>Participe de palestras, workshops e demonstrações práticas com especialistas e líderes da transformação digital em Angola.</p>
            </div>
            <div class="col-lg-6">
                <div class="info-box-destaque">
                    <h4>Datas Importantes</h4>
                    <p><strong>Evento:</strong> 18 a 19 de Dezembro de 2025</p>
                    <p><strong>Local:</strong> Benguela, Angola</p>
                    <p><strong>Horário:</strong> 08h00 às 17h00</p>
                    <p><strong>Inscrição:</strong> <a href="{{ route('inscricoes') }}" class="link-destaque">Clique aqui para se inscrever</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dias do Programa -->
<section class="secao-dias-programa py-5 bg-light">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Os Três Dias do Programa</h2>
        
        <div class="row g-4">
            <!-- DIA 1 -->
            <div class="col-lg-4">
                <div class="card-dia-programa">
                    <div class="dia-numero">
                       
                    </div>
                    <h3 class="dia-titulo">Administração Pública Digital</h3>
                    <p class="dia-tema"><strong>Tema:</strong> <em>Informatizar para Acelerar Benguela</em></p>
                    
                    <div class="dia-conteudo">
                        <h5 class="subtitulo-dia">Foco Principal:</h5>
                        <ul class="lista-dia">
                            <li>Digitalização de processos administrativos</li>
                            <li>Uso de WhatsApp no atendimento ao cidadão</li>
                            <li>Portais e Apps do Governo</li>
                            <li>Inclusão digital e acesso a serviços públicos online</li>
                        </ul>

                        <h5 class="subtitulo-dia mt-3">Preletores:</h5>
                        <ul class="lista-preletores">
                            <li><i class="fas fa-user-tie"></i> Joaquim Cassicato</li>
                            <li><i class="fas fa-user-tie"></i> Ramildo Vicola</li>
                        </ul>
                    </div>
                    
                    <a href="{{ route('inscricoes') }}" class="btn-dia">Inscreva-se</a>
                </div>
            </div>

            <!-- DIA 2 -->
            <div class="col-lg-4">
                <div class="card-dia-programa card-dia-destaque">
                    <div class="dia-numero dia-numero-destaque">
                        
                    </div>
                    <h3 class="dia-titulo">Comunicação Social e Futuro Digital</h3>
                    <p class="dia-tema"><strong>Tema:</strong> <em>Inteligência Artificial na Comunicação</em></p>
                    
                    <div class="dia-conteudo">
                        <h5 class="subtitulo-dia">Foco Principal:</h5>
                        <ul class="lista-dia">
                            <li>Inteligência Artificial aplicada à comunicação</li>
                            <li>Combate à desinformação e fake news</li>
                            <li>Ferramentas digitais para jornalistas</li>
                            <li>Storytelling no mundo digital</li>
                        </ul>

                        <h5 class="subtitulo-dia mt-3">Preletores:</h5>
                        <ul class="lista-preletores">
                            <li><i class="fas fa-user-tie"></i> Especialistas em IA</li>
                            <li><i class="fas fa-user-tie"></i> Comunicadores Digitais</li>
                        </ul>
                    </div>
                    
                    <a href="{{ route('inscricoes') }}" class="btn-dia btn-dia-destaque">Inscreva-se</a>
                </div>
            </div>

            <!-- DIA 3 -->
            <div class="col-lg-4">
                <div class="card-dia-programa">
                    <div class="dia-numero">
                        
                    </div>
                    <h3 class="dia-titulo">Novo Perfil do Profissional</h3>
                    <p class="dia-tema"><strong>Tema:</strong> <em>Do Repórter ao Gestor de Comunidades Digitais</em></p>
                    
                    <div class="dia-conteudo">
                        <h5 class="subtitulo-dia">Foco Principal:</h5>
                        <ul class="lista-dia">
                            <li>Transformação da profissão de comunicador</li>
                            <li>Storytelling digital e engagement</li>
                            <li>Análise de métricas e dados</li>
                            <li>Edição de conteúdo para redes sociais</li>
                        </ul>

                        <h5 class="subtitulo-dia mt-3">Preletor:</h5>
                        <ul class="lista-preletores">
                            <li><i class="fas fa-user-tie"></i> António Emílio</li>
                        </ul>
                    </div>
                    
                    <a href="{{ route('inscricoes') }}" class="btn-dia">Inscreva-se</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Atividades Complementares -->
<section class="secao-atividades py-5">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Atividades Complementares</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="atividade-card">
                    <div class="atividade-icone">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h4>Workshops Práticos</h4>
                    <p>Sessões interativas com especialistas onde aprenderá ferramentas digitais na prática, do uso de plataformas até automação de processos.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="atividade-card">
                    <div class="atividade-icone">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4>Networking</h4>
                    <p>Oportunidade de conectar-se com profissionais, empreendedores e empresas de tecnologia de toda a província e país.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="atividade-card">
                    <div class="atividade-icone">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4>Exposições Tecnológicas</h4>
                    <p>Visite stands de expositores apresentando as mais recentes soluções digitais e inovações tecnológicas.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="atividade-card">
                    <div class="atividade-icone">
                        <i class="fas fa-award"></i>
                    </div>
                    <h4>Certificação</h4>
                    <p>Receba certificado de participação após completar o programa, validado pelo Governo Provincial de Benguela.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Inscrição 
<section class="secao-cta-programa py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="mb-3">Pronto para a Transformação Digital?</h2>
        <p class="texto-grande mb-4">Inscreva-se agora e não perca esta oportunidade única!</p>
        <a href="{{ route('inscricoes') }}" class="btn btn-light btn-lg">Ir para Inscrições</a>
    </div>
</section>
-->
@endsection
