<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to the login page if not logged in
    exit();
}

$user_id = $_SESSION['user_id'];
$con = mysqli_connect("localhost", "root", "", "webprog");
$query = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($con, $query);
$user = mysqli_fetch_assoc($result);

// Display user information
echo "Username: " . $user['username'] . "<br>";
echo "Email: " . $user['email'] . "<br>";
?>
