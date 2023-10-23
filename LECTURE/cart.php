<link rel="stylesheet" href="navbar.css">
    <header>
    <div class="nav">
        <div class="logo">
            <?php 
                if(isset($_COOKIE['user_id'])){ 
                    echo "<img src='./assets/user.png' alt='Logo Image'>" . $_COOKIE['first_name'] . " " . $_COOKIE['last_name']; 
                }?>
        </div>
        <div>
            <div class="nav-links">
                <?php 
                    if(isset($_COOKIE['user_id'])){ 
                        echo "<a class='login-button' href='logout.php'>Log Out</a>";
                    }else{
                        echo "<a class='login-button' href='login.php'>Login</a>
                            <a class='join-button' href='.register.php'>Register</a>";
                    }
                    ?>
            </div>
        </div>
    </div>
    </header>
    <hr />
<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "webprog");

if (!isset($_COOKIE['user_id'])) {
    echo "Please log in to view your cart.";
} else {
    $user_id = $_COOKIE['user_id'];

    $cartQuery = "SELECT * FROM cart WHERE user_id = $user_id";
    $cartResult = mysqli_query($con, $cartQuery);

    if (mysqli_num_rows($cartResult) >= 0) {
        echo "<html>
            <head>
                <style>
                    table {
                        width: 80%;
                        border-collapse: collapse;
                        margin: 20px auto;
                    }
                    th, td {
                        padding: 10px;
                        text-align: left;
                    }
                    th {
                        background-color: #383c44;
                        color: white;
                    }
                    tr:nth-child(even) {
                        background-color: #f2f2f2;
                    }
                    h1 {
                        text-align: center;
                    }
                    p {
                        text-align: center;
                        font-weight: bold;
                    }
                </style>
            </head>
            <body>
                <h1>Your Cart</h1>
                <table>
                    <tr>
                        <th>Menu Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>";

        $totalPrice = 0;

        while ($cartItem = mysqli_fetch_assoc($cartResult)) {
            echo "<tr>";
            echo "<td>" . $cartItem['menu_name'] . "</td>";
            echo "<td>Rp" . $cartItem['menu_price'] . "</td>";
            echo "<td>" . $cartItem['quantity'] . "</td>";

            // Calculate the subtotal for each item
            $subtotal = $cartItem['menu_price'] * $cartItem['quantity'];
            echo "<td>Rp" . number_format($subtotal, 2) . "</td>";

            $totalPrice += $subtotal;
            echo "</tr>";
        }

        echo "</table>";

        // Display the total price
        echo "<p>Total Price: Rp" . number_format($totalPrice, 2) . "</p>
            </body>
        </html>";
    } else {
        echo "Your cart is empty.";
    }
}
?>
