<?php 

$server = "localhost";
$user = "id18196736_root";
$pass = "oP5eJF%E7u3s<zQ1";
$database = "id18196736_scrubbdb";


$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>