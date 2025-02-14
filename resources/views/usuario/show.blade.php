@extends('layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4>Detalhes do Usuário</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <strong>Nome:</strong>
                        <span class="form-control">{{ $usuario->nome ?? 'Não informado' }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Idade:</strong>
                        <span class="form-control">{{ $usuario->idade ?? 'Não informado' }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Contato:</strong>
                        <span class="form-control">{{ $usuario->contato ?? 'Não informado' }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>CEP:</strong>
                        <span class="form-control">{{ $usuario->endereco->cep ?? 'Não informado' }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Endereço:</strong>
                        <span class="form-control">{{ $usuario->endereco->endereco ?? 'Não informado' }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Bairro:</strong>
                        <span class="form-control">{{ $usuario->endereco->bairro ?? 'Não informado' }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Cidade:</strong>
                        <span class="form-control">{{ $usuario->endereco->cidade ?? 'Não informado' }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Estado:</strong>
                        <span class="form-control">{{ $usuario->endereco->estado ?? 'Não informado' }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Número:</strong>
                        <span class="form-control">{{ $usuario->endereco->numero ?? 'Não informado' }}</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" onclick="retornar()">Voltar</button>
                </div>
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
