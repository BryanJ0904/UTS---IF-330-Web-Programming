<?php
if (!isset($_COOKIE['user_id'])){
    echo "<script>window.location = 'index.php?error';</script>";
    exit();
}
?>