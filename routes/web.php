<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CarrinhoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/homepage', function () {
    return view('homepage');
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
Route::get('/carrinho', 'App\Http\Controllers\CarrinhoController@mostrarCarrinho');


