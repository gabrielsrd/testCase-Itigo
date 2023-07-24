@extends('layout')

@section('content')
<div class="container px-5 pt-5">
    <div class="row">
        <div class="col">
            <form action="{{ route('editoras.update', $editora->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome da Editora" value="{{ $editora->nome }}">
                </div>
                <div class="mb-3">
                    <label for="site" class="form-label">Site</label>
                    <input type="text" class="form-control" name="site" placeholder="Site da Editora" value="{{ $editora->site }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email da Editora" value="{{ $editora->email }}">
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" name="telefone" placeholder="Telefone da Editora" value="{{ $editora->telefone }}">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('editoras.index') }}" class="btn btn-secondary">Voltar</a>
            </form>
        </div>
    </div>
</div>
@endsection
