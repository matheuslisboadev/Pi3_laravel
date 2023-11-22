<!-- resources/views/pedidos.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
    <link rel="stylesheet" href="{{ asset('css/listagem.css') }}">
    @include('layouts.nav') 
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    @yield('nav') 
    <div class="container-pedidos">
        <h1>Lista de Pedidos</h1>
        <table>
            <thead>
                <tr>
                    <th>ID do Pedido</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Data do Pedido</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->id }}</td>
                        <td>{{ $pedido->produto->PRODUTO_NOME }}</td>
                        <td>{{ $pedido->quantidade }}</td>
                        <td>{{ $pedido->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
