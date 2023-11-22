<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/produto', function () {
    return view('produto');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/carrinho', function () {
    return view('carrinho');
});

Route::get('/listagem', [ProdutoController::class, 'index']);
Route::post('/adicionar-produto', [CarrinhoController::class, 'adicionarProduto'])->name('adicionar_produto');
Route::get('/carrinho', [CarrinhoController::class, 'mostrarCarrinho']);
Route::get('/homepage', [HomepageController::class, 'index']);
Route::get('/produto/{id}', [ProdutoController::class, 'mostrarProduto'])->name('produto');
Route::get('/listagem/{categoria}', [ProdutoController::class, 'listagemPorCategoria'])->name('listagem_por_categoria');
Route::post('/finalizar-compra', [CarrinhoController::class, 'finalizarCompra'])->name('finalizar_compra');
Route::get('/pedidos', [PedidoController::class, 'listarPedidos'])->name('lista_pedidos');
Route::post('/login', [AuthController::class, 'showLogin'])->name('login');
