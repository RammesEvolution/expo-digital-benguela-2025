@extends('layout.app')

@section('titulo', 'Página Inicial - Expo Digital 2025')

@section('conteudo')
<!-- Hero Section with Background Image -->
<section class="hero-section" style="background: linear-gradient(rgba(51, 51, 51, 0.5), rgba(51, 51, 51, 0.5)), url('/images/banner-principal.jpg') center / cover; background-attachment: fixed;">
    <div class="hero-overlay">
        <div class="hero-content">
            <div class="hero-logo-section">
                <img src="/images/logo-expo-blue.png" alt="Expo Digital 2025" class="hero-logo">
            </div>
            
            <h1 class="hero-titulo">Expo Digital 2025</h1>
            <p class="hero-subtitulo">Tecnologia ao Serviço do Cidadão</p>
            <p class="hero-descricao">Benguela, de 18 a 19 de Dezembro - Evento informativo do Governo Provincial dedicado à transformação digital e inclusão tecnológica</p>
            <div style="margin-top: 2rem;">
                <a href="{{ route('programa') }}" class="btn-principal">Ver Programa</a>
                <a href="{{ route('inscricoes') }}" class="btn-principal" style="margin-left: 1rem; background-color: rgba(255,255,255,0.2); border-color: #fff;">Inscrições</a>
            </div>
        </div>
    </div>
</section>

<!-- Público Alvo Section - static HTML without database -->
<section class="secao-publico-alvo py-5">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Público Alvo</h2>
        <div class="row g-4">
            <!-- Card 1: Organizador -->
            <div class="col-md-4">
                <div class="card-publico-alvo">
                    <div class="icone-publico">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Organizador</h3>
                    <p>Gabinete Provincial de Comunicação e Imagem de Benguela</p>
                    <p class="descricao-pequena">Responsável pela coordenação, divulgação e execução da Expo Digital 2025, garantindo uma experiência integrada e eficiente.</p>
                </div>
            </div>

            <!-- Card 2: Público Principal -->
            <div class="col-md-4">
                <div class="card-publico-alvo">
                    <div class="icone-publico">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Público Principal</h3>
                    <p>População Geral, Instituições Públicas, Estudantes & Jovens</p>
                    <p class="descricao-pequena">Profissionais de Comunicação Social e Expositores Tecnológicos que buscam aprimorar conhecimentos e explorar inovações digitais.</p>
                </div>
            </div>

            <!-- Card 3: Expositores & Parceiros -->
            <div class="col-md-4">
                <div class="card-publico-alvo">
                    <div class="icone-publico">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Expositores & Parceiros</h3>
                    <p>Empresas Privadas, Parceiros Tecnológicos, Influenciadores</p>
                    <p class="descricao-pequena">Organizações que contribuem com soluções digitais, inovação e visibilidade para fortalecer a transformação digital em Benguela.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Titulares Section - Static HTML -->
<section class="secao-titulares py-5 bg-light">

    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Titulares da Entidade</h2>

        <div class="row g-4 justify-content-center mb-5">
            
            <div class="col-lg-8 col-md-10">
                <h3 class="text-center mb-3">Governador da Província</h3>
                
                <div class="card-titular-split destaque d-flex flex-md-row flex-column shadow-lg border-0 rounded-3 overflow-hidden">
                    
                    <div class="titular-info p-4 d-flex flex-column justify-content-center w-50">
                        <h5 class="titular-cargo text-color-primary mb-1">Governador da Província</h5>
                        <h4 class="titular-nome mb-3">Manuel Nunes Júnior</h4>
                        <p class="titular-secao">Governo Provincial de Benguela</p>
                        
                        <p class="mt-3 text-muted" style="font-size: 0.95rem;">
                            Liderando a transformação digital, o Governador tem sido o principal impulsionador da Expo Digital 2025, visando modernizar os serviços e promover a inclusão tecnológica em toda a província.
                        </p>
                    </div>
                    
                    <div class="img-container-titular-split w-50">
                        <img src="{{ asset('images/titulares/manuel-nunes.png') }}" 
                            alt="Governador Manuel Nunes Júnior" 
                            class="img-fluid h-100 w-100 object-fit-cover">
                    </div>
                    
                </div>
            </div>
        </div>
        
        <hr class="my-5">

        <div class="row g-4 justify-content-center">
            
            <h3 class="text-center mb-4">Equipa de Comunicação e Organização</h3>

            <div class="col-lg-3 col-md-6">
                <div class="card-titular">
                    <div class="img-container-titular">
                        <img src="{{ asset('images/titulares/antonio-carvalho.jpg') }}" alt="Antonio Carvalho" class="img-titular">
                    </div>
                    <div class="titular-info">
                        <h5 class="titular-cargo text-color-primary">Director do Gabinete de Comunicação</h5>
                        <h4 class="titular-nome">Antonio Carvalho</h4>
                        <p class="titular-secao">Governo Provincial de Benguela</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card-titular">
                    <div class="img-container-titular">
                        <img src="{{ asset('images/titulares/joaquim-sambo.jpg') }}" alt="Joaquim Victor Sambo" class="img-titular">
                    </div>
                    <div class="titular-info">
                        <h5 class="titular-cargo text-color-primary">Chefe de Departamento de Comunicação Social</h5>
                        <h4 class="titular-nome">Joaquim Victor Sambo</h4>
                        <p class="titular-secao">Governo Provincial de Benguela</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card-titular">
                    <div class="img-placeholder-titular">
                        <img src="{{ asset('images/titulares/Job-Squeseque .jpg') }}" alt="Joaquim Victor Sambo" class="img-titular">
                    </div>
                    <div class="titular-info">
                        <h5 class="titular-cargo text-color-primary">Chefe de Departamento de Comunicação Imprensa</h5>
                        <h4 class="titular-nome">Job Squeseque</h4>
                        <p class="titular-secao">Governo Provincial de Benguela</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Vídeo Section - Governo Provincial -->
