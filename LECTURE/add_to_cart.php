<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d8fcf4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }


        h1 {
            text-align: center;
        }

        p {
            text-align: center;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .subtotal-column {
            text-align: right;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
        }

        .bg_color{
            background: #d8fcf4;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Your Cart</h1>
        <table>
            <tr>
                <th>Menu Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            <?php
            session_start();
            $con = mysqli_connect("localhost", "root", "", "webprog");

            if (isset($_POST['menu_id']) && isset($_POST['menu_name']) && isset($_POST['menu_price'])) {
                $menuId = $_POST['menu_id'];
                $userId = $_POST['user_id'];
                $menuName = $_POST['menu_name'];
                $menuPrice = $_POST['menu_price'];

                $query = "SELECT * FROM cart WHERE menu_id = $menuId AND user_id = $userId";
                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $newQuantity = $row['quantity'] + 1;
                    $updateQuery = "UPDATE cart SET quantity = $newQuantity WHERE menu_id = $menuId AND user_id = $userId";
                    mysqli_query($con, $updateQuery);
                } else {
                    $insertQuery = "INSERT INTO cart (menu_id, menu_name, user_id, menu_price, quantity) VALUES ($menuId, '$menuName', $userId, $menuPrice, 1)";
                    mysqli_query($con, $insertQuery);
                }
            }

            $cartQuery = "SELECT * FROM cart WHERE user_id = $userId";
            $cartResult = mysqli_query($con, $cartQuery);

            $totalPrice = 0;

            while ($cartItem = mysqli_fetch_assoc($cartResult)) {
                echo "<tr>";
                echo "<td>" . $cartItem['menu_name'] . "</td>";
                echo "<td>Rp" . $cartItem['menu_price'] . "</td>";
                echo "<td>" . $cartItem['quantity'] . "</td>";
                $subtotal = $cartItem['menu_price'] * $cartItem['quantity'];
                echo "<td class='subtotal-column'>Rp" . number_format($subtotal, 2) . "</td>";
                $totalPrice += $subtotal;
                echo "</tr>";
            }
            ?>

        </table>
        <p>Total Price: Rp<?php echo number_format($totalPrice, 2); ?></p>
        <p>Back to Order<a href='category.php'> Click here</a></p>
    </div>
</body>
</html>
