@extends('layout.app')

@section('titulo', 'Editar Imagem - Expo Digital 2025')

@section('conteudo')
<section class="secao-galeria py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="titulo-pagina mb-4">Editar Imagem</h1>

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

                <form action="{{ route('galeria.atualizar', $galeria->id) }}" method="POST" enctype="multipart/form-data" class="formulario-contacto">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Evento</label>
                        <select name="evento_id" class="form-control @error('evento_id') is-invalid @enderror" required>
                            @foreach($eventos as $evento)
                                <option value="{{ $evento->id }}" {{ old('evento_id', $galeria->evento_id) == $evento->id ? 'selected' : '' }}>
                                    {{ $evento->titulo }}
                                </option>
                            @endforeach
                        </select>
                        @error('evento_id')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Título da Imagem</label>
                        <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" 
                               value="{{ old('titulo', $galeria->titulo) }}" required>
                        @error('titulo')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descrição</label>
                        <textarea name="descricao" rows="3" class="form-control @error('descricao') is-invalid @enderror">{{ old('descricao', $galeria->descricao) }}</textarea>
                        @error('descricao')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label class="form-label">Imagem Atual</label>
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $galeria->caminho_imagem) }}" alt="{{ $galeria->titulo }}" 
                                     style="max-width: 200px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            </div>
                            <label class="form-label">Alterar Imagem (Opcional)</label>
                            <input type="file" name="caminho_imagem" class="form-control @error('caminho_imagem') is-invalid @enderror" 
                                   accept="image/*">
                            <small class="text-muted">Deixe vazio para manter a imagem atual</small>
                            @error('caminho_imagem')<span class="invalid-feedback d-block">{{ $message }}</span>@enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Ordem</label>
                            <input type="number" name="ordem" class="form-control @error('ordem') is-invalid @enderror" 
                                   value="{{ old('ordem', $galeria->ordem) }}" min="0">
                            @error('ordem')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn-principal flex-grow-1">
                            <i class="fas fa-save"></i> Atualizar Imagem
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
