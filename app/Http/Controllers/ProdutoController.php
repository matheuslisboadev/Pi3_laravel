<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
  
    public function index()
    {
        $produtos = Produto::all();
        return view('listagem', compact('produtos'));
    }


    public function mostrarProduto($id)
    {
        $produto = Produto::find($id);
    
        if (!$produto) {
            return redirect()->route('pagina_de_erro');
        }
    
        return view('produto', compact('produto'));
    }
    
    public function listagemPorCategoria($categoria)
    {
        $produtos = Produto::where('CATEGORIA_ID', $categoria)->get();
        return view('listagem', compact('produtos'));
    }
}
