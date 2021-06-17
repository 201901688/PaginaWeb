<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="carrusel.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Ofertas</title>
 
</head>
<body>
<?php 
        require "NavBar.php";
    ?> 
   <!-- carrusel inicio --> 
   <h1>Ofertas</h1>
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img1/Guineo.jpg" alt="Guineo">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ahora RD$4</h5>
                    <p>Antes RD$5</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img1/Platano.jpg" alt="Platano">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ahora RD$8</h5>
                    <p>Antes $10</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img1/Salami.jpg" alt="Salami">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ahora RD$250</h5>
                    <p>Antes $300</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img1/Yuca.jpg" alt="Yuca">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ahora RD$20</h5>
                    <p>Antes $25</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img1/Aceite.jpg" alt="Aceite">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ahora RD$200</h5>
                    <p>Antes $225</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
   <!-- carrusel fin -->
   
</body>
</html>