<?php
    session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: welcome.php");
        die();
    }

    include 'config.php';
    $msg = "";

    if (isset($_POST['submit'])) {
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));

        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
            $msg = "<div class='alert alert-danger'>{$email} - This email address already exists.</div>";
        } else {
            if ($password === $confirm_password) {
                $sql = "INSERT INTO users (fname, lname, email, password) VALUES ('{$fname}', '{$lname}', '{$email}', '{$password}')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $msg = "<div class='alert alert-info'>Account successfully created. Click <a href='login.php'>Login</a> to continue!</div>";
                } else {
                    $msg = "<div class='alert alert-danger'>Something went wrong.</div>";
                }
            } else {
                $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match</div>";
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
    <title>Sign Up</title>
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
    <section class="w3l-mockup-form">
        <div class="container">
            <div class="main-mockup">
                <div class="content-wthree">
                    <h2>Sign Up</h2>
                    <hr>
                    <?php echo $msg; ?>
                    <form action="" method="post">
                        <input type="text" class="name" name="fname" placeholder="Enter Your First Name" value="<?php if (isset($_POST['submit'])) { echo $fname; } ?>" required>
                        <input type="text" class="name" name="lname" placeholder="Enter Your Last Name" value="<?php if (isset($_POST['submit'])) { echo $lname; } ?>" required>
                        <input type="email" class="email" name="email" placeholder="Enter Your Email" value="<?php if (isset($_POST['submit'])) { echo $email; } ?>" required>
                        <input type="password" class="password" name="password" placeholder="Enter Your Password" required>
                        <input type="password" class="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
                        <button name="submit" class="btn" type="submit">Sign Up</button>
                    </form>
                    <div class="social-icons">
                        <p>Already have an account? <a href="login.php">Login</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>