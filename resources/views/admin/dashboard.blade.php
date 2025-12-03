@extends('layout.app')

@section('titulo', 'Dashboard - Administração')

@section('conteudo')

<section class="secao-dashboard py-5">
    <div class="container">
        <h1 class="titulo-pagina mb-4">Painel de Administração</h1>
        
        <div class="alert alert-success" role="alert">
            <i class="fas fa-user-shield"></i> Bem-vindo(a), Administrador!
        </div>

        <hr>

        <h2 class="titulo-subsecao mb-3">🛠️ Ferramentas de Gestão</h2>
        
        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6">
                <div class="card card-admin shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title text-color-primary"><i class="fas fa-images"></i> Galeria</h5>
                        <p class="card-text">Gerir e adicionar novas imagens à galeria de eventos.</p>
                        <a href="{{ route('galeria.indice') }}" class="btn text-white bg-color-primary">Gerir Galeria</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-admin shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title text-color-primary"><i class="fas fa-user-check"></i> Inscrições Expositores</h5>
                        <p class="card-text">Gerir inscrições para exposição.</p>
                        <a href="{{ route('admin.expositores.indice') }}" class="btn text-white bg-color-primary">Ver Candidaturas</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-admin shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title text-color-primary"><i class="fas fa-calendar-alt"></i> Eventos</h5>
                        <p class="card-text">Criar, editar e eliminar informações sobre os eventos.</p>
                        <a href="{{ route('eventos.indice') }}" class="btn text-white bg-color-primary">Gerir Eventos</a>
                    </div>
                </div>
            </div>
            
            
            <div class="col-lg-4 col-md-6">
                <div class="card card-admin shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title text-color-primary"><i class="fas fa-inbox"></i> Mensagens de Contacto</h5>
                        <p class="card-text">Visualizar e gerir mensagens enviadas pelo formulário de contacto.</p>
                        <a href="{{ route('contacto.mensagens') }}" class="btn text-white bg-color-primary">Ver Mensagens</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card card-admin shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title text-color-primary"><i class="fas fa-users-cog"></i> Gestão de Utilizadores</h5>
                        <p class="card-text">Gerir contas de utilizadores e permissões de acesso.</p>
                        <a href="{{route('utilizadores.criar')}}" class="btn text-white bg-color-primary ">Novo utilizador</a>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-5">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-lg">
                        <i class="fas fa-sign-out-alt"></i> Sair do Painel
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection

@push('scripts')
{{-- Pode adicionar aqui scripts específicos para o painel, se necessário --}}
@endpush