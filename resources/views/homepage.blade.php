<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/homepage.css">
@include('layouts.nav')
</head>
<body>
    @yield('nav')  
    
 <div class="content">
            <div class="card-container">
                <div class="card">
                    <h2>Card 1</h2>
                    <p>This is the content of Card 1.</p>
                    <p>Description of Card 1.</p>
                    <a href="#" class="btn">Learn More</a>
                </div>

                <div class="card">
                    <h2>Card 2</h2>
                    <p>This is the content of Card 2.</p>
                    <p>Description of Card 2.</p>
                    <a href="#" class="btn">Learn More</a>
                </div>

                <div class="card">
                    <h2>Card 3</h2>
                    <p>This is the content of Card 3.</p>
                    <p>Description of Card 3.</p>
                    <a href="#" class="btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>