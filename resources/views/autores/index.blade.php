@extends('layout')
@section('title', 'Autores')

@section('content')
<div class="container px-5 pt-5">
    <div class="row mb-2">
        <div class="col">
            <a class="btn btn-primary" href="{{route('autores.create')}}" role="button">Cadastrar Novo</a>    
            <a href="{{route('welcome')}}" class="btn btn-secondary">Voltar</a>     
        </div>
    </div>
    <div class="row gx-5 align-items-center">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>País</th>
                        <th>Ano de Nascimento</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($autores as $autor)
                    <tr>
                        <td>{{ $autor->id }}</td>
                        <td>{{ $autor->nome }}</td>
                        <td>{{ $autor->sexo }}</td>
                        <td>{{ $autor->email }}</td>
                        <td>{{ $autor->telefone }}</td>
                        <td>{{ $autor->pais }}</td>
                        <td>{{ $autor->ano_nascimento}}</td>
                        <td class="d-flex justify-content-end">
                            <a href="{{route('autores.show', $autor->id)}}" class="btn btn-outline-primary me-2">Mostrar</a>
                            <a href="{{route('autores.edit', $autor->id)}}" class="btn btn-outline-primary me-2">Atualizar</a>
                            <form action="{{route('autores.destroy', $autor->id)}}" method="post" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger">Apagar</button>
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
