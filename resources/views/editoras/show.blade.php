@extends('layout')

@section('content')
<div class="container px-5 pt-5">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <p class="form-control-static">{{ $editora->nome }}</p>
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Site</label>
                <p class="form-control-static">{{ $editora->sexo }}</p>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <p class="form-control-static">{{ $editora->email }}</p>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <p class="form-control-static">{{ $editora->telefone }}</p>
            </div>
            <a href="{{ route('editoras.edit', $editora->id) }}" class="btn btn-outline-primary me-2">Editar</a>
            <a href="{{ route('editoras.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>
@endsection
