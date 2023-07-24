@extends('layout')
@section('title', 'Editoras')

@section('content')
<div class="container px-5 pt-5">
    <div class="row mb-2">
        <div class="col">
            <a class="btn btn-primary" href="{{route('editoras.create')}}" role="button">Cadastrar Novo</a>    
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
                        <th>Site</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>País</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($editoras as $editora)
                    <tr>
                        <td>{{ $editora->id }}</td>
                        <td>{{ $editora->nome }}</td>
                        <td>{{ $editora->site }}</td>
                        <td>{{ $editora->email }}</td>
                        <td>{{ $editora->telefone }}</td>
                        <td class="d-flex justify-content-end">
                            <a href="{{route('editoras.show', $editora->id)}}" class="btn btn-outline-primary me-2">Mostrar</a>
                            <a href="{{route('editoras.edit', $editora->id)}}" class="btn btn-outline-primary me-2">Atualizar</a>
                            <form action="{{route('editoras.destroy', $editora->id)}}" method="post" class="d-inline-block">
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
