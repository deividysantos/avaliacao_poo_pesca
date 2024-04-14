<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iscas extends Model
{
    use HasFactory;

    protected $table = 'iscas';

    protected $fillable = [
        'nome',
        'descricao',
    ]; 
}
