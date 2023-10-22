<?php
if (isset($_POST['task'], $_POST['progress'], $_POST['id'], $_POST['due_date'])) {
    if($_GET['action'] == 'edit'){
        $stmt = $db->prepare("UPDATE todolist SET task = ?, done = ?, progress = ?, due_date = ? WHERE task = (SELECT task FROM todolist WHERE user_id = ? LIMIT 1 OFFSET ?)");

        if ($stmt) {
            $done = ($_POST["progress"] == 'Done') ? 1 : 0;

            $stmt->bind_param("sissii", $_POST['task'], $done, $_POST['progress'], $_POST['due_date'], $_COOKIE['user_id'], $_POST['id']);
            $stmt->execute();
            $stmt->close();
        }
    }
    else if($_GET['action'] == 'view'){
        $stmt = $db->prepare("INSERT INTO todolist VALUES (?, ?, ?, ?, ?);");

        if ($stmt) {
            $done = ($_POST["progress"] == 'Done') ? 1 : 0;

            $stmt->bind_param("sisis", $_POST['task'], $done, $_POST['progress'], $_POST['id'], $_POST['due_date']);
            $stmt->execute();
            $stmt->close();
        }
    }
}
?>