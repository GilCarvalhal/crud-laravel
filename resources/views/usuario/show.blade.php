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

        <div>
            <label for="cep"><strong>Cep:</strong></label>
            <span id="cep">{{ $usuario->endereco->cep ?? 'Não informado' }}</span>
        </div>
        <div>
            <label for="endereco"><strong>Endereço:</strong></label>
            <span id="endereco">{{ $usuario->endereco->endereco ?? 'Não informado' }}</span>
        </div>
        <div>
            <label for="bairro"><strong>Bairro:</strong></label>
            <span id="bairro">{{ $usuario->endereco->bairro ?? 'Não informado' }}</span>
        </div>
        <div>
            <label for="cidade"><strong>Cidade:</strong></label>
            <span id="cidade">{{ $usuario->endereco->cidade ?? 'Não informado' }}</span>
        </div>
        <div>
            <label for="estado"><strong>Estado:</strong></label>
            <span id="estado">{{ $usuario->endereco->estado ?? 'Não informado' }}</span>
        </div>
        <div>
            <label for="numero"><strong>Número:</strong></label>
            <span id="numero">{{ $usuario->endereco->numero ?? 'Não informado' }}</span>
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
