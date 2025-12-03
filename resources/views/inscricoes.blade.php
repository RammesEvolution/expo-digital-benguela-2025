@extends('layout.app')

@section('titulo', 'Inscrições e Normas - Expo Digital 2025')

@section('conteudo')
<section class="hero-section" style="background: linear-gradient(rgba(51, 51, 51, 0.5), rgba(51, 51, 51, 0.5)), url('/images/banner-principal.jpg') center / cover; background-attachment: fixed;">
    <div class="hero-overlay">
        <div class="hero-content">
            
            <h1 class="hero-titulo">Inscrições e Normas</h1>
            <p class="hero-descricao">Informações Essenciais para Expositores da Expo Digital 2025</p>
        </div>
    </div>
</section>

<section class="secao-inscricao-processo py-5">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Quem se pode Inscrever</h2>
        
        <div class="row g-4">
            <div class="col-lg-8 mx-auto">
                <div class="card-info-inscricao mb-4">
                    <h4><i class="fas fa-bullhorn me-3 text-primary"></i>Tipo de Participante</h4>
                    <p>Convidamos <strong> empresas</strong> (pessoas coletivas) e <strong>indivíduos</strong> (pessoas singulares) interessados em apresentar um projeto inovador ou solução tecnológica que se alinhe com o tema da transformação digital e inclusão tecnológica.</p>
                </div>

                <div class="card-info-inscricao mb-4">
                    <h4><i class="fas fa-list-ol me-3 text-primary"></i>Como Se Inscrever</h4>
                    <p>As inscrições são realizadas <strong>exclusivamente através do formulário oficial</strong> disponibilizado nesta plataforma, na secção seguinte. Após o envio, a sua candidatura será avaliada pela Organização, que entrará em contacto para confirmar a participação.</p>
                </div>
                
                <div class="card-info-inscricao mb-4">
                    <h4><i class="fas fa-file-contract me-3 text-primary"></i>Documentos e Dados Obrigatórios</h4>
                    <p>Será necessário fornecer os seguintes dados e manifestação de interesse:</p>
                    <ul>
                        <li><strong>Identificação Fiscal ou Pessoal</strong> (NIF ou B.I./Passaporte).</li>
                        <li><strong>Dados de Contacto</strong> (Email e Telefone).</li>
                        <li><strong>Manifestação de Interesse Detalhada</strong> (Motivação para participar).</li>
                        <li><strong>Descrição do Projeto/Produto</strong> a ser apresentado no evento.</li>
                    </ul>
                </div>
                
                <div class="text-center mt-5">
                    <a href="#formulario-expositor" class="btn-principal btn-lg">Preencher Formulário de Inscrição</a>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="secao-faq py-5 bg-light">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Perguntas Frequentes</h2>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="accordionFAQ">
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Quem pode ser um expositor?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Qualquer empresa ou indivíduo (pessoa singular) que possua um projeto inovador ou tecnológico relevante para a transformação digital e que manifeste interesse em apresentá-lo.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Há custos para a inscrição ou exposição?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Por favor, contacte a organização após a submissão do formulário para detalhes específicos sobre patrocínios e custos associados à ocupação de espaço de exposição. A inscrição de interesse é gratuita.
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
                                Pode contactar através de: Email: <strong>geral@benguela.gov.ao</strong> | Telefone: <strong>+244 973 205 799</strong>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section id="formulario-expositor" class="secao-formulario py-5">
    <div class="container">
        <h2 class="titulo-secao text-center mb-5">Formulário de Candidatura a Expositor</h2>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                
                @if(session('sucesso'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('sucesso') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <form action="{{ route('inscricoes.expositor.armazenar') }}" method="POST" class="formulario-contacto p-4 border rounded shadow-sm">
                    @csrf
                    
                    <h5 class="mb-3 text-primary">Informações do Candidato</h5>

                    <div class="mb-3">
                        <label class="form-label">Nome Completo / Nome da Empresa</label>
                        <input type="text" name="nome_completo" class="form-control @error('nome_completo') is-invalid @enderror" value="{{ old('nome_completo') }}" required>
                        @error('nome_completo')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">NIF / B.I. (Documento de Identificação)</label>
                            <input type="text" name="nif_bi" class="form-control @error('nif_bi') is-invalid @enderror" value="{{ old('nif_bi') }}" required>
                            @error('nif_bi')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tipo de Entidade</label>
                            <select name="tipo_entidade" class="form-select @error('tipo_entidade') is-invalid @enderror" required>
                                <option value="">Selecione o tipo</option>
                                <option value="singular" {{ old('tipo_entidade') === 'singular' ? 'selected' : '' }}>Pessoa Singular (Indivíduo)</option>
                                <option value="coletiva" {{ old('tipo_entidade') === 'coletiva' ? 'selected' : '' }}>Pessoa Coletiva (Empresa)</option>
                            </select>
                            @error('tipo_entidade')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                            @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Telefone (Opcional)</label>
                            <input type="tel" name="telefone" class="form-control @error('telefone') is-invalid @enderror" value="{{ old('telefone') }}">
                            @error('telefone')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    
                    <h5 class="mb-3 mt-4 text-primary">Detalhes da Proposta</h5>

                    <div class="mb-3">
                        <label class="form-label">Manifestação de Interesse (Por que deseja expor?)</label>
                        <textarea name="manifestacao_interesse" rows="4" class="form-control @error('manifestacao_interesse') is-invalid @enderror" required>{{ old('manifestacao_interesse') }}</textarea>
                        @error('manifestacao_interesse')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Projecto ou Solução Tecnológica a Apresentar</label>
                        <textarea name="projeto_apresentar" rows="4" class="form-control @error('projeto_apresentar') is-invalid @enderror" required>{{ old('projeto_apresentar') }}</textarea>
                        @error('projeto_apresentar')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <button type="submit" class="btn-principal btn-lg w-100">
                        <i class="fas fa-paper-plane"></i> Enviar Candidatura
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection