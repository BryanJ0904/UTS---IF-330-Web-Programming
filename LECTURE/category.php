<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="navbar.css">
    <?php require ("navbar.php")?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .bg_image{
            background-image: url('./images/background.jpg');
            background-size: 100% 100vh;
        }

        .card{
            cursor: pointer;
            overflow: hidden;
        }

        .card-img{
            transition: 0.5s ease-in;
        }

        .card-img-overlay {
            padding: 0;
        }
        
        .card-title{
            z-index: 0;
            position: absolute;
        }
        .detail-box{
            background-color: rgb(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
            padding: 8px;
            z-index: 999;
            position: absolute;
            transform: translateY(100%);
            transition: 0.5s ease-in;
        }
        

    </style>
</head>
<body class="bg_image">
<div class="container container-md">
    <h1 align="center">Pilih salah satu kategori.</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="m-1 card bg-dark text-white">
                <img src="./images/ezgif.com-gif-maker.jpg" class="card-img" alt="makanan" style="opacity: 50%;">
                <div class="box d-flex justify-content-center align-items-center card-img-overlay">
                    <h5 class="card-title">Appetizer</h5>
                    <div class='detail-box' id="detail-box-1">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                        <form action="food.php" method="GET"><button href="user.php" class="btn btn-primary w-100" name="category" value="appetizer">See Menu</button></form>
                    </div>
                </div>
            </div>            
        </div>
        <div class="col-md-4">
            <div class="m-1 card bg-dark text-white">
                <img src="./images/breakfast.jpg" class="card-img" alt="makanan" style="opacity: 50%;">
                <div class="box d-flex justify-content-center align-items-center card-img-overlay">
                    <h5 class="card-title">Breakfast</h5>
                    <div class='detail-box' id="detail-box-2">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                        <form action="food.php" method="GET"><button href="user.php" class="btn btn-primary w-100" name="category" value="breakfast">See Menu</button></form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="m-1 card bg-dark text-white">
                <img src="./images/lunch.jpg" class="card-img" alt="makanan" style="opacity: 50%;">
                <div class="box d-flex justify-content-center align-items-center card-img-overlay">
                    <h5 class="card-title">Lunch</h5>
                    <div class='detail-box' id="detail-box-3">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                        <form action="food.php" method="GET"><button href="user.php" class="btn btn-primary w-100" name="category" value="lunch">See Menu</button></form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="m-1 card bg-dark text-white">
                <img src="./images/download.jpeg" class="card-img" alt="makanan" style="opacity: 50%;">
                <div class="box d-flex justify-content-center align-items-center card-img-overlay">
                    <h5 class="card-title">Dinner</h5>
                    <div class='detail-box' id="detail-box-4">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                        <form action="food.php" method="GET"><button href="user.php" class="btn btn-primary w-100" name="category" value="dinner">See Menu</button></form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="m-1 card bg-dark text-white">
                <img src="./images/download.jpeg" class="card-img" alt="makanan" style="opacity: 50%;">
                <div class="box d-flex justify-content-center align-items-center card-img-overlay">
                    <h5 class="card-title">Dessert</h5>
                    <div class='detail-box' id="detail-box-5">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                        <form action="food.php" method="GET"><button href="user.php" class="btn btn-primary w-100" name="category" value="dessert">See Menu</button></form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="m-1 card bg-dark text-white">
                <img src="./images/download.jpeg" class="card-img" alt="makanan" style="opacity: 50%;" />
                <div class="box d-flex justify-content-center align-items-center card-img-overlay">
                    <h5 class="card-title">Drinks</h5>
                    <div class='detail-box' id="detail-box-6">
                        <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p>Last updated 3 mins ago</p>
                        <form action="food.php" method="GET"><button href="user.php" class="btn btn-primary w-100" name="category" value="drinks">See Menu</button></form>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var box = document.querySelectorAll(".box");
        var detailBox = document.querySelectorAll(".detail-box");
        var image = document.querySelectorAll(".card-img");
        box.forEach(function(box, index) {
            box.addEventListener("mouseenter", function() {
                var target = document.getElementById("detail-box-" + (index+1));
                var targetImage = image[index];
                target.style.transform = "translateY(0)";
                targetImage.style.transform = "scale(1.5)";
            });
            box.addEventListener("mouseleave", function() {
                var target = document.getElementById("detail-box-" + (index + 1));
                var targetImage = image[index];
                target.style.transform = "translateY(100%)"; // Reverse the translation
                targetImage.style.transform = "scale(1)";
            });
        });
    });
</script>
</body>
</html>
