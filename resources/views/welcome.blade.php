@extends('layouts.app')

@section('title', 'Bem vindo ao CRUD!')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Gil</td>
                <td>30</td>
            </tr>
            <tr>
                <td>Juberto</td>
                <td>21</td>
            </tr>
        </tbody>
    </table>
@endsection
