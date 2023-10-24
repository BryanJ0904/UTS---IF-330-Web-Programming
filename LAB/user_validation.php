<?php
if (!isset($_COOKIE['user_id'])){
    echo "<script>window.location = 'index.php?error';</script>";
    exit();
}

/* if (!isset($_COOKIE['user_id'])){
    header("Location: index.php?error");
    exit();
}else{
    echo "tes";
    unset($_SESSION['error']);
}*/
?>