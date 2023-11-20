<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="css/carrinho.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <span>Carrinho de compras <b>ALPHA</b></span>
    </header>
    <main>
        <img src="img/Logo.png" width="200px" height="200px">
        <div class="page-title">Seu Carrinho</div>
        <div class="content">
            <section>
                <table>
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Total</th>
                            <th>-</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carrinho as $produto)
                        <tr>
                            <td>
                                <div class="product">
                                    <div class="info">
                                        <div class="name">{{ $produto['produto']->PRODUTO_NOME }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>R$ {{ $produto['produto']->PRODUTO_PRECO }}</td>
                            <td>
                                <div class="qty">
                                    <button class="decrement" data-index="{{ $loop->index }}"><i class="bx bx-minus"></i></button>
                                    <span class="quantidade">{{ $produto['quantidade'] }}</span>
                                    <button class="increment" data-index="{{ $loop->index }}"><i class="bx bx-plus"></i></button>
                                </div>
                            </td>
                            <td class="subtotal">R$ {{ $produto['quantidade'] * $produto['produto']->PRODUTO_PRECO }}</td>
                            <td>
                            <button class="remove-produto" data-index="{{ $loop->index }}"><i class="bx bx-x"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
            <aside>
                <div class="box">
                    <header>Resumo da compra</header>
                    <footer>
                        <span id="total">Total</span>
                    </footer>
                </div>
                <button>Finalizar Compra</button>
            </aside>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('.increment').click(function () {
            var index = $(this).closest('tr').index();
            incrementarQuantidade(index);
        });

        $('.decrement').click(function () {
            var index = $(this).closest('tr').index();
            decrementarQuantidade(index);
        });

        $('.remove-produto').click(function () {
            var index = $(this).closest('tr').index();
            removerProduto(index);
        });

        function incrementarQuantidade(index) {
            var quantidadeElement = $('.qty').eq(index).find('.quantidade');
            var quantidadeAtual = parseInt(quantidadeElement.text());
            quantidadeAtual++;
            quantidadeElement.text(quantidadeAtual);

            atualizarSubtotal(index, quantidadeAtual);
            atualizarTotal();
        }

        function decrementarQuantidade(index) {
            var quantidadeElement = $('.qty').eq(index).find('.quantidade');
            var quantidadeAtual = parseInt(quantidadeElement.text());
            if (quantidadeAtual > 1) {
                quantidadeAtual--;
                quantidadeElement.text(quantidadeAtual);

                atualizarSubtotal(index, quantidadeAtual);
                atualizarTotal();
            }
        }

        function removerProduto(index) {
            $('.qty').eq(index).closest('tr').remove();
            atualizarTotal();
        }

        function atualizarSubtotal(index, quantidade) {
            var precoUnitario = parseFloat($('.qty').eq(index).prev().text().replace('R$ ', '').replace(',', '.'));
            var subtotal = quantidade * precoUnitario;
            $('.subtotal').eq(index).text('R$ ' + subtotal.toFixed(2).replace('.', ','));
        }

        function atualizarTotal() {
            var total = 0;
            $('.subtotal').each(function () {
                total += parseFloat($(this).text().replace('R$ ', '').replace(',', '.'));
            });
            $('#total').text('Total: R$ ' + total.toFixed(2).replace('.', ','));
        }
    });
</script>

</body>
</html>