<section class="secao-video py-5">
    <div class="container">
        <h2 class="titulo-secao text-center mb-4"></h2>
        <div class="video-container">
            <video class="video-governo" autoplay muted loop controls>
                <source src="{{ asset('videos/governo-benguela-apresentacao.mp4') }}" type="video/mp4">
                Seu navegador não suporta vídeo HTML5.
            </video>
        </div>
        
    </div>
</section>



<!-- Galeria Destaque -->
<section class="secao-galeria py-5">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Galeria de Eventos</h2>
        <div class="row g-3">
            @forelse($galerias as $galeria)
                <div class="col-lg-4 col-md-6">
                    <div class="card-galeria">
                        <img src="{{ asset('storage/' . $galeria->caminho_imagem) }}" alt="{{ $galeria->titulo }}" class="img-galeria">
                        <div class="info-galeria">
                            <h5>{{ $galeria->titulo }}</h5>
                            @if($galeria->evento)
                                <small>{{ $galeria->evento->titulo }}</small>
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



<!-- Partners Section with Horizontal Scroll -->
<section class="secao-parceiros py-5">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Nossos Parceiros</h2>
        <div class="parceiros-scroll-container">
            <div class="parceiros-scroll-wrapper">
                <div class="parceiros-scroll-wrapper">
                    <div class="parceiro-card-item">
                        <div class="card-parceiro">
                            <img src="{{ asset('images/parceiros/unitel.png') }}" alt="Unite" class="logo-parceiro">
                        </div>
                        <p class="parceiro-nome text-center mt-2">Unitel</p>
                    </div>
                    <div class="parceiro-card-item">
                        <div class="card-parceiro">
                            <img src="{{ asset('images/parceiros/africell.png') }}" alt="Africell" class="logo-parceiro">
                        </div>
                        <p class="parceiro-nome text-center mt-2">Africell</p>
                    </div>
                    
                    <div class="parceiro-card-item">
                        <div class="card-parceiro">
                            <img src="{{ asset('images/parceiros/telecom.png') }}" alt="Angola Telecom" class="logo-parceiro">
                        </div>
                        <p class="parceiro-nome text-center mt-2">Angola Telecom</p>
                    </div>
                    
                    <div class="parceiro-card-item">
                        <div class="card-parceiro">
                            <img src="{{ asset('images/parceiros/paratus.png') }}" alt="ITA Paratus" class="logo-parceiro">
                        </div>
                        <p class="parceiro-nome text-center mt-2">ITA Paratus</p>
                    </div>
                    <div class="parceiro-card-item">
                        <div class="card-parceiro">
                            <img src="{{ asset('images/parceiros/movicel.png') }}" alt="Movicel" class="logo-parceiro">
                        </div>
                        <p class="parceiro-nome text-center mt-2">Movicel</p>
                    </div>
                    <div class="parceiro-card-item">
                        <div class="card-parceiro">
                            <img src="{{ asset('images/parceiros/inapem.png') }}" alt="Inapem" class="logo-parceiro">
                        </div>
                        <p class="parceiro-nome text-center mt-2">Inapem</p>
                    </div>
                    <div class="parceiro-card-item">
                        <div class="card-parceiro">
                            <img src="{{ asset('images/parceiros/serjob.png') }}" alt="SerJob" class="logo-parceiro">
                        </div>
                        <p class="parceiro-nome text-center mt-2">SerJob</p>
                    </div>
                    <div class="parceiro-card-item">
                        <div class="card-parceiro">
                            <img src="{{ asset('images/parceiros/mes.png') }}" alt="Rammes Evolution" class="logo-parceiro">
                        </div>
                        <p class="parceiro-nome text-center mt-2">Rammes Evolution</p>
                    </div>
                
                    <div class="parceiro-card-item">
                        <div class="card-parceiro">
                            <img src="{{ asset('images/parceiros/mind-creative.png') }}" alt="Mind Creative" class="logo-parceiro">
                        </div>
                        <p class="parceiro-nome text-center mt-2">Mind Creative</p>
                    </div>
                    
                    <div class="parceiro-card-item">
                        <div class="card-parceiro">
                            <img src="{{ asset('images/parceiros/kiraSoft.png') }}" alt="KiraSoft" class="logo-parceiro">
                        </div>
                        <p class="parceiro-nome text-center mt-2">KiraSoft</p>
                    </div>
                    <div class="parceiro-card-item">
                        <div class="card-parceiro">
                            <img src="{{ asset('images/parceiros/mtech-soluctions.png') }}" alt="MTech Soluctions" class="logo-parceiro">
                        </div>
                        <p class="parceiro-nome text-center mt-2">MTech Solutions</p>
                    </div>
                    <div class="parceiro-card-item">
                        <div class="card-parceiro">
                            <img src="{{ asset('images/parceiros/grupoaa.png') }}" alt="GrupoAA" class="logo-parceiro">
                        </div>
                        <p class="parceiro-nome text-center mt-2">GrupoAA</p>
                    </div>
                    <div class="parceiro-card-item">
                        <div class="card-parceiro">
                            <img src="{{ asset('images/parceiros/tombosy.png') }}" alt="Tombosy" class="logo-parceiro">
                        </div>
                        <p class="parceiro-nome text-center mt-2">Tombosy</p>
                    </div>
                    <div class="parceiro-card-item">
                        <div class="card-parceiro">
                            <img src="{{ asset('images/parceiros/record-digital-angola.png') }}" alt="Record Digital Angola" class="logo-parceiro">
                        </div>
                        <p class="parceiro-nome text-center mt-2">Record Digital Angola</p>
                    </div>
                    <div class="parceiro-card-item">
                        <div class="card-parceiro">
                            <img src="{{ asset('images/parceiros/jean piaget.png') }}" alt="ISP Jean Piaget" class="logo-parceiro">
                        </div>
                        <p class="parceiro-nome text-center mt-2">ISP Jean Piaget</p>
                    </div>
                    <div class="parceiro-card-item">
                        <div class="card-parceiro">
                            <img src="{{ asset('images/parceiros/ispb.png') }}" alt="ISP de Benguela" class="logo-parceiro">
                        </div>
                        <p class="parceiro-nome text-center mt-2">ISP de Benguela</p>
                    </div>
                    <div class="parceiro-card-item">
                        <div class="card-parceiro">
                            <img src="{{ asset('images/parceiros/hcb.jpg') }}" alt="Grupo HCB" class="logo-parceiro">
                        </div>
                        <p class="parceiro-nome text-center mt-2">Grupo HCB</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contacto -->
<section class="secao-contacto py-5 bg-light">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Entre em Contacto</h2>
        <div class="row g-4">
            <div class="col-md-4 text-center">
                <div class="card-contacto">
                    <i class="fas fa-envelope"></i>
                    <h5>Email</h5>
                    <a href="mailto:geral@benguela.gov.ao">geral@benguela.gov.ao</a>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card-contacto">
                    <i class="fas fa-phone"></i>
                    <h5>Telefone</h5>
                    <a href="tel:+244973205799">+244 973 205 799</a>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card-contacto">
                    <i class="fas fa-map-marker-alt"></i>
                    <h5>Endereço</h5>
                    <p>Rua de Timor, Benguela</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('contacto.indice') }}" class="btn-principal">Enviar Mensagem</a>
        </div>
    </div>
</section>
@endsection
