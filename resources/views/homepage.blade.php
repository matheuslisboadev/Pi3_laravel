<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homepage.css">
    @include('layouts.nav')
</head>
<body>
    @yield('nav') 

    <div class="container">
        @include('layouts.sidebar')
        @yield('side')

        <div class="card-principal">
    <h1>Produto em destaque</h1>
    <h2>{{ $produtoPrincipal->PRODUTO_NOME }}</h2>
    <p>{{ $produtoPrincipal->PRODUTO_DESC }}</p>
    <p>Preço: R$ {{ $produtoPrincipal->PRODUTO_PRECO }}</p>
    <p>Desconto: R$ {{ $produtoPrincipal->PRODUTO_DESCONTO }}</p>
    <a href="{{ route('produto', ['id' => $produtoPrincipal->PRODUTO_ID]) }}" class="btn">Detalhes</a>

</div>

<div class="card-container">
    @foreach($outrosProdutos as $outroProduto)
        <div class="card">
            <h2>{{ $outroProduto->PRODUTO_NOME }}</h2>
            <p>{{ $outroProduto->PRODUTO_DESC }}</p>
            <p>Preço: R$ {{ $outroProduto->PRODUTO_PRECO }}</p>
            <p>Desconto: R$ {{ $outroProduto->PRODUTO_DESCONTO }}</p>
            <a href="{{ route('produto', ['id' => $outroProduto->PRODUTO_ID]) }}" class="btn">Detalhes</a>
        </div>
    @endforeach
        </div>
    </div>

    <footer>
        Alpha, 2023 &copy; Copyright
    </footer>
</body>
</html>
