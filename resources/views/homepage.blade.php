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

        <div class="content">
            <div class="card-principal">
                <h1>Jogo em destaque</h1>
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
