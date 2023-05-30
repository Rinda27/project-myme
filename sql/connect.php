<?php

$servername = "localhost";
$username = "root";
$password = "myme123";
$dbname = "Myme-database";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>