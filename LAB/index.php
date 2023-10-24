<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="homepage.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;800&family=Kaushan+Script&family=Pacifico&family=Yellowtail&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="homepage.js"></script>
    <title>Task Tracker</title>
</head>

<body class="body">
    <?php require 'navbar.php'; ?>
    <div class="container d-flex flex-column" style="height: 100vh">
    <?php
        if(isset($_GET['error'])){
            echo "<div class='mt-3 alert alert-danger'>Please register/login first!</div>";
        }
        if(isset($_COOKIE['user_id'], $_COOKIE['user_name'])){
            date_default_timezone_set('Asia/Jakarta');
            $current_hour = date('H');
            if ($current_hour >= 5 && $current_hour < 12) {
                $greeting = 'Good morning';
            } elseif ($current_hour >= 12 && $current_hour < 17) {
                $greeting = 'Good afternoon';
            } elseif ($current_hour >= 17 && $current_hour < 21) {
                $greeting = 'Good evening';
            } else {
                $greeting = 'Good night';
            }
            echo "<h2 class='user text-center'>" . $greeting . " " . $_COOKIE['user_name'] . "!</h2>";
        }else{
            echo "<h2 class='user text-center'>Welcome Guest!</h2>" ;
        }
    ?>
        <div class="my-5">
            <p class="text-center" id="quotes"></p>
            <p class="text-center" id="author"></p>
        </div>
        <h1 class="title text-center">Task Tracker</h1>
        <div class="row" style="height: 50vh">
            <div class="selection-box col-12 col-md mx-3 d-flex flex-column justify-content-center align-items-center">
                <form action="list.php"><button id="hidden" type="submit" name="action" value="view"><img class="square-box" class="img-fluid logo" src="./assets/view.png"/></button></form>
                <h2>View List</h2>
            </div>
            <div class="selection-box col-12 col-md mt-3 mt-lg-0 mx-3 d-flex flex-column justify-content-center align-items-center">
                <form action="list.php"><button id="hidden" type="submit" name="action" value="add"><img class="square-box" class="img-fluid logo" src="./assets/add.png"/></button></form>
                <h2>Add List</h2>
            </div>
            <div class="selection-box col-12 col-md mt-3 mt-xl-0 mx-3 d-flex flex-column justify-content-center align-items-center">
                <form action="list.php"><button id="hidden" type="submit" name="action" value="edit"><img class="square-box" class="img-fluid" src="./assets/edit.png"/></button></form>
                <h2>Delete/Edit List</h2>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>