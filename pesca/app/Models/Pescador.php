<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pescador extends Model
{
    use HasFactory;

    protected $table = 'pescadores';
    
    protected $fillable = [
        'nome',
        'idade',
        'numero_licensa',
    ];
}
