@extends('layouts.app')

@section('title', 'Editar usuário')

@section('content')
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4>Editar Usuário</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('usuario.update', $usuario->id) }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" id="nome" name="nome" value="{{ $usuario->nome ?? '' }}"
                                class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="idade" class="form-label">Idade:</label>
                            <input type="text" id="idade" name="idade" value="{{ $usuario->idade ?? '' }}"
                                class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="contato" class="form-label">Contato:</label>
                            <input type="text" id="contato" name="contato" value="{{ $usuario->contato ?? '' }}"
                                class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cep" class="form-label">CEP:</label>
                            <input type="text" id="cep" name="cep" value="{{ $usuario->endereco->cep ?? '' }}"
                                class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="endereco" class="form-label">Endereço:</label>
                            <input type="text" id="endereco" name="endereco"
                                value="{{ $usuario->endereco->endereco ?? '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="bairro" class="form-label">Bairro:</label>
                            <input type="text" id="bairro" name="bairro"
                                value="{{ $usuario->endereco->bairro ?? '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cidade" class="form-label">Cidade:</label>
                            <input type="text" id="cidade" name="cidade"
                                value="{{ $usuario->endereco->cidade ?? '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="estado" class="form-label">Estado:</label>
                            <input type="text" id="estado" name="estado"
                                value="{{ $usuario->endereco->estado ?? '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="numero" class="form-label">Número:</label>
                            <input type="text" id="numero" name="numero"
                                value="{{ $usuario->endereco->numero ?? '' }}" class="form-control">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                        <button type="button" class="btn btn-secondary" onclick="retornar()">Voltar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function retornar() {
            window.location.href = '/';
        }
    </script>
@endsection
