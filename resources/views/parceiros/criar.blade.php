@extends('layout.app')

@section('titulo', 'Criar Novo Parceiro')

@section('conteudo')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="mb-4">Novo Parceiro</h2>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('parceiros.armazenar') }}" method="POST" enctype="multipart/form-data" class="card p-4">
                @csrf

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ old('nome') }}" required>
                    @error('nome') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control @error('descricao') is-invalid @enderror" id="descricao" name="descricao" rows="3">{{ old('descricao') }}</textarea>
                    @error('descricao') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="caminho_logo" class="form-label">Logo <span class="text-danger">*</span></label>
                    <input type="file" class="form-control @error('caminho_logo') is-invalid @enderror" id="caminho_logo" name="caminho_logo" accept="image/*" required>
                    <small class="text-muted">Aceita: JPEG, PNG, JPG, SVG (máx 2MB)</small>
                    @error('caminho_logo') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="url_site" class="form-label">URL do Site</label>
                    <input type="url" class="form-control @error('url_site') is-invalid @enderror" id="url_site" name="url_site" value="{{ old('url_site') }}" placeholder="https://www.exemplo.ao">
                    @error('url_site') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="ordem" class="form-label">Ordem de Exibição</label>
                            <input type="number" class="form-control @error('ordem') is-invalid @enderror" id="ordem" name="ordem" value="{{ old('ordem', 1) }}" min="0">
                            @error('ordem') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="ativo" name="ativo" value="1" checked>
                                <label class="form-check-label" for="ativo">Ativo</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Guardar Parceiro</button>
                    <a href="{{ route('parceiros.indice') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
