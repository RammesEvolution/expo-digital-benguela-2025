@extends('layout.app')

@section('titulo', 'Inscrições e Normas - Expo Digital 2025')

@section('conteudo')
<!-- Hero Section with Background Image -->
<section class="hero-section" style="background: linear-gradient(rgba(51, 51, 51, 0.5), rgba(51, 51, 51, 0.5)), url('/images/banner-principal.jpg') center / cover; background-attachment: fixed;">
    <div class="hero-overlay">
        <div class="hero-content">
            <div class="hero-logo-section">
                <img src="/images/logo-expo-blue.png" alt="Expo Digital 2025" class="hero-logo">
            </div>
            
            <h1 class="hero-titulo">Inscrições e Normas</h1>
            <p class="hero-descricao">Informações Essenciais para Participar da Expo Digital 2025</p>
        </div>
    </div>
</section>

<!-- Processo de Inscrição -->
<section class="secao-inscricao-processo py-5">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Processo de Inscrição</h2>
        
        <div class="row g-4">
            <div class="col-lg-8 mx-auto">
                <div class="card-info-inscricao mb-4">
                    <h4><i class="fas fa-check-circle"></i> Como se Inscrever?</h4>
                    <p>As inscrições para a Expo Digital 2025 são realizadas <strong>exclusivamente no Portal do Governo Provincial de Benguela</strong>.</p>
                    
                    <ol class="lista-passos">
                        <li>Aceda ao <a href="https://portal.benguela.gov.ao" target="_blank" class="link-destaque">Portal do Governo Provincial</a></li>
                        <li>Localize a secção "Expo Digital 2025"</li>
                        <li>Preencha o formulário de inscrição com seus dados</li>
                        <li>Selecione o dia ou dias que deseja participar</li>
                        <li>Confirme sua inscrição</li>
                        <li>Receba confirmação por email</li>
                    </ol>
                </div>

                <div class="card-info-inscricao">
                    <h4><i class="fas fa-calendar-alt"></i> Período de Inscrições</h4>
                    <p><strong>Abertura:</strong> 01 de Novembro de 2025</p>
                    <p><strong>Encerramento:</strong> 15 de Dezembro de 2025</p>
                    <p><strong>Vagas:</strong> Limitadas (inscrição por ordem de chegada)</p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="https://portal.benguela.gov.ao" target="_blank" class="btn btn-primary btn-lg">Inscrever-se Agora</a>
        </div>
    </div>
</section>

<!-- Normas para Expositores -->
<section class="secao-normas-expositores py-5 bg-light">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Normas para Expositores</h2>
        
        <div class="row g-4">
            <!-- Requisitos Obrigatórios -->
            <div class="col-lg-6">
                <div class="card-norma">
                    <div class="norma-icone obrigatorio">
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Requisitos Obrigatórios</h4>
                    <ul class="lista-normas">
                        <li><i class="fas fa-check"></i> Apresentar soluções digitais ou serviços modernizados</li>
                        <li><i class="fas fa-check"></i> Alinhar-se com o tema "Tecnologia ao Serviço do Cidadão"</li>
                        <li><i class="fas fa-check"></i> Ter um técnico presente durante TODO o período da exposição</li>
                        <li><i class="fas fa-check"></i> Cumprir regulamento de saúde e segurança</li>
                        <li><i class="fas fa-check"></i> Respeitar horários e protocolos do evento</li>
                    </ul>
                </div>
            </div>

            <!-- Proibições -->
            <div class="col-lg-6">
                <div class="card-norma">
                    <div class="norma-icone proibido">
                        <i class="fas fa-ban"></i>
                    </div>
                    <h4>Proibições Estritas</h4>
                    <ul class="lista-normas">
                        <li><i class="fas fa-times"></i> É proibido apresentar conteúdos não relacionados à inovação</li>
                        <li><i class="fas fa-times"></i> Não são permitidas atividades comerciais não autorizadas</li>
                        <li><i class="fas fa-times"></i> Proibido conteúdo político ou religioso</li>
                        <li><i class="fas fa-times"></i> Não é permitido danificar a infraestrutura do evento</li>
                        <li><i class="fas fa-times"></i> Proibido distribuir materiais sem autorização</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Logística e Infraestrutura -->
