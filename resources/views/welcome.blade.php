@extends('layouts.app')

@section('title', 'Bem vindo ao CRUD!')

@section('content')
    <form action="{{ route('usuario.store') }}" method="POST" class="form-cadastro">
        @csrf
        <div>
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div>
            <label for="idade">Idade:</label>
            <input type="text" id="idade" name="idade" required>
        </div>
        <div>
            <label for="contato">Contato:</label>
            <input type="text" id="contato" name="contato" required>
        </div>
        <div>
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>
        </div>
        <div>
            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" required>
        </div>
        <div>
            <label for="cep">Cep:</label>
            <input type="text" id="cep" name="cep" required>
        </div>
        <div>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" required>
        </div>
        <div>
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" required>
        </div>
        <div>
            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero" required>
        </div>
        <input type="submit" value="Cadastrar">
    </form>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Contato</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cep</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Número</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->idade }}</td>
                    <td>{{ $usuario->contato }}</td>
                    <td>{{ $usuario->cep }}</td>
                    <td>{{ $usuario->endereco }}</td>
                    <td>{{ $usuario->bairro }}</td>
                    <td>{{ $usuario->cidade }}</td>
                    <td>{{ $usuario->estado }}</td>
                    <td>{{ $usuario->numero }}</td>
                    <td><a href="{{ route('usuario.show', ['id' => $usuario->id]) }}" class="btn-show">Detalhes</a>
                        <a href="{{ route('usuario.edit', ['id' => $usuario->id]) }}" class="btn-editar">Editar</a>
                        <form action="{{ route('usuario.delete', ['id' => $usuario->id]) }}" method="POST"
                            style="display: inline" class="btn-excluir">
                            @csrf
                            <button type="submit"
                                onclick="return confirm('Tem certeza que deseja excluir este usuário?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
