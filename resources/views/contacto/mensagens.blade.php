@extends('layout.app')

@section('titulo', 'Gestão de Mensagens de Contacto')

@section('conteudo')
<section class="secao-mensagens py-5">
    <div class="container">
        <h1 class="titulo-pagina mb-4">Caixa de Entrada de Mensagens</h1>

        @if(session('sucesso'))
            <div class="alert alert-success"><i class="fas fa-check-circle"></i> {{ session('sucesso') }}</div>
        @endif
        @if(session('erro'))
            <div class="alert alert-danger"><i class="fas fa-times-circle"></i> {{ session('erro') }}</div>
        @endif

        @if($mensagens->isEmpty())
            <div class="alert alert-info text-center py-5">
                <i class="fas fa-inbox fa-3x mb-3"></i>
                <h4>Não há mensagens por responder.</h4>
                <p>O seu trabalho está em dia!</p>
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Assunto</th>
                            <th>Enviada em</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mensagens as $mensagem)
                        <tr>
                            <td>{{ $mensagem->nome }}</td>
                            <td><a href="mailto:{{ $mensagem->email }}">{{ $mensagem->email }}</a></td>
                            <td>{{ Str::limit($mensagem->assunto, 50) }}</td>
                            <td>{{ $mensagem->created_at->format('d/m/Y H:i') }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-info text-white" data-bs-toggle="modal" data-bs-target="#modalMensagem{{ $mensagem->id }}">
                                    <i class="fas fa-eye"></i> Ver
                                </button>
                                
                                <form action="{{ route('contacto.eliminar', $mensagem->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem a certeza que deseja eliminar esta mensagem?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i> Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $mensagens->links() }}
            </div>
        @endif
        
        <div class="mt-4 text-center">
            <a href="{{ route('dashboard.indice') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Voltar ao Painel</a>
        </div>
    </div>
</section>

{{-- Modals para Visualizar a Mensagem --}}
@foreach($mensagens as $mensagem)
<div class="modal fade" id="modalMensagem{{ $mensagem->id }}" tabindex="-1" aria-labelledby="modalMensagemLabel{{ $mensagem->id }}" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalMensagemLabel{{ $mensagem->id }}">Mensagem de: {{ $mensagem->nome }}</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Assunto:</strong> {{ $mensagem->assunto }}</p>
        <p><strong>Email:</strong> <a href="mailto:{{ $mensagem->email }}">{{ $mensagem->email }}</a></p>
        <hr>
        <p><strong>Conteúdo:</strong></p>
        <p style="white-space: pre-wrap;">{{ $mensagem->mensagem }}</p>
        <hr>
        <p class="text-muted small">Recebida em: {{ $mensagem->created_at->format('d/m/Y H:i:s') }}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection