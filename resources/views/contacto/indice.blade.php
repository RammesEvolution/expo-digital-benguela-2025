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
                        <label class="form-label">Tipo de Utilizador</label>
                        <select name="tipo_utilizador" class="form-control">
                            <option value="visitante">Visitante</option>
                            <option value="expositor">Expositor</option>
                            <option value="organizador">Organizador</option>
                        </select>
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
            <div class="col-lg-6">
                <h3 class="titulo-subsecao mb-4">Contacte-nos Diretamente</h3>
                
                <div class="card-info-contacto mb-4">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h5>Email</h5>
                        <a href="mailto:contacto@expodigital.ao">contacto@expodigital.ao</a>
                    </div>
                </div>

                <div class="card-info-contacto mb-4">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h5>Telefone</h5>
                        <a href="tel:+244272000000">+244 272 XXX XXX</a>
                    </div>
                </div>

                <div class="card-info-contacto mb-4">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h5>Localização</h5>
                        <p>Benguela, Angola<br>Governo Provincial de Benguela</p>
                    </div>
                </div>

                <div class="card-info-contacto">
                    <i class="fas fa-clock"></i>
                    <div>
                        <h5>Horário de Atendimento</h5>
                        <p>Segunda a Sexta: 09:00 - 17:00<br>Sábado: 10:00 - 14:00</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mapa -->
        <div class="mapa-container mt-5">
            <h3 class="titulo-subsecao mb-4">Localização</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.1234567890!2d13.8344!3d-12.3745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0!2s0x0!5e0!3m2!1spt!2sao!4v1234567890" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>
@endsection
