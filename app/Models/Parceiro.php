<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Parceiro extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'parceiros';

    protected $fillable = [
        'nome',
        'descricao',
        'caminho_logo',
        'url_site', 
        'ordem',
        'ativo',
    ];

    protected $casts = [
        'ativo' => 'boolean',
    ];
}
