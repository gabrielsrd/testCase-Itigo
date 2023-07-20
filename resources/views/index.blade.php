@extends('livros.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('livros.create') }}"> Create New Livro</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Titulo</th>
            <th>Genero</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($livros as $livro)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $livro->titulo }}</td>
            <td>{{ $livro->genero }}</td>
            <td>
                <form action="{{ route('livros.destroy',$livro->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('livros.show',$livro->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('livros.edit',$livro->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $livros->links() !!}
      
@endsection