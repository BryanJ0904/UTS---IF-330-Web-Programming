<?php
$con = mysqli_connect("localhost", "root", "", "webprog");

$q = "SELECT img, nama, id FROM resto where category='makanan'";
$query = mysqli_query($con, $q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Makanan/Minuman</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center"> Restoran IF330</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Gambar</th>
                            <th>Nama Makanan/Minuman</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    while ($hasil = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td><a href='detail.php?id=" . $hasil['id'] . "'><img src='" . $hasil['img'] . "' width='100' height='100'></a></td>";
                        echo "<td><a href='detail.php?id=" . $hasil['id'] . "'>" . $hasil['nama'] . "</a></td>";
                        echo "</tr>";
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
