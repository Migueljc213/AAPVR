<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'video',
        'imagem1',
        'imagem2',
        'imagem3',
        'imagem4'
    ];
}
