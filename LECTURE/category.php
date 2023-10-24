<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="navbar.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .bg_image{
            background-image: url('./images/background.jpg');
            background-size: 100% 100vh;
        }

        .title{
            font-family: 'Catamaran', sans-serif;
            font-weight: 600;
            color: white;
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
            font-family: 'Kaushan Script', cursive;
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
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .btn-get-started {
            background: transparent;
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-size: 14px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 12px 32px;
            border-radius: 50px;
            transition: 0.5s;
            line-height: 1;
            margin: 10px;
            color: #fff;
            -webkit-animation-delay: 0.8s;
            animation-delay: 0.8s;
            border: 2px solid #1bbca3;
        }

        .btn-get-started:hover {
            background: #4be6d9;
            color: #fff;
            text-decoration: none;
        }
        

    </style>
</head>
<body class="bg_image">
<?php require "navbar.php";
        if(isset($_GET['error'])){
            echo "<div class='text-center alert alert-danger'>Please register/login first!</div>";
        }

        if(isset($_GET['add'])){
            echo "<div class='text-center alert alert-danger'>Added to cart!</div>";
        }
?>

<div class="container container-md">
    <h1 class="text-center title">Pilih salah satu kategori</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="m-1 card bg-dark text-white">
                <img src="./images/appetizer.jpg" class="card-img" alt="makanan" style="opacity: 50%;">
                <div class="box d-flex justify-content-center align-items-center card-img-overlay">
                    <h5 class="card-title">Appetizer</h5>
                    <div class='detail-box' id="detail-box-1">
                        <p class="card-text">Buka selera dengan hidangan pembuka yang lezat.</p>
                        <form action="food.php" method="GET"><button href="user.php" class="btn-get-started animate__animated animate__fadeInUp scrollto" name="category" value="appetizer">Lihat Menu</button></form>
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
                        <p class="card-text">Buatlah hari mu semakin bersemangat!</p>
                        <form action="food.php" method="GET"><button href="user.php" class="btn-get-started animate__animated animate__fadeInUp scrollto" name="category" value="breakfast">Lihat Menu</button></form>
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
                        <p class="card-text">Isi perutmu dengan makan siang yang bergizi.</p>
                        <form action="food.php" method="GET"><button href="user.php" class="btn-get-started animate__animated animate__fadeInUp scrollto" name="category" value="lunch">Lihat Menu</button></form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="m-1 card bg-dark text-white">
                <img src="./images/dinner.jpg" class="card-img" alt="makanan" style="opacity: 50%;">
                <div class="box d-flex justify-content-center align-items-center card-img-overlay">
                    <h5 class="card-title">Dinner</h5>
                    <div class='detail-box' id="detail-box-4">
                        <p class="card-text">Nikmati makan malammu dengan hidangan lezat.</p>
                        <form action="food.php" method="GET"><button href="user.php" class="btn-get-started animate__animated animate__fadeInUp scrollto" name="category" value="dinner">Lihat Menu</button></form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="m-1 card bg-dark text-white">
                <img src="./images/dessert.jpg" class="card-img" alt="makanan" style="opacity: 50%;">
                <div class="box d-flex justify-content-center align-items-center card-img-overlay">
                    <h5 class="card-title">Dessert</h5>
                    <div class='detail-box' id="detail-box-5">
                        <p class="card-text">Selesaikan hidanganmu dengan pencuci mulut manis.</p>
                        <form action="food.php" method="GET"><button href="user.php" class="btn-get-started animate__animated animate__fadeInUp scrollto" name="category" value="dessert">Lihat Menu</button></form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="m-1 card bg-dark text-white">
                <img src="./images/drinks.jpg" class="card-img" alt="makanan" style="opacity: 50%;" />
                <div class="box d-flex justify-content-center align-items-center card-img-overlay">
                    <h5 class="card-title">Drinks</h5>
                    <div class='detail-box' id="detail-box-6">
                        <p>Minumlah minuman favoritmu untuk menyegarkan tubuh.</p>
                        <form action="food.php" method="GET"><button href="user.php" class="btn-get-started animate__animated animate__fadeInUp scrollto" name="category" value="drinks">Lihat Menu</button></form>
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
