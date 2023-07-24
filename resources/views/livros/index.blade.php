@extends('layout')
@section('title', 'Livros')
@section('content')
<div class="container px-5 pt-5">
    <div class="row mb-2">
        <div class="col">
            <a class="btn btn-primary" href="{{route('livros.create')}}" role="button">Cadastrar Novo</a>    
            <a href="{{route('welcome')}}" class="btn btn-secondary">Voltar</a>     
        </div>
    </div>
    <div class="row gx-5 align-items-center">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>ISBN</th>
                        <th>Gênero</th>
                        <th>Ano de Publicação</th>
                        <th>Editora ID</th>
                        <th>Autor ID</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($livros as $livro)
                    <tr>
                        <td>{{ $livro->id }}</td>
                        <td>{{ $livro->titulo }}</td>
                        <td>{{ $livro->isbn }}</td>
                        <td>{{ $livro->genero }}</td>
                        <td>{{ $livro->ano_publicacao }}</td>
                        <td><a href="{{route('editoras.show',$livro->editora_id)}}">{{ $livro->editora_id }}</a></td>
                        <td><a href="{{route('autores.show',$livro->autor_id)}}">{{ $livro->autor_id }}</a></td>
                        <td class="d-flex justify-content-end">
                            <a href="{{route('livros.show', $livro->id)}}" class="btn btn-outline-primary me-2">Mostrar</a>
                            <a href="{{route('livros.edit', $livro->id)}}" class="btn btn-outline-primary me-2">Atualizar</a>
                            <form action="{{route('livros.destroy',$livro->id)}}" method="post" class="d-inline-block">
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
