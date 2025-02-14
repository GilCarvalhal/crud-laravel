@extends('layouts.app')

@section('title', 'Bem-vindo ao CRUD!')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card p-4 shadow-sm">
                    <h4 class="text-center mb-3">Cadastro de Usuário</h4>
                    <form action="{{ route('usuario.store') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="nome" class="form-label">Nome Completo:</label>
                            <input type="text" id="nome" name="nome" class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="idade" class="form-label">Idade:</label>
                                <input type="text" id="idade" name="idade" class="form-control" required>
                            </div>
                            <div class="col-6 mb-2">
                                <label for="contato" class="form-label">Contato:</label>
                                <input type="text" id="contato" name="contato" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="cep" class="form-label">CEP:</label>
                            <input type="text" id="cep" name="cep" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label for="endereco" class="form-label">Endereço:</label>
                            <input type="text" id="endereco" name="endereco" class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="bairro" class="form-label">Bairro:</label>
                                <input type="text" id="bairro" name="bairro" class="form-control" required>
                            </div>
                            <div class="col-6 mb-2">
                                <label for="cidade" class="form-label">Cidade:</label>
                                <input type="text" id="cidade" name="cidade" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="estado" class="form-label">Estado:</label>
                                <input type="text" id="estado" name="estado" class="form-control" required>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="numero" class="form-label">Número:</label>
                                <input type="text" id="numero" name="numero" class="form-control" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <h5 class="text-center">Lista de Usuários</h5>
            <div class="table-responsive">
                <table class="table table-sm table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Contato</th>
                            <th>Cidade</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->nome }}</td>
                                <td>{{ $usuario->contato }}</td>
                                <td>{{ $usuario->cidade }}</td>
                                <td>
                                    <a href="{{ route('usuario.show', $usuario->id) }}" class="btn btn-info btn-sm">👁️</a>
                                    <a href="{{ route('usuario.edit', $usuario->id) }}"
                                        class="btn btn-warning btn-sm">✏️</a>
                                    <form action="{{ route('usuario.delete', ['id' => $usuario->id]) }}" method="POST"
                                        style="display:inline;"
                                        onsubmit="return confirm('Tem certeza que deseja excluir este usuário?')">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">🗑️</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
