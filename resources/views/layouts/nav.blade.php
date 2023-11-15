<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <title>@yield('title')</title>

       
    </head>
    <body> 
        @yield('nav')
    <header>
        <nav>
            <div class="logo">
                <img src="{{ asset('img/Logo.png') }}" alt="Logo">

            </div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
            <div class="search-bar">
                <input type="text" placeholder="Search...">
                <button type="submit">Search</button>
            </div>
        </nav>
    </header>
    </body>
</html>
