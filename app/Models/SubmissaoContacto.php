<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmissaoContacto extends Model
{
    use HasFactory;

    protected $table = 'submissoes_contacto';

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'assunto',
        'mensagem',
        'tipo_utilizador',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
