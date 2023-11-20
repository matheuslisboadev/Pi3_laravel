<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use App\Models\Categoria;


class HomepageController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();

        $categorias = Categoria::all();

        $produtoPrincipal = $produtos->random();

        $outrosProdutos = $produtos->filter(function ($produto) use ($produtoPrincipal) {
            return $produto->PRODUTO_ID !== $produtoPrincipal->PRODUTO_ID;
        });

        $outrosProdutos = $outrosProdutos->shuffle()->take(3);

        return view('homepage', compact('produtoPrincipal', 'categorias', 'outrosProdutos'));
    }
}
