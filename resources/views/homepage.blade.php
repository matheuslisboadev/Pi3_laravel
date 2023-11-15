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
                <div class="card">
                    <h2>Card 1</h2>
                    <p></p>
                    <p></p>
                    <a href="#" class="btn">ok</a>
                </div>

                <div class="card">
                    <h2>Card 2</h2>
                    <p></p>
                    <p></p>
                    <a href="#" class="btn">ok</a>
                </div>

                <div class="card">
                    <h2>Card 3</h2>
                    <p></p>
                    <p></p>
                    <a href="#" class="btn">ok</a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        Alpha, 2023 &copy; Copyright
    </footer>
</body>
</html>
