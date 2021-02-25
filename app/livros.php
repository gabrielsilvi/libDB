<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livros extends Model
{
    protected $fillable = [
        'titulo', 'nome_autor', 'genero','image',
    ];
}
