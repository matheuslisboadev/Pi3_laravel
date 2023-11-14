<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="css/carrinho.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"
    />
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
                <button><i class="bx bx-minus"></i></button>
                <span>{{ $produto['quantidade'] }}</span>
                <button><i class="bx bx-plus"></i></button>
            </div>
        </td>
        <td>R$ {{ $produto['quantidade'] * $produto['produto']->PRODUTO_PRECO }}</td>
        <td>
            <button class="remove"><i class="bx bx-x"></i></button>
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
              <span>Total</span>
            </footer>
          </div>
          <button>Finalizar Compra</button>
        </aside>
      </div>
    </main>
  </body>
</html>
