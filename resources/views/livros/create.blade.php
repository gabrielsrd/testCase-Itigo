@extends('layout')

@section('content')
<div class="container px-5 pt-5">
    <div class="row">
        <div class="col">
            <form action="{{route('livros.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" name="titulo" placeholder="Título do livro">
                </div>
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" class="form-control" name="isbn" placeholder="ISBN do livro">
                </div>
                <div class="mb-3">
                    <label for="genero" class="form-label">Gênero</label>
                    <input type="text" class="form-control" name="genero" placeholder="Gênero do livro">
                </div>
                <div class="mb-3">
                    <label for="sinopse" class="form-label">Sinopse</label>
                    <textarea class="form-control" name="sinopse" rows="3" placeholder="Sinopse do livro"></textarea>
                </div>
                <div class="mb-3">
                    <label for="ano_publicacao" class="form-label">Ano de Publicação</label>
                    <input type="number" class="form-control" name="ano_publicacao" placeholder="Ano de Publicação">
                </div>
                <div class="mb-3">
                    <label for="editora_id" class="form-label">Editora</label>
                    <select name="editora_id" class="form-control">
                        @foreach ($editoras as $editora)
                            <option value="{{ $editora->id }}">{{ $editora->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="autor_id" class="form-label">Autor</label>
                    <select name="autor_id" class="form-control">
                        @foreach ($autores as $autor)
                            <option value="{{ $autor->id }}">{{ $autor->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="imagem_capa" class="form-label">URL da Imagem da Capa</label>
                    <input type="text" class="form-control" name="imagem_capa" placeholder="URL da Imagem da Capa">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{route('livros.index')}}" class="btn btn-secondary">Voltar</a>
            </form>
        </div>
    </div>
</div>
@endsection
