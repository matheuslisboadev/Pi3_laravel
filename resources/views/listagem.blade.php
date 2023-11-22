<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/listagem.css') }}" media="screen" />
	<title>Listagem</title>
    @include('layouts.nav')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<body>
@yield('nav')
    
<div class="container-produtos">
        @foreach($produtos as $produto)
            <div class="produto-card">
                <h2>{{ $produto->PRODUTO_NOME }}</h2>
                <p>{{ $produto->PRODUTO_DESC }}</p>
                <p>Preço: R$ {{ $produto->PRODUTO_PRECO }}</p>
                <p>Desconto: R$ {{ $produto->PRODUTO_DESCONTO }}</p>
                <form id="formAdicionarCarrinho" action="{{ route('adicionar_produto') }}" method="post">
    @csrf
    <input type="hidden" name="product_id" value="{{ $produto->PRODUTO_ID }}">
    <input type="number" name="quantidade" value="1" min="1">
    <button type="submit">Adicionar ao Carrinho</button>
</form>
            </div>
        @endforeach
    </div>
</body>
<script>
    function adicionarCarrinho() {
        $.ajax({
            type: 'POST',
            url: $('#formAdicionarCarrinho').attr('action'),
            data: $('#formAdicionarCarrinho').serialize(),
            success: function(response) {
                alert('Produto adicionado ao carrinho'); 
            },
            error: function(error) {
                console.log(error);
                alert('Erro ao adicionar o produto ao carrinho');
            }
        });
    }
</script>
</html>
</html>