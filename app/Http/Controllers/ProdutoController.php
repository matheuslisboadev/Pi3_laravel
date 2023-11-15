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
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
