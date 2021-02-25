@extends('layouts.app')

@section('content')
    <div class="list">
        <div class="add">
            <a type="button" class="btn btn-success" href="{{ route('list.create') }}"><i
                    class="fas fa-plus"></i>Adicionar Livro</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Gênero</th>
                    <th scope="col">Capa</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            @foreach ($livros as $livro)
                <tbody>
                    <tr>
                        <td>{{ $livro->titulo }}</td>
                        <td>{{ $livro->nome_autor }}</td>
                        <td>{{ $livro->genero }}</td>
                        <td><img src="{{ url("storage/capas/{$livro->image}") }}" alt="{{ $livro->image }}"></td>
                        <td>
                            
                            <a type="button" class="btn btn-warning" href="{{route('list.show', $livro->id)}}"><i class="far fa-edit"></i>Visualizar</a>

                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
