@extends('layouts.app')

@section('title', 'Editar Usuário')

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
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="{{ isset($usuario->cpf) ? $usuario->cpf : '' }}"
                required>
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
