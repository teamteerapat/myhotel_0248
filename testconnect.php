<?php
$conn = mysqli_connect("localhost:3307", "root", "", "football");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Successfully";
