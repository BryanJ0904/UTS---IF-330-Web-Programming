<?php
$con = mysqli_connect("localhost", "root", "", "webprog");

if (isset($_GET['id'])) {
    $menuId = $_GET['id'];
    $detailQuery = "SELECT * FROM resto WHERE id = $menuId";
    $detailResult = mysqli_query($con, $detailQuery);
    $menuData = mysqli_fetch_assoc($detailResult);

    if ($menuData) {
        echo "<h1>Detail Menu</h1>";
        echo "<img src='" . $menuData['img'] . "' width='100' height='100'><br>";
        echo "Nama: " . $menuData['nama'] . "<br>";
        echo "Harga: " . $menuData['harga'] . "<br>";
        echo "Deskripsi: " . $menuData['deskripsi'];
    } else {
        echo "Menu tidak ditemukan.";
    }
} else {
    echo "Parameter ID tidak ditemukan.";
}
?>
