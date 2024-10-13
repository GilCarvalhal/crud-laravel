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
        <input type="submit" value="Cadastrar">
    </form>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Contato</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->idade }}</td>
                    <td>{{ $usuario->contato }}</td>
                    <td><a href="{{ route('usuario.edit', ['id' => $usuario->id]) }}" class="btn-editar">Editar</a>
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
