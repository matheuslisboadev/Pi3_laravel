<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{

    public function mostrarCarrinho()
    {
        $carrinhoIds = session('carrinho', []); 

        $produtos = Produto::whereIn('PRODUTO_ID', array_keys($carrinhoIds))->get();

        $carrinho = [];
        foreach ($produtos as $produto) {
            $carrinho[] = [
                'produto' => $produto,
                'quantidade' => $carrinhoIds[$produto->PRODUTO_ID],
            ];
        }

        return view('carrinho')->with('carrinho', $carrinho);
    }

    public function adicionarProduto(Request $request)
    {
        $produtoId = $request->input('product_id');
        $quantidade = $request->input('quantidade', 1);
    
        $carrinho = $request->session()->get('carrinho', []);
        $carrinho[$produtoId] = $quantidade;
        $request->session()->put('carrinho', $carrinho);
    
        return redirect('/carrinho');
    }

    public function finalizarCompra(Request $request)
{
    try {
        DB::beginTransaction();

        foreach ($request->produtos as $produto) {
            $produtoId = $produto['produto']->PRODUTO_ID;
            $quantidade = $produto['quantidade'];

            DB::table('PRODUTO_ESTOQUE')->where('PRODUTO_ID', $produtoId)->decrement('PRODUTO_QTD', $quantidade);

            Pedido::create([
                'produto_id' => $produtoId,
                'quantidade' => $quantidade,
            ]);
        }


        DB::commit();

        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        DB::rollback();
        return response()->json(['success' => false, 'error' => $e->getMessage()]);
    }
}
}
