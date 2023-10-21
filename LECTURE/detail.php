<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .menu-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        img {
            width: 100%;
            max-width: 200px;
            height: auto;
            border-radius: 10px;
            margin: 10px 0;
        }

        .menu-details {
            text-align: left;
        }

        .menu-details h2 {
            color: #333;
        }

        .menu-details p {
            color: #666;
        }

        .add-to-cart {
            margin-top: 20px;
        }

        .add-to-cart input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .add-to-cart input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="menu-card">
        <?php
        $con = mysqli_connect("localhost", "root", "", "webprog");

        if (isset($_GET['id'])) {
            $menuId = $_GET['id'];
            $detailQuery = "SELECT * FROM resto WHERE id = $menuId";
            $detailResult = mysqli_query($con, $detailQuery);
            $menuData = mysqli_fetch_assoc($detailResult);

            if ($menuData) {
        ?>
                <h1>Detail Menu</h1>
                <img src="<?php echo $menuData['img']; ?>" alt="<?php echo $menuData['nama']; ?>">
                <div class="menu-details">
                    <h2><?php echo $menuData['nama']; ?></h2>
                    <p>Harga: Rp<?php echo $menuData['harga']; ?></p>
                    <p>Deskripsi: <?php echo $menuData['deskripsi']; ?></p>
                </div>

                <!-- Add to Cart button -->
                <div class="add-to-cart">
                    <form method="post" action="add_to_cart.php">
                        <input type="hidden" name="menu_id" value="<?php echo $menuData['id']; ?>">
                        <input type="hidden" name="user_id" value="<?php echo $_COOKIE['user_id']; ?>">
                        <input type="hidden" name="menu_name" value="<?php echo $menuData['nama']; ?>">
                        <input type="hidden" name="menu_price" value="<?php echo $menuData['harga']; ?>">
                        <input type="submit" value="Add to Cart">
                    </form>
                </div>
        <?php
            } else {
                echo "Menu tidak ditemukan.";
            }
        } else {
            echo "Parameter ID tidak ditemukan.";
        }
        ?>
    </div>
</body>
</html>
