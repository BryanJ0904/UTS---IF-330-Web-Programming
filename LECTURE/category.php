<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .container-md{
            max-width: 850px;  
        }

        .bg_color{
            background: #d8fcf4;
        }
    </style>
</head>
<body class="bg_color">
<div class="container container-md">
    <h1 align="center">Restoran IF330</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card my-4" style="width: 15rem;">
                <img src="ezgif.com-gif-maker.jpg" class="card-img-top" alt="makanan">
                <div class="card-body">
                    <h5 class="card-title">Appetizer</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form action="food.php" method="GET"><button href="user.php" class="btn btn-primary" name="category" value="appetizer">Appetizer</button></form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card my-4" style="width: 15rem;">
                <img src="breakfast.jpg" class="card-img-top" alt="makanan">
                <div class="card-body">
                    <h5 class="card-title">Breakfast</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form action="food.php" method="GET"><button href="user.php" class="btn btn-primary" name="category" value="breakfast">Breakfast</button></form>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card my-4" style="width: 15rem;">
                <img src="lunch.jpg"  class="card-img-top" alt="minuman">
                <div class="card-body">
                    <h5 class="card-title">Lunch</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form action="food.php" method="GET"><button href="user.php" class="btn btn-primary" name="category" value="lunch">Lunch</button></form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card my-4" style="width: 15rem;">
                <img src="download.jpeg" class="card-img-top" alt="makanan">
                <div class="card-body">
                    <h5 class="card-title">Dinner</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form action="food.php" method="GET"><button href="user.php" class="btn btn-primary" name="category" value="dinner">Dinner</button></form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card my-4" style="width: 15rem;">
                <img src="download.jpeg" class="card-img-top" alt="makanan">
                <div class="card-body">
                    <h5 class="card-title">Dessert</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form action="food.php" method="GET"><button href="user.php" class="btn btn-primary" name="category" value="dessert">Dessert</button></form>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card my-4" style="width: 15rem;">
                <img src="download.jpeg"  class="card-img-top" alt="minuman">
                <div class="card-body">
                    <h5 class="card-title">Drinks</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form action="food.php" method="GET"><button href="user.php" class="btn btn-primary" name="category" value="drinks">Drinks</button></form>
                </div>
            </div>
        </div>

        
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