<section class="secao-logistica py-5">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Logística e Infraestrutura</h2>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card-infraestrutura">
                    <div class="infra-icone">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h5>Energia Elétrica</h5>
                    <p>Fornecimento de energia 220V com tomadas de segurança em cada stand</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card-infraestrutura">
                    <div class="infra-icone">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h5>Internet de Alta Velocidade</h5>
                    <p>Conexão WiFi e cabo de ethernet de fibra óptica disponível</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card-infraestrutura">
                    <div class="infra-icone">
                        <i class="fas fa-chair"></i>
                    </div>
                    <h5>Mobiliário</h5>
                    <p>Mesas, cadeiras, suportes e vitrines conforme necessário</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card-infraestrutura">
                    <div class="infra-icone">
                        <i class="fas fa-qrcode"></i>
                    </div>
                    <h5>Códigos QR</h5>
                    <p>QR Codes para fichas, programas e materiais digitais</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-lg-6">
                <div class="card-info-logistica">
                    <h4><i class="fas fa-info-circle"></i> Informações Adicionais</h4>
                    <ul>
                        <li>Estacionamento gratuito para expositores</li>
                        <li>Catering disponível (mediante contato prévio)</li>
                        <li>Segurança 24h durante e após o evento</li>
                        <li>Cobertura mediática e fotografia profissional</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-info-logistica">
                    <h4><i class="fas fa-headset"></i> Suporte Técnico</h4>
                    <ul>
                        <li>Equipa de suporte técnico disponível 24/7</li>
                        <li>Troubleshooting de internet e energia</li>
                        <li>Assistência na montagem do stand</li>
                        <li>Contacto: +244 272 XXX XXX</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Documentação Necessária -->
<section class="secao-documentacao py-5 bg-light">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Documentação Necessária</h2>
        
        <div class="row g-4">
            <div class="col-lg-8 mx-auto">
                <div class="card-documentacao">
                    <h4><i class="fas fa-file-alt"></i> Documentos Obrigatórios</h4>
                    <p>Todos os expositores devem fornecer os seguintes documentos no momento da inscrição:</p>
                    
                    <div class="checklist-docs">
                        <div class="doc-item">
                            <input type="checkbox" disabled>
                            <label>Documento de Identidade (BI/Passaporte) do responsável</label>
                        </div>
                        <div class="doc-item">
                            <input type="checkbox" disabled>
                            <label>NIF (Número de Identificação Fiscal)</label>
                        </div>
                        <div class="doc-item">
                            <input type="checkbox" disabled>
                            <label>Certificado de Regularidade (se pessoa coletiva)</label>
                        </div>
                        <div class="doc-item">
                            <input type="checkbox" disabled>
                            <label>Descrição detalhada do produto/serviço a expor</label>
                        </div>
                        <div class="doc-item">
                            <input type="checkbox" disabled>
                            <label>Carta de apresentação e conformidade</label>
                        </div>
                        <div class="doc-item">
                            <input type="checkbox" disabled>
                            <label>Autorizações necessárias (se aplicável)</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Perguntas Frequentes -->
<section class="secao-faq py-5">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Perguntas Frequentes</h2>
        
        <div class="row g-4">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="accordionFAQ">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Quanto custa a inscrição?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                A inscrição para visitantes é <strong>gratuita</strong>. Para expositores, existe uma taxa que varia conforme o tipo de expositor e tamanho do stand. Consulte o portal para detalhes.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Posso alterar minha inscrição após submissão?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Sim, as inscrições podem ser alteradas até <strong>5 dias antes do evento</strong>. Contacte conosco através do portal ou por email.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                O evento será transmitido online?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Sim! Haverá livestream de todas as palestras principais. Participantes remotos receberão link de acesso por email.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Há limite de visitantes por dia?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Não, não há limite para visitantes. Porém, para garantir melhor organização, solicitamos inscrição prévia.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Como entro em contacto com a organização?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Pode contactar através de: Email: <strong>contacto@expodigital.ao</strong> | Telefone: <strong>+244 272 XXX XXX</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
