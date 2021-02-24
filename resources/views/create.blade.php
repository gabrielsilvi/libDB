@extends('layouts.app')

@section('content')
    <div class="add">
        <form action="{{route('list.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Título</label>
                <input type="text" class="form-control" name="titulo" placeholder="Título">
            </div>
            <div class="form-group">
                <label>Autor(a)</label>
                <input type="text" class="form-control" name="nome_autor" placeholder="Autor(a)">
            </div>
            <div class="form-group">
                <label>Gênero</label>
                <input type="text" class="form-control" name="genero" placeholder="Gênero">
            </div>
            <div class="form-group">
                <label>Foto de Capa</label>
                <input class="form-control" type="file" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection
