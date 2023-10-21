<?php
$con = mysqli_connect("localhost", "root", "", "webprog");

if(isset($_GET['category'])){
    $q = "SELECT img, nama, id, deskripsi, harga FROM resto where category ='" . $_GET['category'] . "';";
    $query = mysqli_query($con, $q);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Makanan/Minuman</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
                            <th>Info Lebih Lengkap</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    while ($hasil = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td><a href='detail.php?id=" . $hasil['id'] . "'><img src='" . $hasil['img'] . "' width='100' height='100'></a></td>";
                        echo "<td><a href='detail.php?id=" . $hasil['id'] . "'>" . $hasil['nama'] . "</a></td>";
                        echo "<td><p class='d-inline-flex gap-1'>
                        <button class='btn btn-primary' type='button' data-bs-toggle='collapse' data-bs-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample'>
                          Info
                        </button>
                      </p>
                      <div class='collapse' id='collapseExample'>
                        <div class='card card-body'> 
                        Deskripsi: " . $hasil['deskripsi'] . "<br>
                        Harga: Rp" . $hasil['harga'] . "<br>
                        </div>
                      </div></td>";
                        echo "</tr>";
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
