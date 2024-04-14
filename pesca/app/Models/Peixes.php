<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peixes extends Model
{
    use HasFactory;

    protected $table = 'peixes';
    
    protected $fillable = [
        'nome_comum',
        'nome_cientifico',
        'tamanho_minimo_permitido',
        'peso_minimo_permitido',
    ];    
}
