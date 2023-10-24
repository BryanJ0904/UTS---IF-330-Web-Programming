
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .table img {
            max-width: 100px;
        }

        #back-button{
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
<!-- <form action="admin.php" method="post">
    Nama: <input type="text" name="txtNama"><br>
    Harga: <input type="text" name="txtHarga"><br>
    Deskripsi: <input type="text" name="txtDeskripsi"><br>
    Gambar: <input type="file" name="txtImg"><br>
    <input type="submit" value='ADD'> -->

<?php
include 'config.php';
if($_COOKIE['user_id']== 1){
if (isset($_POST['txtNama'], $_FILES['txtImg']['name'])) {
    $imgUploadDirectory = "./database/images/" . $_FILES['txtImg']['name'] ;
    move_uploaded_file($_FILES['txtImg']['tmp_name'], $imgUploadDirectory);
    $insertQuery = "INSERT INTO resto (nama, harga, deskripsi, img, category)
    VALUES
    ('".$_POST['txtNama']."', '".$_POST['txtHarga']."', '".$_POST['txtDeskripsi']."', '".$imgUploadDirectory."', '".$_POST['txtCategory']."') ";
    $query2 = mysqli_query($conn, $insertQuery);
}

if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];
    $deleteQuery = "DELETE FROM resto WHERE id = $deleteId";
    $query3 = mysqli_query($conn, $deleteQuery);
}

if (isset($_POST['edit_id'])) {
    $editId = $_POST['edit_id'];
    $newNama = $_POST['new_nama'];
    $newHarga = $_POST['new_harga'];
    $newDeskripsi = $_POST['new_deskripsi'];
    $newImg = $_POST['new_img'];
    $newCategory =$_POST['new_category'];

    $updateQuery = "UPDATE resto SET nama = '$newNama', harga = '$newHarga', deskripsi = '$newDeskripsi', img = '$newImg', category='$newCategory' WHERE id = $editId";
    $query4 = mysqli_query($conn, $updateQuery);
}

$q = "SELECT * FROM resto";
$query = mysqli_query($conn, $q);



$resetQuery = "ALTER TABLE resto AUTO_INCREMENT = 1";
$queryReset = mysqli_query($conn, $resetQuery);

if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];
    $deleteQuery = "DELETE FROM resto WHERE id = $deleteId";
    $query3 = mysqli_query($conn, $deleteQuery);

    $resetQuery = "ALTER TABLE resto AUTO_INCREMENT = 1";
    $queryReset = mysqli_query($conn, $resetQuery);
}

?>
<div class="container mt-5">
    <span class="p-3 mt-3">
        <a href="category.php" style="color: black; font-size: 24px; text-decoration: none;"><img class="img-fluid" id="back-button" src="./images/back.png" style="margin-right: 10px;"/>Kembali</a>
    </span>
    <br /><br />
    <div class="row">
        <div class="col-md-6">
            <form action="admin.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="txtNama">Nama:</label>
                    <input type="text" class="form-control" name="txtNama" id="txtNama">
                </div>
                <div class="form-group">
                    <label for="txtHarga">Harga:</label>
                    <input type="text" class="form-control" name="txtHarga" id="txtHarga">
                </div>
                <div class="form-group">
                    <label for="txtDeskripsi">Deskripsi:</label>
                    <input type="text" class="form-control" name="txtDeskripsi" id="txtDeskripsi">
                </div>
                <div class="form-group">
                    <label for="txtImg">Gambar:</label>
                    <input type="file" class="form-control-file" name="txtImg" id="txtImg">
                </div>
                <div class="form-group">
                    <label for="txtCategory">Category:</label>
                    <select name="txtCategory" id="txtCategory">
                        <option value="appetizer">Appetizer</option>
                        <option value="breakfast">Breakfast</option>
                        <option value="lunch">Lunch</option>
                        <option value="dinner">Dinner</option>
                        <option value="dessert">Dessert</option>
                        <option value="drinks">Drinks</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">ADD</button>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // echo "<table border=1 width=100%>";
                        // echo "<tr style='background-color:red'>";
                        // echo "<th>ID</th>";
                        // echo "<th>Nama</th>";
                        // echo "<th>Harga</th>";
                        // echo "<th>Deskripsi</th>";
                        // echo "<th>Gambar</th>";
                        // echo "<th>Edit</th>";
                        // echo "<th>Delete</th>";
                        // echo "</tr>";
                        
                        
                        
                        while ($hasil = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td>" . $hasil['id'] . "</td>";
                            echo "<td>" . $hasil['nama'] . "</td>";
                            echo "<td>" . $hasil['harga'] . "</td>";
                            echo "<td>" . $hasil['deskripsi'] . "</td>";
                            echo "<td><img src='" . $hasil['img'] . "' width='100' height='100'></td>";
                            echo "<td>" . $hasil['category'] . "</td>";
                            echo "<td><a href='admin.php?edit_id=" . $hasil['id'] . "'>Edit</a></td>";
                            echo "<td><a href='admin.php?delete_id=" . $hasil['id'] . "'>Delete</a></td>";
                            echo "</tr>";
                        }
                        // echo "</table>";
                        
                        if (isset($_GET['edit_id'])) {
                            $editId = $_GET['edit_id'];
                            $editQuery = "SELECT * FROM resto WHERE id = $editId";
                            $editResult = mysqli_query($conn, $editQuery);
                            $editData = mysqli_fetch_assoc($editResult);
                        
                            echo "<h3>Edit Restaurant Entry</h3>";
                            echo "<form action='admin.php' method='post'>";
                            echo "<input type='hidden' name='edit_id' value='" . $editData['id'] . "'>";
                            echo "Nama: <input type='text' name='new_nama' value='" . $editData['nama'] . "'><br>";
                            echo "Harga: <input type='text' name='new_harga' value='" . $editData['harga'] . "'><br>";
                            echo "Deskripsi: <input type='text' name='new_deskripsi' value='" . $editData['deskripsi'] . "'><br>";
                            echo "Gambar: <input type='file' name='new_img' value='" . $editData['img'] . "'><br>";
                            echo "Categori: <select name='new_category' id='txtCategory'>
                            <option value='" . ($editData['category']  === ''). "appetizer'>Appetizer</option>
                            <option value='" . ($editData['category'] === '') . "breakfast'>Breakfast</option>
                            <option value='" . ($editData['category'] === '') . "lunch'>Lunch</option>
                            <option value='" . ($editData['category']  === ''). "dinner'>Dinner</option>
                            <option value='" . ($editData['category'] === '') . "dessert'>Dessert</option>
                            <option value='" . ($editData['category'] === '') . "drinks'>Drinks</option>
                            </select>";
                            echo "<br>";
                            echo "<input type='submit' value='Simpan Perubahan'>";
                            echo "</form>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</form>
</body>
</html>
<?php 
}else{
    echo "Access Denied";
}
?>