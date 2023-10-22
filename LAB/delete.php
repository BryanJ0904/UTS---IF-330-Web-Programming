<?php
if (isset($_POST['delete'])){
    $delete = "DELETE FROM todolist WHERE task = (SELECT task FROM todolist LIMIT 1 OFFSET " . $_POST['id'] . ")";
    $result = $db->query($delete);
}
?>