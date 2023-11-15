<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="{{ asset('css/produto.css') }}">
    @include('layouts.nav')

</head>
<body>
    @yield('nav')
       

    <div class="descricao">
            <h1>{{ $produto->PRODUTO_NOME }}</h1>
            <p>{{ $produto->PRODUTO_DESC }}</p>
            <p>Preço: R$ {{ $produto->PRODUTO_PRECO }}</p>
            <p>Desconto: R$ {{ $produto->PRODUTO_DESCONTO }}</p>
        </div>
    </div>
        </div>

        <footer>
        Alpha, 2023 &copy; Copyright
    </footer>
</body>

</html>