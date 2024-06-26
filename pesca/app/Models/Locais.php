<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locais extends Model
{
    use HasFactory;

    protected $table = 'locais';
    
    protected $fillable = [
        'descricao',
        'cidade',
    ];

    public function pescarias()
    {
        return $this->hasMany(Pescaria::class, 'id_local');
    }
}
