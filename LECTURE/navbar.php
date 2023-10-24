<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;800&family=Kaushan+Script&family=Pacifico&family=Yellowtail&display=swap" rel="stylesheet">
    <header class="mb-2">
    <div class="nav">
        <div class="d-flex logo">
            <?php 
                if(isset($_COOKIE['user_id'])){ 
                    echo "<div><img src='./images/user.png' alt='Logo Image'>" . $_COOKIE['first_name'] . " " . $_COOKIE['last_name'] . "</div>";
                    if($_COOKIE['user_id'] == 1){
                        echo "<div><a class='admin-button' href='admin.php'>Mode Admin</a></div>";
                    } 
                }?>
        </div>
        <div>
            <div class="nav-links">
                <?php 
                    echo "<a class='home-button' href='homepage.php'><img src='./images/home.png' style='width: 25px; height: 25px' /></a>";
                    if(isset($_COOKIE['user_id'])){
                        echo "<a class='cart-button' href='cart.php'><img src='./images/cart.png' style='width: 25px; height: 25px' /><span class='ml-2'>Keranjang</span></a>";
                        echo "<a class='logout-button' href='logout.php'>Keluar</a>";
                    }else{
                        echo "<a class='login-button' href='login.php'><span class='icon-add'></span>Masuk</a>";
                        echo "<a class='join-button' href='.register.php'>Registrasi</a>";
                    }
                    ?>
            </div>
        </div>
    </div>
    </header>
