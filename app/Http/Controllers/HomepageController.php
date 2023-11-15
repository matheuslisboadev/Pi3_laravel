<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();

        $produtoPrincipal = $produtos->random();

        return view('homepage', compact('produtoPrincipal'));
    }
}
