<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory; // criar dados de teste no banco

    protected $table = 'categorias'; // nome da migrate
    protected $fillable = [ // selecionar campos da tabela que devem ser preenchidos 'pelo usuário'
        'nome',
        'descricao'
    ];

}
