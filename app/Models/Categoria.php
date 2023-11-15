<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    protected $table = 'CATEGORIA';

    protected $fillable = [
        'CATEGORIA_NOME',
        'CATEGORIA_DESC',
        'CATEGORIA_ATIVO',
    ];

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'CATEGORIA_ID');
    }
}
