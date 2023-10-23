<link rel="stylesheet" href="navbar.css">
    <header>
    <div class="nav">
        <div class="logo">
            <?php 
                if(isset($_COOKIE['user_id'])){ 
                    echo "<img src='user.png' alt='Logo Image'>" . $_COOKIE['first_name'] . " " . $_COOKIE['last_name']; 
                }?>
        </div>
        <div>
            <div class="nav-links">
                <?php 
                    if(isset($_COOKIE['user_id'])){ 
                        echo "<a class='login-button' href='logout.php'>Log Out</a>";
                        // echo "<a class='login-button' href='cart.php'>cart</a>";  //<--itu udh bisa tinggal akitifin aja 
                    }else{
                        echo "<a class='login-button' href='login.php'>Login</a>
                            <a class='join-button' href='.register.php'>Register</a>";
                    }
                    ?>
            </div>
        </div>
    </div>
    </header>
    <hr />
