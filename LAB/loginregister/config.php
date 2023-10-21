<?php

$conn = mysqli_connect("localhost", "root", "", "webproglab");

if (!$conn) {
    echo "Connection Failed";
}