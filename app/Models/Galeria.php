<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'galerias';

    protected $fillable = [
        'evento_id',
        'titulo',
        'caminho_imagem',
        'descricao',
        'ordem',
    ];

    public function evento(): BelongsTo
    {
        return $this->belongsTo(Evento::class, 'evento_id');
    }
}
