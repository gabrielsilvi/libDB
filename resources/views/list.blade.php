@extends('layouts.app')

@section('content')
<div class="list">
    <div class="add">
        <a type="button" class="btn btn-success" href="{{ route('list.create') }}"><i class="fas fa-plus"></i>Adicionar Livro</a>
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
        <tbody>
            <tr>
                <td>Harry potter e a pedra filosofal</td>
                <td>J. K. Rowling </td>
                <td>Aventura</td>
                <td><img src="img/book1.jpg" alt=""></td>
                <td>
                    <button type="button" class="btn btn-warning"><i class="far fa-edit"></i>Editar</button>
                    <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i>Excluir</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection