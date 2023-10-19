<?php
$server = "localhost";
$username = "root";
$password = "your_password";
$database = "OPD";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    die("Error". mysqli_connect_error());
}

?>
