<link rel="stylesheet" href="navbar.css">
    <header>
    <div class="nav">
        <div class="logo">
            <?php 
                if(isset($_COOKIE['user_id'])){ 
                    echo "<img src='./assets/user.png' alt='Logo Image'>" . $_COOKIE['user_name'] . " " . $_COOKIE['last_name']; 
                }?>
        </div>
        <div>
            <div class="nav-links">
                <?php 
                    if(isset($_COOKIE['user_id'])){ 
                        echo "<a class='login-button' href='./loginregister/logout.php'>Log Out</a>";
                    }else{
                        echo "<a class='login-button' href='./loginregister/login.php'>Login</a>
                            <a class='join-button' href='./loginregister/register.php'>Register</a>";
                    }
                    ?>
            </div>
        </div>
    </div>
    </header>
    <hr />
