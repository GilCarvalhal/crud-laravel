@extends('layouts.app')

@section('title', 'Bem vindo ao CRUD!')

@section('content')
    <form action="#" method="POST" class="form-cadastro">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div>
            <label for="idade">Idade:</label>
            <input type="text" id="idade" name="idade" required>
        </div>
        <div>
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>
        </div>
        <input type="submit" value="Cadastrar">
    </form>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>CPF</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->idade }}</td>
                    <td>{{ $usuario->cpf }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
