<?php 

$server = "localhost";
$user = "tudor";
$pass = "tudor";
$database = "gradina_zoo";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>