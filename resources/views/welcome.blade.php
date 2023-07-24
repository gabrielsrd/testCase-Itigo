@extends('layout')

@section('content')
    <div class="container px-5 pt-5">
        <p>Criado por Gabriel da Silva Alves para a ITIGO.
            <br>
            Esse projeto é um CRUD simplificado de livros, autores e editoras.
        </p>

        <ul>
            <li><a href="{{ route('livros.index') }}">CRUD Livros</a></li>
            <li><a href="{{ route('autores.index') }}">Crud Autores</a></li>
            <li><a href="{{ route('editoras.index') }}">Crud Editoras</a></li>
        </ul>
    </div>
@endsection
