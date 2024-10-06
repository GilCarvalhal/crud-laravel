@extends('layouts.app')

@section('title', 'Bem vindo ao CRUD!')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>CPF</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Gil</td>
                <td>30</td>
                <td>12345678910</td>
            </tr>
            <tr>
                <td>Juberto</td>
                <td>21</td>
                <td>01987654321</td>
            </tr>
        </tbody>
    </table>
@endsection
