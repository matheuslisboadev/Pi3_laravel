<?php

namespace App\Http\Controllers;

use App\Models\pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function listarPedidos()
    {
        $pedidos = Pedido::all(); 

        return view('pedido', ['pedidos' => $pedidos]);
    }
}
