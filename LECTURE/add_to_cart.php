<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "webprog");

if (isset($_POST['menu_id']) && isset($_POST['menu_name']) && isset($_POST['menu_price'])) {
    $menuId = $_POST['menu_id'];
    $userId = $_POST['user_id'];
    $menuName = $_POST['menu_name'];
    $menuPrice = $_POST['menu_price'];


    // Check if the item already exists in the cart for the user
    $query = "SELECT * FROM cart WHERE menu_id = $menuId AND user_id = $userId";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        // The item already exists, so update the quantity
        $row = mysqli_fetch_assoc($result);
        $newQuantity = $row['quantity'] + 1;
        $updateQuery = "UPDATE cart SET quantity = $newQuantity WHERE menu_id = $menuId AND user_id = $userId";
        mysqli_query($con, $updateQuery);
        echo "Item quantity updated in the cart and saved to the database.";
    } else {
        // The item doesn't exist, so insert it into the cart table
        $insertQuery = "INSERT INTO cart (menu_id, menu_name, user_id, menu_price, quantity) VALUES ($menuId, '$menuName', $userId, $menuPrice, 1)";
        mysqli_query($con, $insertQuery);
        echo "Item added to the cart and saved to the database.";
    }
} else {
    echo "Invalid item data.";
}
echo "<a href='categori.php'>Back to Order Click here</a>"
?>
