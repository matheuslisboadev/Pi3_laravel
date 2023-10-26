<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="css/produto.css">
    @include('layouts.nav')
</head>
<body>
  @yield('nav')

    <div class="card_principal">
        <h1>Imagem do jogo</h1>
</div>
<div class="descricao">
  <h1>Descrição do jogo</h1>
</div>
    <div class="card-container">
        <div class="row">
            <div class="cards">imagens</div>
            <div class="cards">imagens</div>
            <div class="cards">imagens</div>
        </div>
        <div class="row">
            <div class="cards">imagens</div>
            <div class="cards">imagens</div>
            <div class="cards">imagens</div>
        </div>
    </div>
    
</body>
</html>