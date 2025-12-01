<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'eventos';

    protected $fillable = [
        'titulo',
        'descricao',
        'data_inicio',
        'data_fim',
        'localizacao',
        'capacidade',
        'categoria',
        'estado',
    ];

    protected $casts = [
        'data_inicio' => 'datetime',
        'data_fim' => 'datetime',
    ];

    public function galerias(): HasMany
    {
        return $this->hasMany(Galeria::class, 'evento_id');
    }
}
