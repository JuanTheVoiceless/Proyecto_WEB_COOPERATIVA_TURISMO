<?php
$serverName = "localhost";
$userName = "root";
$password = "4nT¡c0n$7it¿ciOnkL";
$dataBaseName = "users";

$conn = new mysqli($serverName, $userName, $password, $dataBaseName);
$conn->set_charset("utf8");

if($conn -> error){
    die("No ha conexion". $conn -> connect_error);
}
