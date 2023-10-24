<?php
require "../config.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_COOKIE['user_id'];
    if(isset($_POST['removeItem'])) {
        $itemId = $_POST["itemId"];
        $sql = "DELETE FROM `cart` WHERE `id`='$itemId' AND `user_id`='$userId'";   
        $result = mysqli_query($conn, $sql);
        echo "<script>alert('Removed');
                window.location.href = '../cart.php';
            </script>";
    }
    if(isset($_POST['removeAllItem'])) {
        $sql = "DELETE FROM `car` WHERE `user_id`='$userId'";   
        $result = mysqli_query($conn, $sql);
        echo "<script>alert('Removed All');
                window.location.href = '../cart.php';
            </script>";
    }
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
    {
        $id = $_POST['foodId'];
        $qty = $_POST['quantity'];
        $updatesql = "UPDATE `cart` SET `quantity`='$qty' WHERE `id`='$id' AND `user_id`='$userId'";
        $updateresult = mysqli_query($conn, $updatesql);
    }
    
}
?>