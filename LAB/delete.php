<?php
if (isset($_POST['delete'])){
    $delete = "DELETE FROM todolist WHERE task = (SELECT task FROM todolist WHERE user_id = '" . $_COOKIE['user_id']. "'LIMIT 1 OFFSET " . $_POST['id'] . ")";
    $result = $db->query($delete);
}
?>