@extends('layout.app')

@section('titulo', 'Criar Novo Utilizador')

@section('conteudo')
<section class="secao-admin py-5">
    <div class="container">
        <h1 class="titulo-pagina mb-4">Gestão de Utilizadores</h1>
        
        <div class="card shadow-lg p-4">
            <h2 class="titulo-secao text-center mb-4">Criar Novo Administrador/Utilizador</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('utilizadores.armazenar') }}">
                @csrf

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" 
                           class="form-control" 
                           id="nome" 
                           name="nome" 
                           value="{{ old('nome') }}" 
                           required 
                           autofocus>
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Endereço de Email</label>
                    <input type="email" 
                           class="form-control" 
                           id="email" 
                           name="email" 
                           value="{{ old('email') }}" 
                           required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Palavra-passe</label>
                    <input type="password" 
                           class="form-control" 
                           id="password" 
                           name="password" 
                           required>
                </div>
                
                <div class="mb-4">
                    <label for="password_confirmation" class="form-label">Confirmar Palavra-passe</label>
                    <input type="password" 
                           class="form-control" 
                           id="password_confirmation" 
                           name="password_confirmation" 
                           required>
                </div>
                
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success btn-lg">
                        <i class="fas fa-user-plus"></i> Criar Utilizador
                    </button>
                </div>
            </form>
            
            <div class="text-center mt-3">
                <a href="{{ route('dashboard.indice') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Voltar</a>
            </div>
        </div>
    </div>
</section>

@endsection