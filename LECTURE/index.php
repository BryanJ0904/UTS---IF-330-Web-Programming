<?php
//admin view
<form action="admin.php" method="post">
    Nama: <input type="text" name="txtNama"><br>
    Harga: <input type="text" name="txtHarga"><br>
    Deskripsi: <input type="text" name="txtDeskripsi"><br>
    Gambar: <input type="file" name="txtImg"><br>
    <input type="submit" value='ADD'>
</form>

<?php
$con = mysqli_connect("localhost", "root", "", "webprog");

if (isset($_POST['txtNama'])) {
    $insertQuery = "INSERT INTO resto (nama, harga, deskripsi, img) 
    VALUES
    ('".$_POST['txtNama']."', '".$_POST['txtHarga']."', '".$_POST['txtDeskripsi']."', '".$_POST['txtImg']."') ";
    $query2 = mysqli_query($con, $insertQuery);
}

if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];
    $deleteQuery = "DELETE FROM resto WHERE id = $deleteId";
    $query3 = mysqli_query($con, $deleteQuery);
}

if (isset($_POST['edit_id'])) {
    $editId = $_POST['edit_id'];
    $newNama = $_POST['new_nama'];
    $newHarga = $_POST['new_harga'];
    $newDeskripsi = $_POST['new_deskripsi'];
    $newImg = $_POST['new_img'];

    $updateQuery = "UPDATE resto SET nama = '$newNama', harga = '$newHarga', deskripsi = '$newDeskripsi', img = '$newImg' WHERE id = $editId";
    $query4 = mysqli_query($con, $updateQuery);
}

$q = "SELECT * FROM resto";
$query = mysqli_query($con, $q);

echo "<table border=1 width=100%>";
echo "<tr style='background-color:red'>";
echo "<th>ID</th>";
echo "<th>Nama</th>";
echo "<th>Harga</th>";
echo "<th>Deskripsi</th>";
echo "<th>Gambar</th>";
echo "<th>Edit</th>";
echo "<th>Delete</th>";
echo "</tr>";

while ($hasil = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>" . $hasil['id'] . "</td>";
    echo "<td>" . $hasil['nama'] . "</td>";
    echo "<td>" . $hasil['harga'] . "</td>";
    echo "<td>" . $hasil['deskripsi'] . "</td>";
    echo "<td><img src='" . $hasil['img'] . "' width='100' height='100'></td>";
    echo "<td><a href='admin.php?edit_id=" . $hasil['id'] . "'>Edit</a></td>";
    echo "<td><a href='admin.php?delete_id=" . $hasil['id'] . "'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";

if (isset($_GET['edit_id'])) {
    $editId = $_GET['edit_id'];
    $editQuery = "SELECT * FROM resto WHERE id = $editId";
    $editResult = mysqli_query($con, $editQuery);
    $editData = mysqli_fetch_assoc($editResult);

    echo "<h3>Edit Restaurant Entry</h3>";
    echo "<form action='admin.php' method='post'>";
    echo "<input type='hidden' name='edit_id' value='" . $editData['id'] . "'>";
    echo "Nama: <input type='text' name='new_nama' value='" . $editData['nama'] . "'><br>";
    echo "Harga: <input type='text' name='new_harga' value='" . $editData['harga'] . "'><br>";
    echo "Deskripsi: <input type='text' name='new_deskripsi' value='" . $editData['deskripsi'] . "'><br>";
    echo "Gambar: <input type='file' name='new_img' value='" . $editData['img'] . "'><br>";
    echo "<input type='submit' value='Simpan Perubahan'>";
    echo "</form>";
}

$resetQuery = "ALTER TABLE resto AUTO_INCREMENT = 1";
$queryReset = mysqli_query($con, $resetQuery);

if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];
    $deleteQuery = "DELETE FROM resto WHERE id = $deleteId";
    $query3 = mysqli_query($con, $deleteQuery);

    $resetQuery = "ALTER TABLE resto AUTO_INCREMENT = 1";
    $queryReset = mysqli_query($con, $resetQuery);
}

?>


?>
