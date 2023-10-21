<?php

$conn = mysqli_connect("localhost", "root", "", "webprog");

if (!$conn) {
    echo "Connection Failed";
}