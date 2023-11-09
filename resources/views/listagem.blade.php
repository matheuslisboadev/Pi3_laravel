<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/listagem.css" media="screen" />
	<title>Listagem</title>
    @include('layouts.nav')
</head>
<body>
@yield('nav')
    
    <div class="container-produtos">
        <div class="produto-card">
            <img class="img-thumbnail"/>
            <div class="cvp">
                <h5 class="card-title font-weight-bold">Produto Teste</h5>
                <p class="card-text">R$299,00</p>
                <button>Adicionar ao Carrinho</button>
            </div>
        </div>
    </div>
</body>
</html>
</html>