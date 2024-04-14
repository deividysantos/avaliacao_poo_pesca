<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Captura extends Model
{
    use HasFactory;

    protected $table = 'capturas';
    
    protected $fillable = [
        'id_pescaria',
        'id_peixe',
        'id_isca',
        'tamanho',
        'peso',
        'solto',
        'descricao_soltura',
    ];

    public function pescaria()
    {
        return $this->belongsTo(Pescaria::class, 'id_pescaria');
    }

    public function peixe()
    {
        return $this->belongsTo(Peixes::class, 'id_peixe');
    }

    public function isca()
    {
        return $this->belongsTo(Iscas::class, 'id_isca');
    }
}
