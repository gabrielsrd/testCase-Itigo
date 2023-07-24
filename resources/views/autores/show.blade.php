@extends('layout')

@section('content')
<div class="container px-5 pt-5">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <p class="form-control-static">{{ $autor->nome }}</p>
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo</label>
                <p class="form-control-static">{{ $autor->sexo }}</p>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <p class="form-control-static">{{ $autor->email }}</p>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <p class="form-control-static">{{ $autor->telefone }}</p>
            </div>
            <div class="mb-3">
                <label for="pais" class="form-label">País</label>
                <p class="form-control-static">{{ $autor->pais }}</p>
            </div>
            <div class="mb-3">
                <label for="ano_nascimento" class="form-label">Ano de Nascimento</label>
                <p class="form-control-static">{{ $autor->ano_nascimento }}</p>
            </div>
            <a href="{{ route('autores.edit', $autor->id) }}" class="btn btn-outline-primary me-2">Editar</a>
            <a href="{{ route('autores.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>
@endsection
