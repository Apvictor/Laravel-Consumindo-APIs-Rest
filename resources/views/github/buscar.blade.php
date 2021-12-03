@extends('layout.base')


@section('conteudo')
    <h1>Lista de Repositorios do GitHub</h1> <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID:</th>
                <th scope="col">Nome:</th>
                <th scope="col">URL:</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($repositorios as $repositorio)
                <tr>
                    <th scope="row">{{ $repositorio['id'] }}</th>
                    <td>{{ $repositorio['name'] }}</td>
                    <td>{{ $repositorio['url'] }}</td>
                </tr>
            @empty
                <p class="text-warning">Não encontramos nenhum registro!</p>
            @endforelse
        </tbody>
    </table>
@endsection
