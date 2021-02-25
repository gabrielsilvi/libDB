@extends('layouts.app')

@section('content')
    <div class="add">
        <form action="{{ route('list.destroy', $livro->id) }}" method="POST">
            @csrf
            {!! method_field('DELETE') !!}
            <div class="form-group">
                <label>Título</label>
                <input type="text" value="{{ $livro->titulo }}" class="form-control" name="titulo" disabled="">
            </div>
            <div class="form-group">
                <label>Autor(a)</label>
                <input type="text" value="{{ $livro->nome_autor }}" class="form-control" name="nome_autor" disabled="">
            </div>
            <div class="form-group">
                <label>Gênero</label>
                <input type="text" value="{{ $livro->genero }}" class="form-control" name="genero" disabled="">
            </div>
            <button style="margin-bottom: 5px" type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Excluir</button>
        </form>
        <a type="button" class="btn btn-warning" href="{{route('list.edit', $livro->id)}}"><i class="far fa-edit"></i>Editar</a>
    </div>

@endsection
