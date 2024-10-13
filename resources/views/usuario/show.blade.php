@extends('layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
    <div class="detalhes-usuario">
        <h1>Detalhes do Usuário</h1>
        <div>
            <label for="nome"><strong>Nome:</strong></label>
            <span id="nome">{{ $usuario->nome ?? 'Não informado' }}</span>
        </div>
        <div>
            <label for="idade"><strong>Idade:</strong></label>
            <span id="idade">{{ $usuario->idade ?? 'Não informado' }}</span>
        </div>
        <div>
            <label for="contato"><strong>Contato:</strong></label>
            <span id="contato">{{ $usuario->contato ?? 'Não informado' }}</span>
        </div>
        <button type="button" class="btn-voltar" onclick="retornar()">Voltar</button>
    </div>
@endsection

@section('scripts')
    <script>
        function retornar() {
            window.location.href = '/';
        }
    </script>
@endsection
