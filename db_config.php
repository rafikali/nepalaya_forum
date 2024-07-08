<?php ob_start();

$hostname = "localhost";
$username = "root";
$password = "secret123";
$database = "nepalaya_forum";

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
