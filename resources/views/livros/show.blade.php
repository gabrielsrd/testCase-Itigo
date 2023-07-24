@extends('layout')

@section('content')
<div class="container px-5 pt-5">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <p class="form-control-static">{{ $livro->titulo }}</p>
            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <p class="form-control-static">{{ $livro->isbn }}</p>
            </div>
            <div class="mb-3">
                <label for="genero" class="form-label">Gênero</label>
                <p class="form-control-static">{{ $livro->genero }}</p>
            </div>
            <div class="mb-3">
                <label for="sinopse" class="form-label">Sinopse</label>
                <p class="form-control-static">{{ $livro->sinopse }}</p>
            </div>
            <div class="mb-3">
                <label for="ano_publicacao" class="form-label">Ano de Publicação</label>
                <p class="form-control-static">{{ $livro->ano_publicacao }}</p>
            </div>
            <div class="mb-3">
                <label for="editora_id" class="form-label">ID da Editora</label>
                <p class="form-control-static">{{ $livro->editora_id }}</p>
            </div>
            <div class="mb-3">
                <label for="autor_id" class="form-label">ID do Autor</label>
                <p class="form-control-static">{{ $livro->autor_id }}</p>
            </div>
            <div class="mb-3">
                <label for="imagem_capa" class="form-label">URL da Imagem da Capa</label>
                <p class="form-control-static">{{ $livro->imagem_capa }}</p>
            </div>
            <a href="{{ route('livros.edit', $livro->id) }}" class="btn btn-outline-primary me-2">Editar</a>
            <a href="{{ route('livros.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>
@endsection
