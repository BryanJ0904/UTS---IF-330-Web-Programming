<?php
if (isset($_POST['task'], $_POST['progress'], $_POST['id'])) {
    if($_GET['action'] == 'edit'){
        $stmt = $db->prepare("UPDATE todolist SET task = ?, done = ?, progress = ? WHERE task = (SELECT task FROM todolist LIMIT 1 OFFSET ?)");

        if ($stmt) {
            $done = ($_POST["progress"] == 'Done') ? 1 : 0;

            $stmt->bind_param("sisi", $_POST['task'], $done, $_POST['progress'], $_POST['id']);
            $stmt->execute();
            $stmt->close();
        }
    }
    else if($_GET['action'] == 'view'){
        $stmt = $db->prepare("INSERT INTO todolist VALUES (?, ?, ?, ?);");

        if ($stmt) {
            $done = ($_POST["progress"] == 'Done') ? 1 : 0;

            $stmt->bind_param("sisi", $_POST['task'], $done, $_POST['progress'], $_POST['id']);
            $stmt->execute();
            $stmt->close();
        }
    }
}
?>