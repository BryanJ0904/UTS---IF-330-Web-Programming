<?php
$db = mysqli_connect("localhost", "root", "", "webproglab");
if(!$db){
    die('Connect Error: ' . mysqli_connect_error());
}
?>