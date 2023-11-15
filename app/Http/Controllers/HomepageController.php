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

        return view('homepage', compact('produtoPrincipal', 'categorias'));
    }
}
