@extends('layout')

@section('content')
<div class="container px-5 pt-5">
    <div class="row">
        <div class="col">
            <form action="{{ route('livros.update', $livro->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título do livro" value="{{ $livro->titulo }}">
                </div>
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN do livro" value="{{ $livro->isbn }}">
                </div>
                <div class="mb-3">
                    <label for="genero" class="form-label">Gênero</label>
                    <input type="text" class="form-control" id="genero" name="genero" placeholder="Gênero do livro" value="{{ $livro->genero }}">
                </div>
                <div class="mb-3">
                    <label for="sinopse" class="form-label">Sinopse</label>
                    <textarea class="form-control" id="sinopse" name="sinopse" rows="3" placeholder="Sinopse do livro">{{ $livro->sinopse }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="ano_publicacao" class="form-label">Ano de Publicação</label>
                    <input type="number" class="form-control" id="ano_publicacao" name="ano_publicacao" placeholder="Ano de Publicação" value="{{ $livro->ano_publicacao }}">
                </div>
                <div class="mb-3">
                    <label for="editora_id" class="form-label">ID da Editora</label>
                    <input type="number" class="form-control" id="editora_id" name="editora_id" placeholder="ID da Editora" value="{{ $livro->editora_id }}">
                </div>
                <div class="mb-3">
                    <label for="autor_id" class="form-label">ID do Autor</label>
                    <input type="number" class="form-control" id="autor_id" name="autor_id" placeholder="ID do Autor" value="{{ $livro->autor_id }}">
                </div>
                <div class="mb-3">
                    <label for="imagem_capa" class="form-label">URL da Imagem da Capa</label>
                    <input type="text" class="form-control" id="imagem_capa" name="imagem_capa" placeholder="URL da Imagem da Capa" value="{{ $livro->imagem_capa }}">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('livros.index') }}" class="btn btn-secondary">Voltar</a>
            </form>
        </div>
    </div>
</div>
@endsection
