@extends('layout.app')

@section('titulo', 'Adicionar Imagem à Galeria - Expo Digital 2025')

@section('conteudo')
<section class="secao-galeria py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="titulo-pagina mb-4">Adicionar Imagem à Galeria</h1>

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

                <form action="{{ route('galeria.armazenar') }}" method="POST" enctype="multipart/form-data" class="formulario-contacto">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Evento</label>
                        <select name="evento_id" class="form-control @error('evento_id') is-invalid @enderror" required>
                            <option value="">Selecione um evento</option>
                            @foreach($eventos as $evento)
                                <option value="{{ $evento->id }}" {{ old('evento_id') == $evento->id ? 'selected' : '' }}>
                                    {{ $evento->titulo }}
                                </option>
                            @endforeach
                        </select>
                        @error('evento_id')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Título da Imagem</label>
                        <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" 
                               value="{{ old('titulo') }}" required>
                        @error('titulo')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descrição</label>
                        <textarea name="descricao" rows="3" class="form-control @error('descricao') is-invalid @enderror">{{ old('descricao') }}</textarea>
                        @error('descricao')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label class="form-label">Imagem</label>
                            <input type="file" name="caminho_imagem" class="form-control @error('caminho_imagem') is-invalid @enderror" 
                                   accept="image/*" required>
                            <small class="text-muted">Formatos: JPG, PNG, GIF. Máximo 2MB</small>
                            @error('caminho_imagem')<span class="invalid-feedback d-block">{{ $message }}</span>@enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Ordem</label>
                            <input type="number" name="ordem" class="form-control @error('ordem') is-invalid @enderror" 
                                   value="{{ old('ordem', 0) }}" min="0">
                            @error('ordem')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn-principal flex-grow-1">
                            <i class="fas fa-save"></i> Adicionar Imagem
                        </button>
                        <a href="{{ route('galeria.indice') }}" class="btn-principal flex-grow-1" style="background-color: #6c757d; border-color: #6c757d;">
                            <i class="fas fa-times"></i> Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
