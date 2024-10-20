@extends('layouts.app')

@section('title', 'Editar usuário')

@section('content')
    <form action="{{ route('usuario.update', $usuario->id) }}" method="POST" class="form-cadastro">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ isset($usuario->nome) ? $usuario->nome : '' }}"
                required>
        </div>
        <div>
            <label for="idade">Idade:</label>
            <input type="text" id="idade" name="idade" value="{{ isset($usuario->idade) ? $usuario->idade : '' }}"
                required>
        </div>
        <div>
            <label for="contato">Contato:</label>
            <input type="text" id="contato" name="contato"
                value="{{ isset($usuario->contato) ? $usuario->contato : '' }}" required>
        </div>

        <div>
            <label for="cep">Cep:</label>
            <input type="text" id="cep" name="cep" value="{{ $usuario->endereco->cep }}">
        </div>
        <div>
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" value="{{ $usuario->endereco->endereco }}">
        </div>
        <div>
            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" value="{{ $usuario->endereco->bairro }}">
        </div>
        <div>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" value="{{ $usuario->endereco->cidade }}">
        </div>
        <div>
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" value="{{ $usuario->endereco->estado }}">
        </div>
        <div>
            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero" value="{{ $usuario->endereco->numero }}">
        </div>
        <input type="submit" value="Atualizar">
        <button type="button" class="btn-voltar" onclick="retornar()">Voltar</button>
    </form>
@endsection

@section('scripts')
    <script>
        function retornar() {
            window.location.href = '/';
        }
    </script>
@endsection
