@extends('layout.app')

@section('titulo', 'Criar Evento - Expo Digital 2025')

@section('conteudo')
<section class="secao-eventos py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="titulo-pagina mb-4">Criar Novo Evento</h1>

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Erros encontrados:</strong>
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <form action="{{ route('eventos.armazenar') }}" method="POST" class="formulario-contacto">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Título do Evento</label>
                        <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" 
                               value="{{ old('titulo') }}" required>
                        @error('titulo')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descrição</label>
                        <textarea name="descricao" rows="4" class="form-control @error('descricao') is-invalid @enderror" 
                                  required>{{ old('descricao') }}</textarea>
                        @error('descricao')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Data de Início</label>
                            <input type="datetime-local" name="data_inicio" class="form-control @error('data_inicio') is-invalid @enderror" 
                                   value="{{ old('data_inicio') }}" required>
                            @error('data_inicio')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Data de Fim</label>
                            <input type="datetime-local" name="data_fim" class="form-control @error('data_fim') is-invalid @enderror" 
                                   value="{{ old('data_fim') }}" required>
                            @error('data_fim')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Localização</label>
                            <input type="text" name="localizacao" class="form-control @error('localizacao') is-invalid @enderror" 
                                   value="{{ old('localizacao') }}" required>
                            @error('localizacao')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Capacidade</label>
                            <input type="number" name="capacidade" class="form-control @error('capacidade') is-invalid @enderror" 
                                   value="{{ old('capacidade') }}" min="1" required>
                            @error('capacidade')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Categoria</label>
                            <input type="text" name="categoria" class="form-control @error('categoria') is-invalid @enderror" 
                                   value="{{ old('categoria') }}" placeholder="Ex: Gala, Tecnologia" required>
                            @error('categoria')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Estado</label>
                            <select name="estado" class="form-control @error('estado') is-invalid @enderror" required>
                                <option value="">Selecione um estado</option>
                                <option value="planejado" {{ old('estado') === 'planejado' ? 'selected' : '' }}>Planejado</option>
                                <option value="confirmado" {{ old('estado') === 'confirmado' ? 'selected' : '' }}>Confirmado</option>
                                <option value="concluído" {{ old('estado') === 'concluído' ? 'selected' : '' }}>Concluído</option>
                                <option value="cancelado" {{ old('estado') === 'cancelado' ? 'selected' : '' }}>Cancelado</option>
                            </select>
                            @error('estado')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn-principal flex-grow-1">
                            <i class="fas fa-save"></i> Criar Evento
                        </button>
                        <a href="{{ route('eventos.indice') }}" class="btn-principal flex-grow-1" style="background-color: #6c757d; border-color: #6c757d;">
                            <i class="fas fa-times"></i> Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
