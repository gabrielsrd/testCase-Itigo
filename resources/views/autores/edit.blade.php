@extends('layout')

@section('content')
<div class="container px-5 pt-5">
    <div class="row">
        <div class="col">
            <form action="{{ route('autores.update', $autor->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome do Autor" value="{{ $autor->nome }}">
                </div>
                <div class="mb-3">
                    <label for="sexo" class="form-label">Sexo</label>
                    <input type="text" class="form-control" name="sexo" placeholder="Sexo do Autor" value="{{ $autor->sexo }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email do Autor" value="{{ $autor->email }}">
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" name="telefone" placeholder="Telefone do Autor" value="{{ $autor->telefone }}">
                </div>
                <div class="mb-3">
                    <label for="pais" class="form-label">País</label>
                    <input type="text" class="form-control" name="pais" placeholder="País do Autor" value="{{ $autor->pais }}">
                </div>
                <div class="mb-3">
                    <label for="ano_nascimento" class="form-label">Ano de Nascimento</label>
                    <input type="number" class="form-control" name="ano_nascimento" placeholder="Ano de Nascimento do Autor" value="{{ $autor->ano_nascimento }}">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('autores.index') }}" class="btn btn-secondary">Voltar</a>
            </form>
        </div>
    </div>
</div>
@endsection
