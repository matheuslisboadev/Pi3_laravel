<?php

namespace App\Http\Controllers;

use App\Models\estoque;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function visualizar($produtoId)
    {
        $produto = Produto::with('estoque')->find($produtoId);
    
        if (!$produto) {
            abort(404, 'Produto não encontrado');
        }
    
        $quantidadeEmEstoque = optional($produto->estoque)->PRODUTO_QTD;
    
        return view('estoque.visualizar', compact('produto', 'quantidadeEmEstoque'));
    }
    
}
