<!DOCTYPE html>
<html>
<body>
            <?php
            ob_start();
            include 'config.php';
            
            if (isset($_POST['menu_id']) && isset($_POST['menu_name']) && isset($_POST['menu_price'])) {
                $menuId = $_POST['menu_id'];
                $userId = $_POST['user_id'];
                $menuName = $_POST['menu_name'];
                $menuPrice = $_POST['menu_price'];

                $query = "SELECT * FROM cart WHERE menu_id = $menuId AND user_id = $userId";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $newQuantity = $row['quantity'] + 1;
                    $updateQuery = "UPDATE cart SET quantity = $newQuantity WHERE menu_id = $menuId AND user_id = $userId";
                    mysqli_query($conn, $updateQuery);
                } else {
                    $insertQuery = "INSERT INTO cart (menu_id, menu_name, user_id, menu_price, quantity) VALUES ($menuId, '$menuName', $userId, $menuPrice, 1)";
                    mysqli_query($conn, $insertQuery);
                }
                echo "<script>window.location = 'category.php?add';</script>";
            }
        ?>
</body>
</html>
