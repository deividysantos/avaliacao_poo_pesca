<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pescaria extends Model
{
    use HasFactory;

    protected $table = 'pescaria';
    
    protected $fillable = [
        'nome',
        'id_local',
        'id_pescador',
        'data',
    ];

    public function local()
    {
        return $this->belongsTo(Locais::class, 'id_local');
    }

    public function pescador()
    {
        return $this->belongsTo(Pescador::class, 'id_pescador');
    }
}
