<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\estoque;


class Produto extends Model
{
    protected $table = 'PRODUTO';
    protected $primaryKey = 'PRODUTO_ID';

    protected $fillable = [
        'PRODUTO_NOME',
        'PRODUTO_DESC',
        'PRODUTO_PRECO',
        'PRODUTO_DESCONTO',
        'CATEGORIA_ID',
        'PRODUTO_ATIVO',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'CATEGORIA_ID');
    }

    public function estoque()
    {
        return $this->hasOne(estoque::class, 'PRODUTO_ID');
    }
 
    public $timestamps = true;
}
