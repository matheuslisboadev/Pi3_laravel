<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
    <body> 
    @yield('side')
    <div class="container">
        <div class="sidebar">           
        <ul class="nav">
    @foreach($categorias as $categoria)
        <li><a href="{{ route('listagem_por_categoria', ['categoria' => $categoria->CATEGORIA_ID]) }}">{{ $categoria->CATEGORIA_NOME }}</a></li>
    @endforeach
</ul>
        </div>
</div>
</body>
</html>