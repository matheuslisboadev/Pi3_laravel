<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['PRODUTO_NOME', 'PRODUTO_DESC', 'PRODUTO_PRECO', 'PRODUTO_DESCONTO', 'CATEGORIA_ID', 'PRODUTO_ATIVO'];

    public function carrinhos()
    {
        return $this->belongsToMany(Carrinho::class)->withPivot('ITEM_QTD');
    }
}