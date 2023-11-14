<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{

    protected $fillable = ['USUARIO_ID', 'PRODUTO_ID', 'ITEM_QTD'];

    public function produtos()
    {
        return $this->belongsToMany(Produto::class)->withPivot('ITEM_QTD');
    }
}
