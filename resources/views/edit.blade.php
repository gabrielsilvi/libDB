@extends('layouts.app')

@section('content')
    <div class="add">
        <form action="{{route('list.update', $livro->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {!! method_field('PUT') !!}
            <div class="form-group">
                <label>Título</label>
                <input type="text" value="{{$livro->titulo}}" class="form-control" name="titulo" placeholder="Título">
            </div>
            <div class="form-group">
                <label>Autor(a)</label>
                <input type="text" value="{{$livro->nome_autor}}" class="form-control" name="nome_autor" placeholder="Autor(a)">
            </div>
            <div class="form-group">
                <label>Gênero</label>
                <input type="text" value="{{$livro->genero}}" class="form-control" name="genero" placeholder="Gênero">
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
@endsection
