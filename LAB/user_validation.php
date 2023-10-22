<?php
if (!isset($_COOKIE['user_id'])){
    header("Location: homepage.php?error");
    exit();
}else{
    unset($_SESSION['error']);
}
?>