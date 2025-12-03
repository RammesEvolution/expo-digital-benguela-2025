<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expositor extends Model
{
    use HasFactory;
    
    //Forçar o nome da tabela para o plural correto em Português
    protected $table = 'expositores';

    protected $fillable = [
        'nome_completo',
        'nif_bi',
        'email',
        'telefone',
        'manifestacao_interesse',
        'projeto_apresentar',
        'tipo_entidade',
        'status',
    ];
}