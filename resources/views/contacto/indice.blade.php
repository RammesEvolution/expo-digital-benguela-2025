@extends('layout.app')

@section('titulo', 'Contacto - Expo Digital 2025')

@section('conteudo')
<section class="secao-contacto-pagina py-5">
    <div class="container">
        <h1 class="titulo-pagina mb-5">Entre em Contacto</h1>

        <div class="row g-5">
            <!-- Formulário -->
            <div class="col-lg-6">
                <form action="{{ route('contacto.armazenar') }}" method="POST" class="formulario-contacto">
                    @csrf
                    
                    <div class="mb-3">
                        <label class="form-label">Nome Completo</label>
                        <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" required>
                        @error('nome')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required>
                        @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="tel" name="telefone" class="form-control">
                    </div>

                  

                    <div class="mb-3">
                        <label class="form-label">Assunto</label>
                        <input type="text" name="assunto" class="form-control @error('assunto') is-invalid @enderror" required>
                        @error('assunto')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mensagem</label>
                        <textarea name="mensagem" rows="5" class="form-control @error('mensagem') is-invalid @enderror" required></textarea>
                        @error('mensagem')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <button type="submit" class="btn-principal w-100">Enviar Mensagem</button>
                </form>

                @if(session('sucesso'))
                    <div class="alert alert-success mt-3">{{ session('sucesso') }}</div>
                @endif
            </div>

            <!-- Informações de Contacto -->
            <div class="col-lg-6 d-flex flex-column justify-content-start">

                <div class="card-simples-contacto mb-4 p-4 border rounded">
                    <h5 class="titulo-simples-contacto mb-2">Endereço</h5>
                    <p class="mb-0">Rua de Timor</p>
                </div>

                <div class="card-simples-contacto p-4 border rounded">
                    <h5 class="titulo-simples-contacto mb-3">Info:</h5>
                    
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="text-muted">Tel:</span>
                        <a href="tel:+244973205799">+244 973 205 799</a>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted">Email:</span>
                        <a href="mailto:geral@benguela.gov.ao">geral@benguela.gov.ao</a>
                    </div>
                </div>
                
                <div class="d-none d-lg-block" style="flex-grow: 1;"></div> 
            </div>
        </div>

        <!-- Mapa -->
        <div class="mapa-container mt-5">
            <h3 class="titulo-subsecao mb-4">Localização</h3>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31150.71247033301!2d13.394400230133051!3d-12.592856515817207!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1bafd198c2bfffff%3A0xd48e46772f0c3196!2sGoverno%20Provincial%20de%20Benguela!5e0!3m2!1spt-PT!2sao!4v1764698080207!5m2!1spt-PT!2sao" 
                width="100%"   height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>
@endsection
