<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class veiculo extends Model
{
    use HasFactory;

    protected $table = 'veiculos';

    protected $fillable = [
        'id_categoria',
        'marca',
        'modelo',
        'ano_fabricacao',
        "placa",
        'status'
    ];
}
