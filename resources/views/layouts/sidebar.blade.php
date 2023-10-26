<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
    <body> 
    @yield('side')
    <div class="container">
        <!-- Barra lateral -->
        <div class="sidebar">
           
            <ul class="nav">
                <li><a href="#">categoria 1</a></li>
                <li><a href="#">categoria 2</a></li>
                <li><a href="#">categoria 3</a></li>
                <li><a href="#">categoria 4</a></li>
                <li><a href="#">categoria 5</a></li>
            </ul>
        </div>
</div>
</body>
</html>