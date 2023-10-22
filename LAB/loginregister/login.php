<?php
    if (isset($_COOKIE['user_id'])) {
        header("Location: ../homepage.php");
        die();
    }

    require_once('db.php');
    include 'config.php';
    $msg = "";

    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $captcha = $_POST["captcha"];
        $confirmcaptcha = mysqli_real_escape_string($conn, $_POST["confirmcaptcha"]);

        if($captcha != $confirmcaptcha){
            $msg = "<div class='alert alert-danger'>Incorrect Captcha.</div>";
        }
        else{
            $sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
            /* $stmt = $db->prepare($sql);
            $stmt->execute([$email]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC); */
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                $user_id = $row['id'];
                $user_name = $row['fname'];
                $last_name = $row['lname'];
                setcookie('user_id', $user_id, time() + 3600, '/');
                setcookie('user_name', $user_name, time() + 3600, '/');
                setcookie('last_name', $last_name, time() + 3600, '/');
                header("Location: ../homepage.php");
                exit;
            } else {
                $msg = "<div class='alert alert-danger'>Email or password does not match.</div>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Login Form" />
    <title>Login</title>
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
    <section class="w3l-mockup-form">
        <div class="container">
            <div class="main-mockup">
                <div class="content-wthree">
                    <h2>Login</h2>
                    <hr>
                    <?php echo $msg; ?>
                    <form action="" method="post">
                        <input type="email" class="email" name="email" placeholder="Enter Your Email" required>
                        <input type="password" class="password" name="password" placeholder="Enter Your Password" style="margin-bottom: 15px;" required>
                        <input type="text" style="background-color: yellow; text-align:center; text-decoration: line-through; letter-spacing:5px; font-size:25px;" class="captcha" name="captcha" value="<?php echo substr(uniqid(), 5); ?>">
                        <input type="text" name="confirmcaptcha" placeholder="Enter The Captcha Above" value="">
                        <button name="submit" name="submit" class="btn" type="submit">Login</button>
                    </form>
                    <div class="social-icons">
                        <p>Don't have an account? <a href="register.php">Sign Up</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>