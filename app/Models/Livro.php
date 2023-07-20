<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'titulo',
        'isbn',
        'genero',
        'sinopse',
        'ano_publicacao',
        'editora_id',
        'autor_id',
        'imagem_capa'
    ];
}
